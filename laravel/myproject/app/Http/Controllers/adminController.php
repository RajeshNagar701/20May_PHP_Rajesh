<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Hash;
use Alert;
use session;




class adminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
	
	public function login(Request $request)
    {
		$username=$request->username;
		$data=admin::where('username','=',$username)->first();
	
		if($data)
		{	
			if(Hash::check($request->password,$data->password))
			{
				
				  Session()->put('admin_name',$data->username);	 
				  Session()->put('admin',$data->id);
				  Alert::success('Congrats', 'You\'ve Login Successfully');	
				  return redirect('/dashboard');
				
				
			}
			else
			{
				 Alert::error('Failed', 'You\'ve Wrong Password');	
				 return back();		
			}
			
		}
		else
		{
			 Alert::error('Failed', 'You\'ve Wrong Username');	
			 return back();		
		}
	}
	
	
	
	public function dashboard()
    {
        return view('admin.dashboard');
    }
	
	public function admin_logout()
    {
        Session()->pull('admin');
        Session()->pull('admin_name');
       
        Alert::success('Congrats', 'You\'ve Logout Successfully');	
		return redirect('/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        
    }
}
