# Yii2 Helpers

[![Build Status](https://travis-ci.org/naffiq/yii2-helpers.svg?branch=master)](https://travis-ci.org/naffiq/yii2-helpers)
[![Code Climate](https://codeclimate.com/github/naffiq/yii2-helpers/badges/gpa.svg)](https://codeclimate.com/github/naffiq/yii2-helpers)
[![Test Coverage](https://codeclimate.com/github/naffiq/yii2-helpers/badges/coverage.svg)](https://codeclimate.com/github/naffiq/yii2-helpers/coverage)

Установка через composer:
```
composer require naffiq/yii2-helpers
```

### Зависимости

- Yii2
- PHP intl


## DateHelper

```php
<?php
use \naffiq\helpers\DateHelper; 

DateHelper::getTimeSince(strtotime('-5 min'));
```

Возвращает дату `$time` в читаемом для человека формате. Напр.:

- только что
- 5 минут назад
- 5 часов назад
- Вчера
- 19 июн. 1993

## Number

```php
<?php
use \naffiq\helpers\Number; 

Number::toText(10245);
```

Возвращает число прописью (десять тысяч двести сорок пять)