<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;   

class ProductController extends Controller
{
    public function index(): View

    {

        $products = Product::latest()->paginate(10);

        return view('products.index',compact('products'))

                    ->with('i', (request()->input('page', 1) - 1) * 10);

    }

    /**

     * Show the form for creating a new resource.

     */

    public function create(): View

    {

        return view('products.createOrUpdate');

    }


    /**

     * Store a newly created resource in storage.

     */

    public function store(Request $request): RedirectResponse

    {

        $request->validate([

            'name' => 'required',
            'SKU' => 'required',
            'Price' => 'required',
            'Description'=> 'required'

        ]);

        $input = $request->all();

        Product::create($input);

        return redirect()->route('products.index')

                        ->with('success','Product created successfully.');

    }

    /**

     * Show the form for editing the specified resource.

     */

    public function edit($id): View

    {

        $product = Product::find($id);

        return view('products.createOrUpdate',compact('product'));

    }

    /**

     * Update the specified resource in storage.

     */

    public function update(Request $request, $id): RedirectResponse

    {

        $product = Product::find($id);  

        $request->validate([

            'name' => 'required',
            'SKU' => 'required',
            'Price' => 'required',
            'Description'=> 'required'

        ]);


        $input = $request->all();

        $product->update($input);

        return redirect()->route('products.index')

                        ->with('success','Product updated successfully');

    }


    public function products()
    {
        $products = Product::all();
        return response()->json($products);
    }
}
