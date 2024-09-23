<?php

namespace App\Http\Controllers;
use App\Models\Dish;

use Illuminate\Http\Request;

class DishController extends Controller
{
    public function show($id)
{
    $dish = Dish::find($id); // Найти блюдо по ID

    if (!$dish) {
        abort(404); // Если блюдо не найдено, вернуть 404
    }

    return view('dish.show', compact('dish')); // Вернуть представление с конкретным блюдом
}
}
