<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
session_start();
class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_id=Session::get('admin_id');
        if($admin_id == null){

            return Redirect::to('/admin_login');
        }

        $dashboard_content=view('admin_layouts.pages.dashboard_content');
        return view('admin_layouts.admin_master')->with('admin_content',$dashboard_content);
    }

    public function logout()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        Session::put('message','You have been successfully logged out!');
        return Redirect::to('/admin_login');

    }

    /*Category section starts*/

    public function add_category()
    {
        $category_content=view('admin_layouts.pages.add_category');
        return view('admin_layouts.admin_master')->with('admin_content',$category_content);

    }

    public function save_category(Request $request)
    {
        $data=array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;

        DB::table('tbl_category')->insert($data);
        Session::put('message','New Category Added');
        return Redirect::to('/add_category');
    }

    public function manage_category()
    {
        $category_info=DB::table('tbl_category')->get();
        $manage_category_content=view('admin_layouts.pages.manage_category')->with('all_category_info',$category_info);
        return view('admin_layouts.admin_master')->with('admin_content',$manage_category_content);

    }

    public function unpublish_category($category_id)
    {
        DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update(['publication_status'=>0]);
        return Redirect::to('/manage_category');
    }

    public function publish_category($category_id)
    {
        DB::table('tbl_category')
            ->where('category_id',$category_id)
            ->update(['publication_status'=>1]);
        return Redirect::to('/manage_category');
    }

    public function delete_category($category_id)
    {
        DB::table('tbl_category')
            ->where('category_id',$category_id)
            ->delete();
        return Redirect::to('/manage_category');
    }

    public function update_category($category_id)
    {
        $category_info=DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->first();
        $update_category_content=view('admin_layouts.pages.update_category')->with('all_category_info',$category_info);
        return view('admin_layouts.admin_master')->with('admin_content',$update_category_content);
    }

    public function edit_category(Request $request)
    {

        $data=array();
        $category_id=$request->category_id;
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;

        DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update($data);

        Session::put('message','Category Updated');
        return Redirect::to('/manage_category');
    }

    /*Category section ends*/

    /*Blog section starts*/

    public function add_blog()
    {
        $category_info=DB::table('tbl_category')
                    ->where('publication_status',1)
                    ->get();

        $add_blog_content=view('admin_layouts.pages.add_blog')->with('all_category_info',$category_info);
        return view('admin_layouts.admin_master')->with('admin_content',$add_blog_content);

    }

    public function save_blog(Request $request)
    {
        $data=array();
        $data['blog_title']=$request->blog_title;
        $data['category_id']=$request->category_id;
        $data['blog_short_description']=$request->blog_short_description;
        $data['blog_long_description']=$request->blog_long_description;
        $data['publication_status']=$request->publication_status;

        $image=$request->file('blog_image');
        if($image){
            $image_name=str_random(20);
            $text=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$text;
            $upload_path='blog_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['blog_image']=$image_url;
                DB::table('tbl_blog')->insert($data);

                Session::put('message','Blog added successfully');
                return Redirect::to('/add_blog');
            }
        }
        else{
            DB::table('tbl_blog')->insert($data);

            Session::put('message','Blog added successfully');
            return Redirect::to('/add_blog');
        }
    }

    public function manage_blog()
    {
        $blog_info=DB::table('tbl_blog')->get();
        $manage_blog_content=view('admin_layouts.pages.manage_blog')->with('all_blog_info',$blog_info);
        return view('admin_layouts.admin_master')->with('admin_content',$manage_blog_content);

    }

    public function unpublish_blog($blog_id)
    {
        DB::table('tbl_blog')
            ->where('blog_id',$blog_id)
            ->update(['publication_status'=>0]);
        return Redirect::to('/manage_blog');
    }

    public function publish_blog($blog_id)
    {
        DB::table('tbl_blog')
            ->where('blog_id',$blog_id)
            ->update(['publication_status'=>1]);
        return Redirect::to('/manage_blog');
    }

    public function delete_blog($blog_id)
    {
        DB::table('tbl_blog')
            ->where('blog_id',$blog_id)
            ->delete();
        return Redirect::to('/manage_blog');
    }

    /*Blog section ends*/

}
