<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   
    public function index()
    {
        $rows = Post::WhereNull('deleted_at')->get();
        return view('posts.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'title'=>'required|unique:posts|max:50',
            'description' => 'max:200',
            'sub_title' => 'max:200' ,
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'active' => 'max:200',
            'content' => 'max:200' 

        ]);
        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $imagePath = '/images' . $name;
            }
            Post::create([
                'title'=> $request->title,
                'description'=>$request->description,
                'sub_title' => $request->sub_title ,
                'image' => $request->image ? $imagePath:null,
                'active' => $request-> active,
                'content' => $validated['content']

            ]);
            return redirect()->route('post.index');
        } catch (\Throwable $th) {
            throw $th;
        }

        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Post::findOrFail($id);
        return view('posts.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Post::findOrfail($id);
        $validated = $request -> validate([
            'title'  => 'required|unique:posts,title,' . $id . ',id,deleted_at,NULL',
            'description' => 'max:200',
            'sub_title' => 'max:200' ,
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'active' => 'max:200' ,
            'content' => 'max:200' 

        ]);
        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '-' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $imagePath = '/images' . $name;
            }
            
            
            $row->update([
                'title'=> $request->title,
                'description'=>$request->description,
                'sub_title' => $request->sub_title ,
                'image' => $request->image ? $imagePath:null,
                'active' => $request-> active,
                'content' => $validated['content']

            ]);
            return redirect()->route('post.index');
        } catch (\Throwable $th) {
            throw $th;
        }

        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Post::findOrFail($id);

        if ($row->photo && file_exists(public_path($row->photo))) {
            unlink(public_path($row->photo));
        }

        $row->delete();
        return redirect()->route('post.index');
    }
}
