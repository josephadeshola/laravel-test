<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreatedetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allDetails = students::where('user_id', Auth::user()->id)->get();
        return view("display", [
            'details'=> $allDetails
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $content = new students();
        $authUser = Auth::user()->id;
        // $content->full_name=$request->input('fullname');
        // or
        $content->full_name=$request->fullname;
        $content->phonenumber=$request->phonenumber;
        $content->email=$request->email;
        $content->password=$request->password;
        $content->address = $request->address;
        $content->user_id = $authUser;
        $content->save();
        // return $content;
        return redirect('/student');
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
