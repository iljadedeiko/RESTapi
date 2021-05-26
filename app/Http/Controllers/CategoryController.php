<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Item;

class CategoryController extends Controller
{
    public function submitCtgr(CategoryRequest $reqCtgr)
    {
        $category = new Category();
        $category->category_name = $reqCtgr->input('cat_name');

        $category->save();

        return redirect()->route('create')->with('successCtgr', 'Category was successfully added');
    }

    public function ctgrData() {
        $category = new Category();
        return view('create', ['dataCtgr' => $category->all()]);
    }

    public function geleteCategory($id) {
        Category::find($id)->delete();
        return redirect()->route('item-data')->with('deleteCat', 'Category was deleted');
    }
}
