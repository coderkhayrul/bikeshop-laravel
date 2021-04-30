<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post as ModelsPost;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(5);
        $allcategories = Category::where('order', '=', '1')->orderBy('created_at', 'desc')->get();
        $news = ModelsPost::orderBy('created_at', 'desc')->paginate(3);
        $products = Product::orderBy('created_at', 'desc')->paginate(15);
        return view('home', compact('categories', 'allcategories', 'news','products'));
    }
}
