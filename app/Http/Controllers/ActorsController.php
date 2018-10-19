<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Actor;

class ActorsController extends Controller {
    
    # Display a listing of the resource. @return \Illuminate\Http\Response
    public function index() {
        $actors = Actor::all();
		return view('actors.index')->with(compact('actors'));
    }

    # Show the form for creating a new resource. @return \Illuminate\Http\Response
    public function create() {
        //
    }

    # Store a newly created resource in storage. @param \Illuminate\Http\Request $request  @return \Illuminate\Http\Response
    public function store(Request $request) {
        //
    }

    # Display the specified resource. @param  int $id  @return \Illuminate\Http\Response
    public function show($id) {
        //
    }

    # Show the form for editing the specified resource. @param int $id  @return \Illuminate\Http\Response
    public function edit($id) {
        //
    }

    # Update the specified resource in storage. @param int $id  @param \Illuminate\Http\Request $request  @return \Illuminate\Http\Response
    public function update(Request $request, $id) {
        //
    }

    # Remove the specified resource from storage. @param int $id  @return \Illuminate\Http\Response
    public function destroy($id) {
        //
    }   

    # Display the actors search form.
    public function search() {
        return view('actors.search');
    }

    # Search for the specified resource from storage.
    public function result(Request $request) {
        
        $actorsWhereName = Actor::where('first_name', 'LIKE', '%' . $request->first_name . '%')
                     ->orWhere('last_name', 'LIKE', '%' . $request->last_name . '%')
                     ->orderBy('last_name');

        # $actorsWhereName = Actor::querySearch($request)->get();
        
        return view('actors.results')->with(compact('actorsWhereName', 'request'));
    }
}