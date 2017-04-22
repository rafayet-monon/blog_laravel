<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


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
       $blog_info=DB::table('tbl_blog')
                ->where('blog_id',$blog_id)
                ->first();
       $data=array();
       $data['hit_count']=$blog_info->hit_count+1;
       DB::table('tbl_blog')
            ->where('blog_id',$blog_id)
            ->update($data );

       $blog_details=DB::table('tbl_blog')
           ->join('tbl_category','tbl_blog.category_id','=','tbl_category.category_id')
           ->where('tbl_blog.blog_id',$blog_id)
           ->select('tbl_blog.*','tbl_category.category_name')
           ->first();
       $published_category=DB::table('tbl_category')
           ->where('publication_status',1)
           ->get();
       /* comments */
       $published_comment=DB::table('tbl_comments')
           ->join('users','tbl_comments.id','=','users.id')
           ->where('blog_id',$blog_id)
           ->where('publication_status',1)
           ->select('tbl_comments.*','users.name')
           ->get();
       /**/
       $blog_details_content=view('layouts.blog_details')
                            ->with('details_blog',$blog_details)
                            ->with('published_comments',$published_comment);

       $side_bar_content=view('layouts.side_bar')->with('all_published_category',$published_category);
       return view('app')->with('content',$blog_details_content)->with('side_bar',$side_bar_content);
   }

    public function user_dashboard()
    {
        $user_dashboard_content=view('layouts.user_dashboard');
        return view('app')->with('content',$user_dashboard_content);
    }
    
    public function save_comment(Request $request)
    {
        $data=array();
        $data['id']=$request->user_id;
        $data['blog_id']=$request->blog_id;
        $data['comments']=$request->comments;
        $data['publication_status']=$request->publication_status;


        DB::table('tbl_comments')->insert($data);
        Session::put('message','** Your comment is waiting for admin approval **');
       return Redirect::to('/blog_details/'.$data['blog_id']);
    }
}
