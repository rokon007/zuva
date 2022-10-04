<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Support\Str;


class NoticeController extends Controller
{
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice = Notice::orderBy('created_at', 'DESC')->paginate(20);
        return view('backend.notice.index', compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.notice.create');
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
         
        $notice = Notice::create([
            'title' => $request->title,
            //'slug' => Str::slug($request->title),
            //'image' => 'image.jpg',
            'description' => $request->description,
            //'pdf' => $request->pdf,
			//'image' => $request->image,
            'creat_by' => auth()->user()->name,
			
            
        ]);
		
		if($request->has('status')){
          $status = implode(',', $request->input('status'));
           $notice->status = $status;
        }else{
            $status = 0;
           $notice->status = $status;
        }
           $notice->save();
       
        

        if($request->file('image')) 
        {
            $file = $request->file('image');
            $filename =Str::slug($request->title) . '.' . $request->file('image')->extension();
            $filePath = public_path() . '/backend/upload/image/notice/';
            $file->move($filePath, $filename);
            $notice->image = '/backend/upload/image/notice/' . $filename;
            $notice->save();
        }



    if($request->file('pdf')) 
        {
            $filepdf = $request->file('pdf');
            $pdffilename =Str::slug($request->title) . '.' . $request->file('pdf')->getClientOriginalExtension();  
            $filepdfPath = public_path() . '/backend/upload/image/pdf/';
            $filepdf->move($filepdfPath, $pdffilename);
            $notice->pdf = '/backend/upload/image/pdf/' . $pdffilename;
            $notice->save();
        }



        Session::flash('success', 'Notice created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        return view('backend.notice.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
       
        return view('backend.notice.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        $this->validate($request, [
            'title' => "required|unique:notices,title, $notice->id",
            'description' => 'required',
            
        ]);
        
        $notice->title = $request->title;
        $notice->description = $request->description;


        if($request->has('status')){
          $status = implode(',', $request->input('status'));
           $notice->status = $status;
        }else{
            $status = 0;
           $notice->status = $status;
        }
          
       

  if($request->file('image')) 
        {
            $file = $request->file('image');
            $filename =Str::slug($request->title) . '.' . $request->file('image')->extension();
            $filePath = public_path() . '/backend/upload/image/notice/';
            $file->move($filePath, $filename);
            $notice->image = '/backend/upload/image/notice/' . $filename;
           
        }



    if($request->file('pdf')) 
        {
            $filepdf = $request->file('pdf');
            $pdffilename =Str::slug($request->title) . '.' . $request->file('pdf')->getClientOriginalExtension();  
            $filepdfPath = public_path() . '/backend/upload/image/pdf/';
            $filepdf->move($filepdfPath, $pdffilename);
            $notice->pdf = '/backend/upload/image/pdf/' . $pdffilename;
           
        }

        $notice->save();

        Session::flash('success', 'Notice updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        if($notice){
            if(file_exists(public_path($notice->image))){
                unlink(public_path($notice->image));
            }
			if(file_exists(public_path($notice->pdf))){
                unlink(public_path($notice->pdf));
            }

            $notice->delete();
            Session::flash('Notice deleted successfully');
        }

        return redirect()->back();
    }
}
