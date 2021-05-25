<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function submitCtgr(CategoryRequest $reqCtgr)
    {

        $category = new Category();
        $category->name = $reqCtgr->input('cat_name');

        $category->save();

        return redirect()->route('create')->with('successCtgr', 'Category was successfully added');
    }

    public function ctgrData() {
        $category = new Category();
        return view('layout', ['data' => $category->all()]);
    }
}
