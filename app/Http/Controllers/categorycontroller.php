<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Auth;

class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
      // return Auth::guard('admin')->user()->hasPermissionTo('Create-things');
        $category=category::get();
        return view('categoryshow',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $category=new category;
         $this->validate($request,[
        'category'=>'required',
        'status'=>'required',       
     ]
     );
    $category->category=$request->category;
    $category->status=$request->status;
    $category->save();
    return redirect(route('category.index'));
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
        $categorys=category::find($id);

        return view('categoryedit',compact('categorys'));
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
        $category=category::find($id);
         $this->validate($request,[
        'category'=>'required',
        'status'=>'required',       
     ]
     );
         $category->category=$request->category;
    $category->status=$request->status;
    $category->save();
    return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        category::where('id',$id)->delete();
        return redirect()->back();
    }
    public function __construct()
     {
        $this->middleware('auth:admin');
     }
}
