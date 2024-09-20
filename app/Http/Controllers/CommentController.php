<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Comment;
use DB;


class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $videos= Video::latest()->get();
      return view('admin.video.video', compact('videos',));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(),[
            'comment'=>'nullable',
            'value'=>'nullable',

    ]);
      Comment::create([
          'user_id' => Auth::user()->id,
          'profile_id' => request('profile_id'),
          'comment' => request('comment'),
          'value' => request('value'),
          'created_at'=>carbon::now(),
          'updated_at'=>carbon::now(),
        ]);

        try {
         session()->flash('success', 'عملیات موافقانه اجرا شد ');
         return back();
         } catch(Exception $ex) {
         session()->flash('failed', 'خطا! دوباره کوشش کنید');
         return back();
       }
    }


        public function show($id) {
         $service = DB::select('select * from services where id = ?',[$id]);
         return view('services.editService',['service'=>$service]);
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $user_id = $request->input('user_id');
          $title = $request->input('title');
          $description = $request->input('description');

          DB::update('update services set user_id = ? where id = ?',[$user_id,$id]);
          DB::update('update services set title = ? where id = ?',[$title,$id]);
          DB::update('update services set description = ? where id = ?',[$description,$id]);
          return redirect('/profile');
       }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from comments where id = ?',[$id]);
     return back();
    }
}
