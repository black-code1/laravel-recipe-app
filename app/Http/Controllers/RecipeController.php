<?php

namespace App\Http\Controllers;

use App\Models\AppRecipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
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
     * @param  \App\Models\AppRecipe  $appRecipe
     * @return \Illuminate\Http\Response
     */
    public function show(AppRecipe $appRecipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppRecipe  $appRecipe
     * @return \Illuminate\Http\Response
     */
    public function edit(AppRecipe $appRecipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppRecipe  $appRecipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppRecipe $appRecipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppRecipe  $appRecipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppRecipe $appRecipe)
    {
        //
    }
}
