<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::query()->limit(4)->get();
        return view('clients.index', ['categories' => $categories]);
    }
}
