<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $query = Dish::where('available', true);

        if ($request->has('sort')) {
            $sort = $request->input('sort');
            switch ($sort) {
                case 'country':
                    $query->orderBy('country');
                    break;
                case 'name':
                    $query->orderBy('name');
                    break;
                case 'price':
                    $query->orderBy('price');
                    break;
                default:
                    $query->latest();
                    break;
            }
        } else {
            $query->latest();
        }
        if ($request->has('category')) {
            $query->where('category', $request->input('category'));
        }

        $dishes = $query->get();

        return view('menu', compact('dishes'));
    }

    public function show(Dish $dish)
    {
        return view('show', compact('dish'));
    }
}