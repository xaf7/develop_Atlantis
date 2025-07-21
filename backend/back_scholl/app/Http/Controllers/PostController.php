<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allpost = post::all();
        return view('post.index', compact('allpost'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(Post::create($request->all()));
        $validatedData = $request->validate([
            'title' =>   'required|string|max:100',
            'content' => 'required|string',
            'category' => 'required|in:berita,pengumuman',
        ]);

        //untuk menyimpan data
        post::create($validatedData);

        //redirect data kategory
        return redirect()->Route('post.index')->with('succes','data berhasil dimasukan');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        return view('post.edit', compact('post'));
        $post = Post::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        $validatedData = $request->validate([
            'title' =>   'required|max:100',
            'content' => 'required|string',
            'category' => 'required|in:berita,pengumuman',
        ]);

        //untuk menyimpan data
        $post->update($validatedData);

        //redirect data kategory
        return redirect()->Route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $post->delete();
        //redirect data kategory
        return redirect()->Route('post.index');
    }
}
