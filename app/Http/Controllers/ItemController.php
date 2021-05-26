<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller {

    public function submitItm(ItemRequest $reqItm) {

        $item = new Item();
        $item->category_id = $reqItm->input('categoryName');
        $item->name = $reqItm->input('name');
        $item->value = $reqItm->input('value');
        $item->quality = $reqItm->input('quality');

        $item->save();

        return redirect()->route('create')->with('successItm', 'Item was successfully added');
        //$item = Item::create($id->all());
        //return response()->json($item, 201);
    }

    public function itemsData() {
        return view('update', ['dataItm' => DB::table('categories')
            ->join('items', 'categories.cat_id', "=", 'items.category_id')
            ->get()]);
       //->all();
//        $item = DB::table('categories')
//           ->join('items', 'categories.cat_id', "=", 'items.category_id')
//           ->get();
//        return response()->json($item, 200);
    }

    public function getOneItm($id) {

        return view('one-item', ['data' => DB::table('categories')
            ->join('items', 'categories.cat_id', "=", 'items.category_id')
            ->where('items.id', $id)
            ->find($id)
            ]);
    }

    public function updatedItemSubmit($id, ItemRequest $reqItm) {

        $item = Item::find($id);
        $item->category_id = $reqItm->input('categoryName');
        $item->name = $reqItm->input('name');
        $item->value = $reqItm->input('value');
        $item->quality = $reqItm->input('quality');

        $item->save();

        return redirect()->route('item-data')->with('successItm', 'Item was successfully updated');
//        $item = Item::find($id);
//        return response()->json($item, 201);
    }
}
