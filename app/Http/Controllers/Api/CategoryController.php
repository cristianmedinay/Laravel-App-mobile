<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categorys = Category::all();

        return response()->json([
            'message'=>$categorys
        ],Response::HTTP_OK);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validamos
        $request->validate([
            "description"=>"required"
        
        ]);
        //alta
        $category = Category::create([
            "description"=>$request->description
        ]);
        //devolvemos respuesta
        return response()->json([
            'message'=>$category
        ],Response::HTTP_OK);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
       $category=  Category::findOrFail($id);
       return $category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'description'=>'required'
        ]);
        $category = Category::find($id);
        $category->description=$request->description;
        $category->save();
        return response()->json([
            "result"=>$category
           /*  'result'=>'Metodo update id'.$id,
            "request"=>$request->description */
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
