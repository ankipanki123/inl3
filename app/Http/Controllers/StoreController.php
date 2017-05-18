<?php

namespace App\Http\Controllers;

use App\Store;
//use App\Store;
//use App\Review;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{

  public function index()
  {
      $stores = Store::all();
      return view("Store.index",[
        "stores" => $stores
      ]);
  }
  public function show($id)
  {
      $store = Store::find($id);
      $store->products = $store->products;

      return view("Store.show", [
        "store" => $store
      ]);

  }





}
