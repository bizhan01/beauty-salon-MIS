<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Advertisement;
use App\Post;
use App\Product;
use DB;

class SearchController extends Controller
{
    public function search()
      {
        $advertisements= Advertisement::latest()->get();
        $users= User::where('isAdmin', '!=', 1)->latest()->get();
        $bUsers= User::where('isAdmin', '=', 2)->latest()->get();
        $sUsers= User::where('isAdmin', '=', 3)->latest()->get();
        $products= Product::latest()->get();

        $q = Input::get ( 'q' );
        if($q != ""){
          $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->get ();
          if (count ( $user ) > 0)
            return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withDetails ( $user )->withQuery ( $q );
          else
            return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withMessage ( 'No Details found. Try to search again !' );
        }

        return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withMessage ( 'No Details found. Try to search again !' );

      }

      public function searchBeautySalon()
    {
      $advertisements= Advertisement::latest()->get();
      $users= User::where('isAdmin', '!=', 1)->latest()->get();
      $bUsers= User::where('isAdmin', '=', 2)->latest()->get();
      $sUsers= User::where('isAdmin', '=', 3)->latest()->get();
      $products= Product::latest()->get();

      $q = Input::get ( 'q' );
      if($q != ""){
        $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->Where( 'isAdmin', '=', 1 )->get ();
        if (count ( $user ) > 0)
          return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withDetailsb  ( $user )->withQuery ( $q );
        else
          return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withMessage ( 'No Details found. Try to search again !' );
      }

      return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withMessage ( 'No Details found. Try to search again !' );

    }


      public function searchStore()
    {
      $advertisements= Advertisement::latest()->get();
      $users= User::where('isAdmin', '!=', 1)->latest()->get();
      $bUsers= User::where('isAdmin', '=', 2)->latest()->get();
      $sUsers= User::where('isAdmin', '=', 3)->latest()->get();
      $products= Product::latest()->get();

      $q = Input::get ( 'q' );
      if($q != ""){
        $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'address', 'LIKE', '%' . $q . '%' )->Where( 'isAdmin', '=', 2 )->get ();
        if (count ( $user ) > 0)
          return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withDetailss ( $user )->withQuery ( $q );
        else
          return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withMessage ( 'No Details found. Try to search again !' );
      }

    return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withMessage ( 'No Details found. Try to search again !' );

  }


      public function searchProduct()
    {
      $advertisements= Advertisement::latest()->get();
      $users= User::where('isAdmin', '!=', 1)->latest()->get();
      $bUsers= User::where('isAdmin', '=', 2)->latest()->get();
      $sUsers= User::where('isAdmin', '=', 3)->latest()->get();
      $products= Product::latest()->get();

      $q = Input::get ( 'q' );
      if($q != ""){
        $user = Product::where( 'productName', 'LIKE', '%' . $q . '%' )->orWhere ( 'productCode', 'LIKE', '%' . $q . '%' )->orWhere ( 'company', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $user ) > 0)
          return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withDetailsp  ( $user )->withQuery ( $q );
        else
          return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withMessage ( 'No Details found. Try to search again !' );
      }
      return view ( 'searchResult', compact('advertisements', 'users', 'bUsers', 'sUsers', 'products') )->withMessage ( 'No Details found. Try to search again !' );

    }

      public function publicProfile($id) {
        $users = DB::table('users')->where('id', $id)->get();
        $services= DB::table('services as s')
                 ->leftJoin('users as u', 's.user_id', '=', 'u.id')
                 ->select('s.*', 'u.*')
                 ->where('s.user_id', '=', $id)
                 ->get();
        $products = DB::table('products')->where('user_id', $id)->latest()->get();
        $posts = DB::table('posts as p')
                 ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
                 ->select('p.*', 'u.*')
                 ->where('p.user_id', '=', $id)
                 ->get();
        $advertisements = DB::table('advertisements')->where('user_id', $id)->latest()->get();
        $comments = DB::table('comments as co')
                 ->leftJoin('users as u', 'co.user_id', '=', 'u.id')
                 ->select('co.*', 'u.*')
                 ->where('co.profile_id', '=', $id)
                 ->get();
        return view('systemUsers.profile.publicProfile', compact('users','services', 'products', 'posts', 'advertisements', 'comments'));
      }

}
