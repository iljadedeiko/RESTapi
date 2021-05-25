<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Models\Item;

class ItemController extends Controller {

    public function submitItm(ItemRequest $reqItm) {

        $item = new Item();
        //$item->category_id = $reqItm->input('categoryName');
        $item->name = $reqItm->input('name');
        $item->value = $reqItm->input('value');
        $item->quality = $reqItm->input('quality');

        $item->save();

        return redirect()->route('create')->with('successItm', 'Item was successfully added');
    }

    public function itemsData() {
       //dd(Item::all());
       return view('update', ['dataItm' => Item::all()]);

    }
}
