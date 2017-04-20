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

    public function edit_category()
    {
        $update_category_content=view('admin_layouts.pages.update_category');
        return view('admin_layouts.admin_master')->with('admin_content',$update_category_content);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
