<?php

return [
    'components' => [
        'response' => [
            'class' => 'yii\web\Response',
            'format' => \yii\web\Response::FORMAT_JSON,
            'formatters' => [
                \yii\web\Response::FORMAT_JSON => [
                    'class' => 'yii\web\JsonResponseFormatter',
                    'prettyPrint' => YII_DEBUG,
                ],
            ],

            'on beforeSend' => function ($event) {
                $response = $event->sender;

                $response->data = [
                    'status_code' => $response->statusCode,
                    'success' => (int)$response->isSuccessful,
                    'data' => $response->data,
                ];

                $response->statusCode = 200;
            },
        ],
    ],
];
