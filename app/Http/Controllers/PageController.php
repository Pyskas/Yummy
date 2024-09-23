<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function menu()
    {
        return view('menu');
    }
    public function register()
    {
        return view('register');
    }
    public function autorization()
    {
        return view('autorization');
    }
    public function contacts()
    {
        return view('contacts');
    }

    public function about()
    {
        $latestDishes = [
            [
                'name' => 'Шоколадный торт',
                'image' => 'images/tort.png'
            ],
            [
                'name' => 'Яблочный пирог',
                'image' => 'images/pie.png'
            ],
            [
                'name' => 'Чизкейк',
                'image' => 'images/cheesecake.png'
            ],
            [
                'name' => 'Кексы',
                'image' => 'images/cupcake.png'
            ],
            [
                'name' => 'Маффин',
                'image' => 'images/muffin.png'
            ],
        ];

        return view('about', compact('latestDishes'));
    }
}
