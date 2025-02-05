<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $data = [
        //     [
        //         'id' => 1,
        //         'title' => 'laravel dersleri',
        //         'description' => 'güzel bir framework',
        //         'likeCount' => 50,
        //         'active' => true
        //     ],
        //     [
        //         'id' => 2,
        //         'title' => 'php dersleri',
        //         'description' => 'güzel bir framework',
        //         'likeCount' => 50,
        //         'active' => false
        //     ],
        //     [
        //         'id' => 3,
        //         'title' => 'javascript dersleri',
        //         'description' => 'güzel bir framework',
        //         'likeCount' => 50,
        //         'active' => true
        //     ]
        // ];
        
        // return view('blogs.index', ['blogs' => $data]);
         $blogs = Blogs::all();
        // $blogs = Blogs::orderBy('title','desc')->get();
        // $blogs = Blogs::where('title','laravel dersleri')->get();
        // $blogs = Blogs::latest()->get();
        return view('blogs.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {

        // $data = [
        //     'id' => $id,
        //     'title' => 'laravel dersleri',
        //     'description' => 'güzel bir framework',
        //     'likeCount' => 50,
        //     'active' => true
        // ];
        // return view('blogs.show', $data);
        $blog = Blogs::find($id);
        return view('blogs.show', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
