<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Banner::WhereNull('deleted_at')->get();
        return view('banners.index',compact('rows'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
    {
         return view('banners.created');
    }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'name'=>'required|unique:banners|max:50',
            'description' => 'max:200'
        ]);

        Banner::create([
            'name'=> $request->name,
            'description'=>$request->description

        ]);

        return redirect()->route('banner.index');
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
         $row = Banner::findOrFail($id);
        return view('banners.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Banner::findOrFail($id);
        $validated = $request -> validate([
            'name'=>'required|unique:banners,name,'.$id.'|max:50',
            'description' => 'max:200'
        ]);

        $row->update([
            'name'=> $request->name,
            'description'=>$request->description

        ]);

        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Banner::findOrFail($id);
        $row->delete();
        return redirect()->route('banner.index');
    }
}
