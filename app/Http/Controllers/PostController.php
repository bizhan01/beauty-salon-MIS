<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use DB;

class PostController extends Controller
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
      $biographies = Biography::latest()->orderByRaw('(id)desc LIMIT 1')->get();
      return view('admin.about.bio', compact('biographies',));
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
            'title'=>'required',
            'content'=>'nullable',
            'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('image')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages/posts"), $new_name);
        }
        else {
          $new_name = 'about.png';
        }
          Post::create([
              'user_id' => Auth::user()->id,
              'title' => request('title'),
              'content' => request('content'),
              'image' => $new_name,
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
         $post = DB::select('select * from posts where id = ?',[$id]);
         return view('post.editPost',['post'=>$post]);
      }



      public function edit(Request $request, $id) {
         $user_id = $request->input('user_id');
         $title = $request->input('title');
         $content = $request->input('content');

         if($image = $request->file('image')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move("UploadedImages/posts", $new_name);
         }
         else {
           $new_name = $request->input('image');
         };

         DB::update('update posts set user_id = ? where id = ?',[$user_id, $id]);
         DB::update('update posts set title = ? where id = ?',[$title, $id]);
         DB::update('update posts set content = ? where id = ?',[$content, $id]);
         DB::update('update posts set image = ? where id = ?',[$new_name, $id]);
         return redirect('/profile');
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from posts where id = ?',[$id]);
     return back();
  }
}
