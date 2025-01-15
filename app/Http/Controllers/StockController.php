<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;  
class StockController extends Controller
{
    public function index(): View

    {

        $stocks = Stock::latest()->paginate(10);

        return view('stocks.index',compact('stocks'))

                    ->with('i', (request()->input('page', 1) - 1) * 10);

    }

    /**

     * Show the form for creating a new resource.

     */

    public function create(): View

    {

        return view('stocks.createOrUpdate');

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

        Stock::create($input);

        return redirect()->route('stocks.index')

                        ->with('success','Stock created successfully.');

    }

    /**

     * Show the form for editing the specified resource.

     */

    public function edit($id): View

    {

        $product = Stock::find($id);

        return view('stocks.create',compact('stockS'));

    }

    /**

     * Update the specified resource in storage.

     */

    public function update(Request $request, $id): RedirectResponse

    {

        $stock = Stock::find($id);  

        $request->validate([

            'name' => 'required',
            'SKU' => 'required',
            'Price' => 'required',
            'Description'=> 'required'

        ]);


        $input = $request->all();

        $stock->update($input);

        return redirect()->route('stocks.index')

                        ->with('success','Stock updated successfully');

    }
}
