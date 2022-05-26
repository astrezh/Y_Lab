<?php


$array = [

    'SKLAD1' => [

        'EDA' => [

            'TOVAR1' => [

                'NAME' => '....',

                'PRICE' => 1238

            ],

            'TOVAR2' => [

                'NAME' => '....',

                'PRICE' => 1235

            ],
        ],

        'NAPITKI' => [

            'TOVAR55' => [

                'NAME' => '....',

                'PRICE' => 1237

            ],

            'TOVAR54' => [

                'NAME' => '....',

                'PRICE' => 1236

            ],

        ],

    ],

    'SKLAD2' => [

        'EDA' => [

            'TOVAR66' => [

                'NAME' => '....',

                'PRICE' => 1239

            ],

            'TOVAR67' => [

                'NAME' => '....',

                'PRICE' => 1231

            ],

        ],

        'NAPITKI' => [

            'TOVAR77' => [

                'NAME' => '....',

                'PRICE' => 1233

            ],

            'TOVAR78' => [

                'NAME' => '....',

                'PRICE' => 1234

            ],

        ],

    ],

];

foreach ($array as $key => $row) {
    $price[$key] = $row['PRICE'];
}

array_multisort($price, SORT_NUMERIC, $array);

?>





