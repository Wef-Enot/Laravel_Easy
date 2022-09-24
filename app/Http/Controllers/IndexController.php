<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\Category;

class IndexController extends Controller
{
    private $template = 'default';

    public function IndexAction(){

        $template = $this->template;
        $categories = Category::get();
        return view('pages.home', compact('template', 'categories'));
    }
    public function CategoryAction($id){
        $template = $this->template;
        $category = Category::where('id', $id)->first();
        $boards = Board::where('id_category', $id)->get();
        //dd($boards);
        return view('pages.category', compact('template', 'category', 'boards'));
    } 
}
