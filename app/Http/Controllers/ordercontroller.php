<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\order;

class ordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $order=product::rightJoin('orders','orders.product_id','products.id')->select('orders.id','orders.customername','orders.customeraddress','orders.customernumber','orders.finalprice','orders.status','orders.created_at','products.product')->get(); 
        

        
          
        


       
       return view('order/ordershow',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $product=product::get();

        //return $product;
       return view('order/order',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required',
        'address'=>'required',
        'number'=>'required',
        'product_id'=>'required',
        'quantity'=>'required',
        'rate'=>'required',
        'totalamount'=>'required',
        'vat'=>'required',
        'finalprice'=>'required',
        'status'=>'required',

     ]
     );
        $order=new order;
        $order->customername=$request->name;
        $order->customeraddress=$request->address;
        $order->customernumber=$request->number;
        $order->product_id=$request->product_id;
        $order->quantity=$request->quantity;
        $order->rate=$request->rate;
        $order->totalamount=$request->totalamount;
        $order->vat=$request->vat;
        $order->finalprice=$request->finalprice;
        $order->status=$request->status;
        $order->save();
        return redirect(route('order.index'));
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

        $order=order::find($id);
        $products=product::all();

        $product=product::find($order->product_id);
        return view('order/orderedit',compact('order','product','products'));
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
        'name'=>'required',
        'address'=>'required',
        'number'=>'required',
        'product_id'=>'required',
        'quantity'=>'required',
        'rate'=>'required',
        'totalamount'=>'required',
        'vat'=>'required',
        'finalprice'=>'required',
        'status'=>'required',

     ]
     );
        $order=order::find($id);
        $order->customername=$request->name;
        $order->customeraddress=$request->address;
        $order->customernumber=$request->number;
        $order->product_id=$request->product_id;
        $order->quantity=$request->quantity;
        $order->rate=$request->rate;
        $order->totalamount=$request->totalamount;
        $order->vat=$request->vat;
        $order->finalprice=$request->finalprice;
        $order->status=$request->status;
        $order->save();
        return redirect(route('order.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        order::where('id',$id)->delete();
        return redirect(route('order.index'));
    }
    public function __construct()
     {
        $this->middleware('auth:admin');
     }
}
