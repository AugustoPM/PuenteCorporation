<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
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
       $teams = Team::all();
       return view('layouts.admin.team', compact('teams'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.admin.teamCreate');
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
           'image-file' => 'image|mimes:png,jpg,jpeg,bmp,svg',
           'name' =>'required',
           'cargo' =>'required',
           'message' =>'required',
           
         
               ]);

               $file_name = 'img_same_dimension_2.jpg';
               if($request->file('image-file')) {
               $img = $request->file('image-file');
               $file_ext = $img->getClientOriginalExtension();
               $file_name =$request->input('name').".".$file_ext;
               Storage::disk('imagesPC')->put(
                   $file_name,
                   file_get_contents($img->getRealPath())
               );
               }

          $header = Header::create([
               'img' => $file_name,
               'name' => $request->input('name'),
               'cargo' => $request->input('cargo'),
               'message' => $request->input('message'),
               
               
    
               // 'status' => $request->input('status'),
               
           ]);
   
           return redirect()
           ->route('team')
           ->with('status', 'Changes successfully update');
       
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
       $team = Team::find($id);
       return view('layouts.admin.teamEdit', compact('team'));
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
        'image-file' => 'image|mimes:png,jpg,jpeg,bmp,svg',
        'name' =>'required',
        'cargo' =>'required',
        'message' =>'required',
            ]);
   
            $file_name = 'img_same_dimension_2.jpg';
               if($request->file('image-file')) {
               $img = $request->file('image-file');
               $file_ext = $img->getClientOriginalExtension();
               $file_name =$request->input('name').".".$file_ext;
               Storage::disk('imagesPC')->put(
                   $file_name,
                   file_get_contents($img->getRealPath())
               );
               }
           
       $team = Team::find($id);
       $team->update([
        'img' => $file_name,
        'name' => $request->input('name'),
        'cargo' => $request->input('cargo'),
        'message' => $request->input('message'),
      
           // 'status' => $request->input('status'),
           
       ]);

       return redirect()
       ->route('team');
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
       $team = Team::destroy($id);
      
       
       return redirect()
       ->route('team')
       ->with('status', 'Successfully deleted');
   }
}
