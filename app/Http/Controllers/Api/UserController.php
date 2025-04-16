<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Validation\Rules\Exists;

class UserController extends Controller
{
    /**
      * Display a listing of the resource.
      */
    public function index()
    {
        return response()->json(User::all('id' ,'name' ,'email'));
    }

    /** 
      *Create user
      */
    public function create(Request $request)
    {
        User::created($request);
        return response()->json('User Created');
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
        User::destroy($id);
        return response()->json('User Deleted');
    }
}
