<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;

class brandcontroller extends Controller
{
     
     public function __construct()
     {
        $this->middleware('auth:admin');
     }

     
    public function index()
    {
        $brand=brand::get();
        return view('brand/brandshow',compact('brand'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand/brand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand=new brand;
         $this->validate($request,[
        'brand'=>'required',
        'status'=>'required',       
     ]
     );
    $brand->brand=$request->brand;
    $brand->status=$request->status;
    $brand->save();
    return redirect(route('brand.index'));
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
        $brands=brand::find($id);

        return view('brand/brandedit',compact('brands'));
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
        $brand=brand::find($id);
         $this->validate($request,[
        'brand'=>'required',
        'status'=>'required',       
     ]
     );
         $brand->brand=$request->brand;
    $brand->status=$request->status;
    $brand->save();
    return redirect(route('brand.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        brand::where('id',$id)->delete();
        return redirect()->back();
    }
}
