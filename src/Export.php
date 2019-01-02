<?php

namespace Hashcrypt\Export;

use Response;

class Export
{
    
    public static function export($list, $file)
    {
        $ext = explode('.',$file);
        if($ext[1] == 'csv'){
            $headers = [
                    'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
                ,   'Content-type'        => 'application/csv'
                ,   'Content-Disposition' => 'attachment; filename='.$ext[0].'.csv'
                ,   'Expires'             => '0'
                ,   'Pragma'              => 'public'
            ];
        }else{
            $headers = [
                    'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
                ,   'Content-type'        => 'application/vnd.ms-excel'
                ,   'Content-Disposition' => 'attachment; filename='.$ext[0].'.xlsx'
                ,   'Expires'             => '0'
                ,   'Pragma'              => 'public'
            ];
        }
        
        array_unshift($list, array_keys($list[0]));
        
        $callback = function() use ($list) {
            $FH = fopen('php://output', 'w');
            foreach ($list as $row) { 
                fputcsv($FH, $row);
            }
            fclose($FH);
        };
        
        return Response::stream($callback, 200, $headers);
    }
}
