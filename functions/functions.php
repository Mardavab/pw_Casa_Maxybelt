<?php

function menu(){
    $menus = [
        (object) [
            "title"     => "Home",
            "icon"      => "home",
            "url"       => base_url(['index.php']),
            "detail"    => []
        ],
        (object) [
            "title"     => "Facturas",
            "icon"      => "assignment",
            "url"       => "",
            "detail"    => [
                (object)[
                    'title' => 'Entradas',
                    'url'   => ''
                ],
                (object)[
                    'title' => 'Salidas',
                    'url'   => ''
                ],
                (object)[
                    'title' => 'Gastos',
                    'url'   => ''
                ]
            ]
        ],
        (object) [
            "title"     => "Cartera",
            "icon"      => "account_balance_wallet",
            "url"       => base_url(['index.php']),
            "detail"    => []
        ],
        (object) [
            "title"     => "Productos",
            "icon"      => "bubble_chart",
            "url"       => "",
            "detail"    => [
                (object)[
                    'title' => 'Ventas',
                    'url'   => ''
                ],
                (object)[
                    'title' => 'Gastos',
                    'url'   => ''
                ]
            ]
        ],
        (object) [
            "title"     => "Clientes",
            "icon"      => "perm_contact_calendar",
            "url"       => "",
            "detail"    => [
                (object)[
                    'title' => 'Clientes',
                    'url'   => ''
                ],
                (object)[
                    'title' => 'Proveedores',
                    'url'   => ''
                ]
            ]
        ],
        (object) [
            "title"     => "Usuarios",
            "icon"      => "people",
            "url"       => base_url(['index.php']),
            "detail"    => []
        ],
        (object) [
            "title"     => "Metodos de pago",
            "icon"      => "attach_money",
            "url"       => base_url(['index.php']),
            "detail"    => []
        ],
    ];

    return $menus;
}

function base_url($options = []){
    $options = implode("/", $options);
    $host = $_SERVER['HTTP_HOST'];
    $base_url = $host == 'localhost:3000' ? "http://localhost:3000" : "https://asbioquim.com.co";
    return "{$base_url}/{$options}";
}