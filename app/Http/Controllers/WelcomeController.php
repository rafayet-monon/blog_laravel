<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $published_category=DB::table('tbl_category')
                            ->where('publication_status',1)
                            ->get();
        $home_content=view('layouts.home');
        $side_bar_content=view('layouts.side_bar')->with('all_published_category',$published_category);
        return view('app')->with('content',$home_content)->with('side_bar',$side_bar_content);
    }
    public function blog()
    {
        $published_blog=DB::table('tbl_blog')
            ->join('tbl_category','tbl_blog.category_id','=','tbl_category.category_id')
            ->where('tbl_blog.publication_status',1)
            ->select('tbl_blog.*','tbl_category.category_name')
            ->get();
        $published_category=DB::table('tbl_category')
                ->where('publication_status',1)
                ->get();
        $blog_content=view('layouts.blog')->with('all_published_blog',$published_blog);
        $side_bar_content=view('layouts.side_bar')->with('all_published_category',$published_category);
        return view('app')->with('content',$blog_content)->with('side_bar',$side_bar_content);
    }
    public function about()
    {
        $about_content=view('layouts.about');
        return view('app')->with('content',$about_content);
    }
    public function services()
    {
        $service_content=view('layouts.services');
        return view('app')->with('content',$service_content);
    }
    public function contact()
    {
        $contact_content=view('layouts.contact');
        return view('app')->with('content',$contact_content);
    }

   public function blog_details($blog_id)
   {
       $blog_details=DB::table('tbl_blog')
           ->join('tbl_category','tbl_blog.category_id','=','tbl_category.category_id')
           ->where('tbl_blog.blog_id',$blog_id)
           ->select('tbl_blog.*','tbl_category.category_name')
           ->first();
       $published_category=DB::table('tbl_category')
           ->where('publication_status',1)
           ->get();
       $blog_details_content=view('layouts.blog_details')->with('details_blog',$blog_details);
       $side_bar_content=view('layouts.side_bar')->with('all_published_category',$published_category);
       return view('app')->with('content',$blog_details_content)->with('side_bar',$side_bar_content);
   }
}
