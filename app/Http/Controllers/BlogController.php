<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// to out log
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    /**
     * Show outline of articles
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "home index";

        $posts = \App\Post::get_all();
        $data = array(
            'title' => \Config::get('global.title.home'), 
            'posts' => $posts,    
        );

        //Log::debug($data["posts"]);

        //return view('post.dash-board', $data);
        return $data;
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
