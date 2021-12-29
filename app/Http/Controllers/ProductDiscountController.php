<?php

namespace App\Http\Controllers;

use App\Models\Product_discount;
use Illuminate\Http\Request;

class ProductDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_discounts = Product_discount::all();
       //dd($product_discounts);
       return view ('product_discounts.index', compact('product_discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_discount  $product_discount
     * @return \Illuminate\Http\Response
     */
    public function show(Product_discount $product_discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_discount  $product_discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_discount $product_discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_discount  $product_discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_discount $product_discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_discount  $product_discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_discount $product_discount)
    {
        //
    }
}
