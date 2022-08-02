<?php
 namespace App\Http\Controllers;
/* write by ngocson
*/
 class FrontendController extends Controller
 {
 	public function lienhe()
    {
        return view('lienhe');
    }
    public function cart()
    {
        return view('cart');
    }
 }
?>