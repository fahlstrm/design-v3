<?php
return [
    "mode"         => "development",
    "image_path"   =>  __DIR__ . "/../../assets/img/",
    "cache_path"   =>  __DIR__ . "/../../cache/cimage/",
    "autoloader"   =>  __DIR__ . "/../../vendor/autoload.php",
    'aspect_ratio_constant' => function () {
        return array(
            '1:1'   => 1,
            '3:1'   => 3/1,
            '3:2'   => 3/2,
            '4:3'   => 4/3,
            '8:5'   => 8/5,
            '5:8'   => 5/8,
            '16:10' => 16/10,
            '16:9'  => 16/9,
            'golden' => 1.618,
        );
    },
];
