<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
class IndexController extends Controller
{
    private $template = 'default';

    public function IndexAction(){

        $template = $this->template;
        
        return view('pages.home', compact('template'));
    } 
}
