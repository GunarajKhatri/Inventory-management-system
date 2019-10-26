<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\admin;

class userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
            $user=admin::all();
            
            
           
            
         

            
        return view('user/usershow',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //return $request->permission;
        $user=new admin;
         $this->validate($request,[
        'username'=>'required',
        'email'=>'required',
        'password'=>'required',
        'address'=>'required',
        'role'=>'required',
        'permission'=>'required',
        

     ]
     );
           $user->username=$request->username;
         $user->email=$request->email;
         $user->password=bcrypt($request->password);
         $user->address=$request->address;
         $user->role=$request->role;
         $user->save();
        
         

         
            $role=Role::create(['name'=>$request->role,'guard_name'=>'admin']);
            $user->assignRole($role);
         foreach($request->permission as $permit){
           
           
            $permission=Permission::create(['name'=>$permit,'guard_name'=>'admin']);
            $role->givePermissionTo($permission);
            $user->givePermissionTo($permission);
            
             }
              return redirect(route('user.index'));


                    



     
       
      
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
        
        $user=admin::find($id);
        

        return view('user/useredit',compact('user'));
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
        $user=admin::find($id);
         $this->validate($request,[
        'username'=>'required',
        'email'=>'required',
        'password'=>'required',
        'address'=>'required',
        'role'=>'required',
        'permission'=>'required',
        

     ]
     );
           $user->username=$request->username;
         $user->email=$request->email;
         $user->password=bcrypt($request->password);
         $user->address=$request->address;
         $user->role=$request->role;
         $user->save();
        
         

         
            $role=Role::create(['name'=>$request->role,'guard_name'=>'admin']);
            $user->assignRole($role);
         foreach($request->permission as $permit){
           
           
            $permission=Permission::create(['name'=>$permit,'guard_name'=>'admin']);
            $role->givePermissionTo($permission);
            $user->givePermissionTo($permission);
            }
            return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        admin::where('id',$id)->delete();
        return redirect(route('user.index'));
    }
    public function __construct()
     {
        $this->middleware('auth:admin');
     }
}
