<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
class IndexController extends Controller
{
    public function IndexAction(){
        
        return view('pages.home');
    } 
}
