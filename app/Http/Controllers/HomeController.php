<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
       public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // a test page function with common content 

    public function test()
    {
        return view('testHome');
    }

       /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */

    public function myHome()
    {
        return view('myHome');
    }

       /**
    * Show the my users page.
    *
    * @return \Illuminate\Http\Response
    */
   public function myUsers()
   {
       return view('myUsers');
   }


   /**
    * Show the categories page.
    *
    * @return \Illuminate\Http\Response
    */
   public function categories()
   {
       return view('index');
   }
}

?>