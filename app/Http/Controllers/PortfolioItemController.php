<?php

namespace App\Http\Controllers;

use App\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = PortfolioItem::all();
         return response()->json($all, 200);
    }

    public function featured() 
    {
       $featured = PortfolioItem::orderBy('CREATED_AT', 'desc')->limit(4)->get();
       return response()->json($featured, 200);

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
     * @param  \App\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioItem $portfolioItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioItem $portfolioItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfolioItem $portfolioItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PortfolioItem  $portfolioItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioItem $portfolioItem)
    {
        //
    }
}
