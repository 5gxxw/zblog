<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |大多数模板系统从磁盘加载模板。在这里，您可以指定一个数组，这些路径应该检查您的视图。当然平时laravel查看路径已注册为你。
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    | 此选项确定将为您的应用程序存储所有编译的刀片模板的位置。通常，这是存储目录中的。不过，与往常一样，您可以自由更改此值。
    */

    'compiled' => realpath(storage_path('framework/views')),

    ''
];
