<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function submitCtgr(CategoryRequest $reqCtgr)
    {
        return view('create');
    }
}
