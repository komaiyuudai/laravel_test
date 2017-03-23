<?php

// パンくず
return [
    'store_index' => [
        'content'   => 'ショップ',
        'hierarchy' => [
            'store_index',
        ],
        'url'       => '/store',
    ],
    'store_detail' => [
        'table'     => 'stores',
        'column'    => 'name',
        'hierarchy' => [
            'store_index',
            'store_detail',
        ],
        'url'       => '/store/%store_id%',
    ],
    'brand_index' => [
        'content'   => 'ブランド',
        'hierarchy' => [
            'brand_index',
        ],
        'url'       => '/brand',
    ],
    'brand_detail' => [
        'table'     => 'brands',
        'column'    => 'name',
        'hierarchy' => [
            'brand_index',
            'brand_detail',
        ],
        'url'       => '/brand/%brand_id%',
    ],
    'ranking_index' => [
        'content'   => 'ランキング',
        'hierarchy' => [
            'ranking_index',
        ],
    ],
    'search_index' => [
        'content'   => '検索',
        'hierarchy' => [
            'search_index',
        ],
    ],
    'product_index' => [
        'table'     => 'products',
        'column'    => 'name',
        'hierarchy' => [
            'store_detail',
            'brand_detail',
            'product_index',
        ],
        'url'       => '/%store_id%/%brand_id%/%product_id%',
    ],
];