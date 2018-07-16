<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
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
       $products = Product::all();
       return view('layouts.admin.products', compact('products'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.admin.productsCreate');
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
           'id' =>'required',
           
         
               ]);

               $file_name = '.jpg';
               if($request->file('image-file')) {
               $img = $request->file('image-file');
               $file_ext = $img->getClientOriginalExtension();
               $file_name =$request->input('id').".".$file_ext;
               Storage::disk('imagesPC')->put(
                   $file_name,
                   file_get_contents($img->getRealPath())
               );
               }

          $product = Product::create([
               'img' => $file_name,
               'id' => $request->input('id'),
               
    
               // 'status' => $request->input('status'),
               
           ]);
   
           return redirect()
           ->route('product')
           ->with('status', 'Product Created');
       
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
       $product = Product::find($id);
       return view('layouts.admin.productsEdit', compact('product'));
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
        'id' =>'required',
        
      
            ]);

            $file_name = '.jpg';
            if($request->file('image-file')) {
            $img = $request->file('image-file');
            $file_ext = $img->getClientOriginalExtension();
            $file_name =$request->input('id').".".$file_ext;
            Storage::disk('imagesPC')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
            }
           
       $product = Product::find($id);
       $product->update([
        'img' => $file_name,
        'id' => $request->input('id'),
      
           // 'status' => $request->input('status'),
           
       ]);

       return redirect()
       ->route('product');
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
       $product = Product::destroy($id);
      
       
       return redirect()
       ->route('product')
       ->with('status', 'Successfully deleted');
   }
}
