<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Advertisement;
use App\Post;
use App\User;
use App\Product;
use DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $advertisements= Advertisement::where('status', 1)->latest()->get();
      $users= User::latest()->get();

      $bUsers= User::where('isAdmin', '=', 1)->latest()->get();
      $sUsers= User::where('isAdmin', '=', 2)->latest()->get();
      $products= Product::latest()->get();

      $posts = DB::table('posts as p')
               ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
               ->select('p.*', 'u.*')
              ->orderByRaw('(p.created_at)desc')
              ->get();

    $salonCount = DB::table('users')->where('isAdmin', '=', 1)->count('id');
    $storeCount = DB::table('users')->where('isAdmin', '=', 2)->count('id');
    $userCount = DB::table('users')->where('isAdmin', '=', 3)->count('id');
    $productCount = DB::table('products')->count('id');

      return view('home', compact(
      'advertisements','posts', 'users',
      'bUsers', 'sUsers', 'products',
      'salonCount', 'storeCount', 'userCount', 'productCount',

    ));
    }

}
