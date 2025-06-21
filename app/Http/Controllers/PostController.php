<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Users\UserController;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $myRequest)
    {
        $allValues = $myRequest->all();
        $age = $myRequest->input('age');
        $query = $myRequest->query();
        $partial = $myRequest->except(['age','country']);
        print_r($allValues);
        print_r($query);
        print_r($partial);
        echo $age;
        // dd('Hello From resources controller index');
        return redirect()->action([UserController::class,'index']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd("Hello From Resource Controller create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
