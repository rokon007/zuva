<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use File;
use Session;
use Illuminate\Support\Str;

class BackendController extends Controller
{
   public function index()
    {
        return view('backend.dashboard.index');
    }
	
	public function indexProfile()
    {
        return view('backend.profile.index');
    }
	
	public function userUpdate(Request $request)
	{
		$EmailCount=User::where('email',$request->email)->count();
		//if($EmailCount>0){
		//  return back()->with('erorr','This email address is already used by other user');
		//}else{
		$id = $request->id;
        $user = User::where('id', $id)->first();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
		$user->firstname=$request->input('firstname');
		$user->lastname=$request->input('lastname');
		$user->address=$request->input('address');
		$user->city=$request->input('city');
		$user->country=$request->input('country');
		$user->zipcode=$request->input('zipcode');
		$user->mobile=$request->input('mobile');
		$user->about=$request->input('about');
		
        
		
		if($request->hasFile('image')){
			
			$destination = $user->image;
			 if(File::exists($destination)){File::delete($destination);}
			 
			$image = $request->image;
			$image_new_name = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $image->move('backend/upload/image/user/', $image_new_name);
            $user->image = '/backend/upload/image/user/' . $image_new_name;      
            }
			$user->update();

        Session::flash('success', 'Post updated successfully');
        return redirect()->back();
		//}
		
		
		
	}
}
