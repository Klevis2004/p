<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsBlog;
use App\Models\LibratPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Li;

class BlogContoller extends Controller
{

    public function index()
    {
        $posts = LibratPost::all();
        return view('users.contain.welcome', ['posts' => $posts]);
    }

    public function create()
    {
        return view('users.contain.register');
    }
    public function store(PostsBlog $request)
    {
        $validated = $request->validated();

        $post = LibratPost::create($validated);

        session()->flash('status', 'The book was published succefully!');
        return redirect('/book/' . $post->id);
    }

    public function show($id)
    {
        $post = DB::table('librat_posts')->where('id', $id)->first();
        return view('users.contain.show', ['post' => $post]);
    }


    public function edit(string $id)
    {
        $post = LibratPost::findOrFail($id);
        return view('users.contain.edit', ['post' => $post]);
    }

    public function update(PostsBlog $request, string $id)
    {
        $validated = $request->validated();

        $post = LibratPost::findOrFail($id);
        $post->fill($validated);
        $post->save();

        session()->flash('status', 'The book was updated successfully!');
        return redirect('/book/' . $post->id);
    }

    public function destroy(string $id)
    {
        $post = LibratPost::findOrFail($id);
        $post->delete();

        session()->flash('status', 'The book was deleted successfully!');
        return redirect('/');
    }
}
