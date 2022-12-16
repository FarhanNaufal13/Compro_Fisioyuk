<?php

namespace App\Http\Controllers;

use App\Models\BannerHome;
use Illuminate\Http\Request;

class BannerHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bannerHome = BannerHome::first();

        return view('bannerHome', compact('bannerHome'));
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
     * @param  \App\Models\BannerHome  $bannerHome
     * @return \Illuminate\Http\Response
     */
    public function show(BannerHome $bannerHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerHome  $bannerHome
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerHome $bannerHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BannerHome  $bannerHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bannerHome = BannerHome::find($id);
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'sub_title' => 'required',
            'image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $bannerHome->update($input);

        return redirect('/admin/bannerHome')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerHome  $bannerHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerHome $bannerHome)
    {
        //
    }
}
