<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Advertisement;
use DB;

class AdvertisementController extends Controller
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


     public function add()
     {
       return view('advertisement.addAdv');
     }

     public function blockAdv()
     {
       $advertisements = DB::table('advertisements')->where('status', 0) ->get();
       return view('advertisement.blockList', compact('advertisements'));
     }



     public function unBlockAdv()
     {
       $advertisements = DB::table('advertisements')->where('status', 1) ->get();
       return view('advertisement.unBlockList', compact('advertisements'));
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
            'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('image')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages/adv"), $new_name);
        }
        else {
          $new_name = 'about.png';
        }
          Advertisement::create([
              'user_id' => Auth::user()->id,
              'image' => $new_name,
              'status' => request('status'),
              'created_at'=>carbon::now(),
              'updated_at'=>carbon::now(),

            ]);
            try {
             session()->flash('successAdv', 'آگاهی شما موافقانه دریافت شد');
             return back();
             } catch(Exception $ex) {
             session()->flash('failed', 'خطا! دوباره کوشش کنید');
             return back();
           }
    }


    public function show($id) {
      $advertisement = DB::select('select * from advertisements where id = ?',[$id]);
     return view('advertisement.unBlock',['advertisement'=>$advertisement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function edit(Request $request,$id) {
        $user_id = $request->input('user_id');
        $image = $request->input('image');
        $status = $request->input('status');

        DB::update('update advertisements set user_id = ? where id = ?',[$user_id,$id]);
        DB::update('update advertisements set image = ? where id = ?',[$image,$id]);
        DB::update('update advertisements set status = ? where id = ?',[$status,$id]);
        return redirect('/unBlockAdv');
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from advertisements where id = ?',[$id]);
     return back();
  }
}
