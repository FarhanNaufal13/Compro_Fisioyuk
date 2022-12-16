<?php

namespace App\Http\Controllers;

use App\Models\BannerPromo;
use Illuminate\Http\Request;

class BannerPromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bannerPromo = BannerPromo::first();
        
        return view('bannerPromo', compact('bannerPromo'));
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
     * @param  \App\Models\BannerPromo  $bannerPromo
     * @return \Illuminate\Http\Response
     */
    public function show(BannerPromo $bannerPromo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerPromo  $bannerPromo
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerPromo $bannerPromo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BannerPromo  $bannerPromo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bannerPromo = BannerPromo::find($id);
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image'
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

        $bannerPromo->update($input);

        return redirect('/admin/bannerPromo')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerPromo  $bannerPromo
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerPromo $bannerPromo)
    {
        //
    }
}
