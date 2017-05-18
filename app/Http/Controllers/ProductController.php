<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
         {
               $this->middleware('auth', ['except' => ['index','show']]);
         }

    public function index()
    {
        $products = Product::all();
        return view("index",[
          "products" => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->title = $request->get("title");
        $product->brand = $request->get("brand");
        $product->price = $request->get("price");
        $product->image = $request->get("image");
        $product->description = $request->get("description");
        $product->save();

        $product_id = DB::connection()->getPdo()->lastInsertId();
              foreach ($request->get("stores") as $store) {
                  DB::table('product_store')->insert(
                    [
                      "product_id" => $product_id,
                      "store_id" => $store
                    ]
                  );
              }


        return redirect()-> action('ProductController@index')->with('status', 'Produkten är sparad');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $product->stores = $product->stores;
        $product->reviews = $product->reviews;
        return view("show", [
          "product" => $product
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view("edit", [
          "product" => $product
        ]);



        return redirect()->action('ProductController@index')->with('status', 'Produkt Uppdaterad');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->get("title");
        $product->brand = $request->get("brand");
        $product->price = $request->get("price");
        $product->description = $request->get("description");
        $product->image = $request->get("image");
        $product->save();


        return redirect()-> action('ProductController@index')->with('status', 'Produkten är Uppdaterad');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->action('ProductController@index')->with('status', 'Produkt borttagen');
    }
}
