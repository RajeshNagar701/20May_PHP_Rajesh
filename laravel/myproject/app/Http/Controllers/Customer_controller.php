<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\customer;
use App\Models\countri;
use Hash;
use Alert;

// crud when use query builder / DB class
use Illuminate\Support\Facades\DB;  


class Customer_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //$country=DB::select("select * from countris"); // fetch data by DB Class
	   $country=countri::all();  // fetch data by ORM / Model
	   return view('website.signup',["data"=>$country]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	   
	  
	   
	   $data=new customer;
	   $data->name=$request->name;
	   $data->unm=$request->unm;
	   $data->pass=Hash::make($request->pass);
	   $data->gen=$request->gen;
	   $data->lag=implode(",",$request->lag);
	   
	   // image uploading
	   $file=$request->file('file');		
	   $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
	   $file->move('Frontend/upload/customer/',$filename);  // use move for move image in public/images
	   $data->file=$filename; // name store in db
	   
	   $data->cid=$request->cid;
	   $data->save();
	   Alert::success('Congrats', 'You\'ve Successfully Registered');	
	   return back();	
    }
	
	
	public function login(Request $request)
    {
        return view('website.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }
}
