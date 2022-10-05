<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
     /**
     * Display a listing of the resource.
     * Employee  employee
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::orderBy('created_at', 'DESC')->get();
        return view('backend.staff.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            //'title' => 'required|unique:posts,title',
            
            'description' => 'required',
           
        ]);
         
        $employee = Employee::create([
            'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'email' => $request->email,
			'phone' => $request->phone,
			'position' => $request->position,
			'salary' => $request->salary,
            'description' => $request->description,           
            'creat_by' => auth()->user()->name,
			
            
        ]);
		
		//if($request->has('status')){
       //   $status = implode(',', $request->input('status'));
       //    $employee->status = $status;
       // }else{
       //     $status = 0;
       //    $employee->status = $status;
       // }
       //    $employee->save();
       
        


		
		 if($request->hasFile('images')){
            $images = $request->images;
		    $image_new_name =  Str::slug($request->first_name) . '.' . $images->getClientOriginalExtension();
		    $images->move('backend/upload/image/staff/', $image_new_name);
            $employee->images = '/backend/upload/image/staff/' . $image_new_name;
            $employee->save();
        }



   



        Session::flash('success', 'Employee created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('backend.staff.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
       
        return view('backend.staff.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
       
        
        $employee->first_name = $request->first_name;
		$employee->last_name = $request->last_name;
		$employee->email = $request->email;
		$employee->phone = $request->phone;
		$employee->position = $request->position;
		$employee->salary = $request->salary;
        $employee->description = $request->description;


       // if($request->has('status')){
        //  $status = implode(',', $request->input('status'));
       //    $notice->status = $status;
       // }else{
        //    $status = 0;
        //   $notice->status = $status;
       // }
	   
  if($request->file('images')) 
        {
            $file = $request->file('images');
            $filename =Str::slug($request->first_name) . '.' . $request->file('images')->getClientOriginalExtension();  
            $filePath = public_path() . '/backend/upload/image/staff/';
            $file->move($filePath, $filename);
            $employee->images = '/backend/upload/image/staff/' . $filename;
           
        }



   

        $employee->save();

        Session::flash('success', 'Employee updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        if($employee){
            if(file_exists(public_path($employee->images))){
                unlink(public_path($employee->images));
            }
			

            $employee->delete();
            Session::flash('Employee deleted successfully');
        }

        return redirect()->back();
    }
}
