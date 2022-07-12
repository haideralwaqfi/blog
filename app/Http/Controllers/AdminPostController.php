<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {

        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }
    public function update(Post $post)
    {


        $att = $this->validatePost($post);
        if ($att['thumbnail'] ?? false) {
            $att['thumbnail'] =  request()->file('thumbnail')->store('thumbnails');
        }
        $post->update($att);
        return redirect('/admin/posts')->with('success', 'Post Updated!');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post Deleted!');
    }

    public function validatePost(Post $post)
    {
        return request()->validate([
            'title' => 'required',
            'thumbnail' => $post->exist ? ['image'] : ['image', 'required'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);
    }
}
