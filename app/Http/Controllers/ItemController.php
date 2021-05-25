<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller {

    public function submitItm(ItemRequest $reqItm) {

        return view('create');
    }
}
