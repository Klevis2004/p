<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesBlog; // Import the CategoriesBlog class
use App\Models\Category; // Assuming your model is named Category
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('users.contain.category');
    }
    public function store(CategoriesBlog $request)
    {
        $validated = $request->validated();

        $category = Category::create($validated);

        session()->flash('status', 'The category was created successfully!');
        return redirect('/');
    }
}
