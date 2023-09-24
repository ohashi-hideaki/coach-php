<?php
$status_codes=[
    [
        'code' => '102',
        'meaning' => 'Processing',
        'discription' => '処理中である',
    ],
    [
        'code' => '200',
        'meaning' => 'OK',
        'discription' => 'リクエストが正常に成功できた',
    ],
    [
        'code' => '301',
        'meaning' => 'Moved',
        'discription' => 'リクエストしたリソースが恒久的に移動されている',
    ],
    [
        'code' => '304',
        'meaning' => 'Not Modified',
        'discription' => 'リクエストしたリソースは更新されていない',
    ],
    [
        'code' => '400',
        'meaning' => 'Bad Request',
        'discription' => 'クライアントのリクエストに異常がある',
    ],
    [
        'code' => '401',
        'meaning' => 'Unauthorized',
        'discription' => 'アクセストークンが無効な時や、認証がされていない',
    ],
    [
        'code' => '403',
        'meaning' => 'Forbidden',
        'discription' => '閲覧権限がないファイルやフォルダである',
    ],
    [
        'code' => '404',
        'meaning' => 'Not found',
        'discription' => 'Webページが見つからない',
    ],
    [
        'code' => '500',
        'meaning' => 'Internal Server Erro',
        'discription' => '何らかのサーバー内でエラーが起きた',
    ],
    [
        'code' => '502',
        'meaning' => 'Bad Gateway',
        'discription' => 'サーバーがリクエストに満たすのに必要な機能をサポートしていない',
    ],
    [
        'code' => '503',
        'meaning' => 'Service Unavailable',
        'discription' => '一時的にサーバーにアクセスできない',
    ]
];
