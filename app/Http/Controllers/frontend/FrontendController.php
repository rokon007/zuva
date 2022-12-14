<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use Share;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Employee;
use App\Models\Launch;


class FrontendController extends Controller
{
    public function index()
    {
		$launch = Launch::where('id', 1)->first();
		$employee = Employee::where('status',1)->get();
		$notice = Notice::where('status',1)->orderBy('created_at', 'DESC')->take(10)->get();
		
		if($launch->status==1)
			{					  
				return view('frontend.launch', compact('launch')); 					  
			}
			else
			{
				 return view('frontend.index', compact('notice','employee','launch'));
			}						  					  
																		
								    
     
    }
	
	 public function index_about()
    {		
		$notice = Notice::where('status',1)->orderBy('created_at', 'DESC')->take(10)->get();
      return view('frontend.about', compact('notice'));
    }
	 public function index_team()
    {
		$employee = Employee::where('status',1)->get();
		$notice = Notice::where('status',1)->orderBy('created_at', 'DESC')->take(10)->get();
      return view('frontend.team', compact('notice','employee'));
    }
	 public function index_contact()
    {
		$notice = Notice::where('status',1)->orderBy('created_at', 'DESC')->take(10)->get();
      return view('frontend.contact', compact('notice'));
    }
	public function index_curriculum()
    {
		$notice = Notice::where('status',1)->orderBy('created_at', 'DESC')->take(10)->get();
      return view('frontend.curriculum', compact('notice'));
    }
	public function index_index2()
    {
      return view('frontend.index2');
    }
	
	  public function notice($id){
		$notice = Notice::where('status',1)->orderBy('created_at', 'DESC')->take(10)->get();  
        $notice1 = Notice::where('id', $id)->first();
	   // $notice1 =Notice::find($id);
        $notices = Notice::all()->random()->limit(3)->get();
		
        
        // More related posts
        $relatedNotice = Notice::orderBy('created_at', 'desc')->inRandomOrder()->take(4)->get();
        $firstRelatedNotice = $relatedNotice->splice(0, 1);
        $firstRelatedNotice2 = $relatedNotice->splice(0, 2);
        $lastRelatedNotice = $relatedNotice->splice(0, 1);

        if($notice){
            return view('frontend.notice', compact(['notice','notice1', 'notices', 'firstRelatedNotice', 'firstRelatedNotice2', 'lastRelatedNotice']));
        }else {
            return redirect('/');
        }
    }
	
	 public function staffprofile($id)
	 {
		$employee = Employee::where('id', $id)->first();
		$notice = Notice::where('status',1)->orderBy('created_at', 'DESC')->take(10)->get();
      return view('frontend.staff_profile', compact('notice','employee')); 
	 }
	
	  public function launch()
	 {
		
		$launch = Launch::where('id', 1)->first();
      return view('frontend.launch', compact('launch')); 
	 }
}
