<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;
use App\brand;
class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $product=product::get();
        return view('product/productshow',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=category::get();
         $brand=brand::get();
        return view('product/product',compact('category','brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new product;
         $this->validate($request,[
        'product'=>'required',
        'photo'=>'required',
        'price'=>'required',
        'quantity'=>'required',
        'brand'=>'required',
        'category'=>'required',
        'discription'=>'required',
        'availability'=>'required',

     ]
     );
         $product->product=$request->product;

        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->brand=$request->brand;
        $product->category=$request->category;
        $product->discription=$request->discription;
        $product->availability=$request->availability;
        if($request->hasFile('photo')){
        $filename=$request->photo->getClientOriginalName();

        $filesize=$request->photo->getClientSize();
        $request->photo->StoreAs('public',$filename);
        $product->photo=$filename;
        }

        
        $product->save();
        return redirect(route('product.index'));

    
     

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
         $category=category::get();
         $brand=brand::get();
         $product=product::find($id);
         return view('product/productedit',compact('category','brand','product'));
     
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
        $this->validate($request,[
        'product'=>'required',
        'photo'=>'required',
        'price'=>'required',
        'quantity'=>'required',
        'brand'=>'required',
        'category'=>'required',
        'discription'=>'required',
        'availability'=>'required',

     ]
     );
        $product=product::find($id);
        $product->product=$request->product;

        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->brand=$request->brand;
        $product->category=$request->category;
        $product->discription=$request->discription;
        $product->availability=$request->availability;
        if($request->hasFile('photo')){
        $filename=$request->photo->getClientOriginalName();

        $filesize=$request->photo->getClientSize();
        $request->photo->StoreAs('public',$filename);
        $product->photo=$filename;
        }

        
        $product->save();
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::where('id',$id)->delete();
        return redirect()->back();
    }
    public function __construct()
     {
        $this->middleware('auth:admin');
     }
}
