<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\customer;
use App\Models\countri;
use Hash;
use Alert;
use session;

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
        //$data=customer::all();
		//$data=customer::where('id','=',$id)->where('status','=','Unblock')->get()/first();
		$data=customer::join('countris','customers.cid','=','countris.id')->get();
		return view('admin.manage_customer',['cust_arr'=>$data]);
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
	   $data=$request->validate([
	   
	   'name'=>'required|Alpha',
	   'unm'=>'required|email|unique:customers',
	   'pass'=>'required|min:6|max:12',
	   'file'=>'required|mimes:jpg,png,jpeg,gif',
	   'cid'=>'required',
	   ]);
		
	   
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
	   return back()->with('success',$request->name);	
    }
	
	
	public function login(Request $request)
    {
        return view('website.login');
    }
	
	public function userlogin(Request $request)
    {
		$data=$request->validate([
	   'unm'=>'required|email',
	   'pass'=>'required|min:4|max:12',
	   ]);
		
		$unm=$request->unm;
		$data=customer::where('unm','=',$unm)->first();
	
		if($data)
		{	
			if(Hash::check($request->pass,$data->pass))
			{
				 if($data->status=="Unblock")
				 {
				  Session()->put('name',$data->name);	 
				  Session()->put('unm',$data->unm);
				  Session()->put('cust_id',$data->id);
				  Alert::success('Congrats', 'You\'ve Login Successfully');	
				  return redirect('/');
				 }
				 else
				 {
				 	 Alert::error('Failed', 'You\'ve Accout Blocked');	
					 return back();		
				 }	
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
	
	public function logout()
    {
        Session()->pull('cust_id');
        Session()->pull('unm');
        Session()->pull('name');
		
        Alert::success('Congrats', 'You\'ve Logout Successfully');	
		return redirect('/index');
    }
	

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function myprofile()
    {
	   $data=customer::where('id','=',session('cust_id'))->first();
       return view('website.myprofile',['fetch'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$country=countri::all();
		$data=customer::where('id','=',$id)->first();
        return view('website.editprofile',['data'=>$country,'fetch'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=$request->validate([
	   
	   'name'=>'required|Alpha',
	   'unm'=>'required|email',
	   'file'=>'mimes:jpg,png,jpeg,gif',
	   'cid'=>'required',
	   ]);
	   
	   $data=customer::find($id);
	   $data->name=$request->name;
	   $data->unm=$request->unm;
	   $data->pass=Hash::make($request->pass);
	   $data->gen=$request->gen;
	   $data->lag=implode(",",$request->lag);
	   
	   // image uploading
	   if($request->hasFile('file'))
	   {
		   $old_file=$data->file;
		   
		   $file=$request->file('file');		
		   $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		   $file->move('Frontend/upload/customer/',$filename);  // use move for move image in public/images
		   $data->file=$filename; // name store in db
		   unlink('Frontend/upload/customer/'.$old_file);
	   }
	   
	   $data->cid=$request->cid;
	   $data->save();
	   
	   Alert::success('Congrats', 'You\'ve Successfully Update');	
	   return redirect('myprofile');	
	   
	   //$data=customer::find($id)->update(['name'=>"Raj nagar","age"=>"33"]);
	   
	   
	   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $customer=customer::find($id);
	   $customer->delete();
	   Alert::success('Congrats', 'You\'ve Delete Successfully');	
	   return back();
	   
	   /*
	   try{
			$data=customer::findorFail($id);
			$data->delete();
			Alert::success('Done', 'You\'ve Successfully Delete');
			return back();
		}
		catch(\Exception $ex)
		{
			Alert::error('Fail', 'Something went wrong or Some Data alreday added in other data');
			return back();
		}
	   */
	   
    }
}
