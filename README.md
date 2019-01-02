# Laravel Export To Excel CSV

This package quickly export data to Excel or CSV.

## Installation

You can install the package via composer:

``` bash
composer require hashcrypt/export
```

## Usage

To export data from controller you need to use class,

```php
use Hashcrypt\Export\Export;
```

To export as Excel,

```php
$data = Model::all()->toarray();
return Export::export($data, 'filename.xlsx');
```

To export as CSV,

```php
$data = Model::all()->toarray();
return Export::export($data, 'filename.csv');
```