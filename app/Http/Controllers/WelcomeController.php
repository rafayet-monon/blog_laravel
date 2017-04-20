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
        $blog_content=view('layouts.blog');
        $side_bar_content=view('layouts.side_bar');
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
