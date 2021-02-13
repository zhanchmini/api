<?php

return [
    'components' => [
        'response' => [
            'class' => yii\web\Response::class,
            //'format' => \yii\web\Response::FORMAT_JSON,
            'formatters' => [
                \yii\web\Response::FORMAT_JSON => [
                    'class' => yii\web\JsonResponseFormatter::class,
                    'prettyPrint' => YII_DEBUG,
                ],
            ],

            'on beforeSend' => function ($event) {
                $response = $event->sender;

                if (in_array($response->format, [
                    \yii\web\Response::FORMAT_JSON,
                    \yii\web\Response::FORMAT_XML,
                ])) {
                    $response->data = [
                        'status_code' => $response->getStatusCode(),
                        'status_text' => $response->statusText,
                        'success' => $response->isSuccessful,
                        'data' => $response->data,
                    ];

                    $response->statusCode = 200;
                }
            },
        ],
    ],
];
