# Mini
Minimal development of multiple development

#Install mini [yii2 (lumen update)]

```
composer require zhanchmini/mini

```

#Install example

```
composer require zhanchmini/example

```

#Install api

```
composer require zhanchmini/api

```

#update web

```php

$config = \yii\helpers\ArrayHelper::merge($config,
    require __DIR__ . '/../vendor/zhanchmini/mini/src/yii2/config/web.php',
    require __DIR__ . '/../vendor/zhanchmini/api/src/yii2/config/web.php',
    require __DIR__ . '/../vendor/zhanchmini/example/src/yii2/config/web.php'
);

return $config;

```

#update console

```php

$config = \yii\helpers\ArrayHelper::merge($config,
    require __DIR__ . '/../vendor/zhanchmini/mini/src/yii2/config/console.php',
    require __DIR__ . '/../vendor/zhanchmini/api/src/yii2/config/console.php',
    require __DIR__ . '/../vendor/zhanchmini/example/src/yii2/config/console.php'
);

return $config;

```

# path/?r=example/index

```json

{
    "status_code": 200,
    "success": 1,
    "data": "Hello World!"
}

```
