<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function productGeneralList()
    {
      $products = DB::table('products')->latest()->get();
      return view('product.productGeneralList', compact('products'));
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
            'productName'=>'required',
            'productCode'=>'required|unique:products',
            'company'=>'required',
            'price'=>'required',
            'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('image')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages/products"), $new_name);
        }
        else {
          $new_name = 'about.png';
        }
          Product::create([
              'user_id' => Auth::user()->id,
              'productName' => request('productName'),
              'productCode' => request('productCode'),
              'company' => request('company'),
              'price' => request('price'),
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

          public function details($id)
          {
            $product = DB::select('select * from products where id = ?',[$id]);
            return view('product.details',['product'=>$product]);
        }



        public function show($id) {
         $product = DB::select('select * from products where id = ?',[$id]);
         return view('product.editProduct',['product'=>$product]);
      }



      public function edit(Request $request,$id) {
         $user_id = $request->input('user_id');
         $productName = $request->input('productName');
         $productCode = $request->input('productCode');
         $company = $request->input('company');
         $price = $request->input('price');

         if($image = $request->file('image')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move("UploadedImages/products", $new_name);
         }
         else {
           $new_name = $request->input('image');
         };

         DB::update('update products set user_id = ? where id = ?',[$user_id, $id]);
         DB::update('update products set productName = ? where id = ?',[$productName, $id]);
         DB::update('update products set productCode = ? where id = ?',[$productCode, $id]);
         DB::update('update products set company = ? where id = ?',[$company, $id]);
         DB::update('update products set price = ? where id = ?',[$price, $id]);
         DB::update('update products set image = ? where id = ?',[$new_name, $id]);
         return redirect('/profile');
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from products where id = ?',[$id]);
     return back();
  }
}
