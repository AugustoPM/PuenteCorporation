<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;

class StoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $stories = Story::all();
       return view('layouts.admin.story', compact('stories'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.admin.story');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $request->validate([
           'resume' =>'required',
           'text' =>'required',
               ]);

          $story = Story::create([
               'resume' => $request->input('resume'),
               'text' => $request->input('text'),
               
               // 'status' => $request->input('status'),
               
           ]);
   
           return redirect()
           ->route('story')
           ->with('status', ' Successfully Created ');
       
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $story = Story::find($id);
       return view('layouts.admin.storyEdit', compact('story'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
    $request->validate([
        'resume' =>'required',
        'text' =>'required',
            ]);

       $story = Story::find($id);
       $story->update([
           
           'resume' => $request->input('resume'),
           'text' => $request->input('text'),
           
           // 'status' => $request->input('status'),
           
       ]);

       return redirect()
       ->route('story');
       // ->with('status', 'Informacion Modificada Satisfactoriamente');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $story = Story::destroy($id);
       

       return redirect()
       ->route('story')
       ->with('status', 'Successfully deleted');
   }
}
