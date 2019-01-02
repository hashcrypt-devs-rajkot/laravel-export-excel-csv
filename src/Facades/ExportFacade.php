<?php

namespace Hashcrypt\Export\Facades;

use Illuminate\Support\Facades\Facade;

class ExportFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'export';
    }
}