<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use Validator;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
            //    $validator = Validator::make($request->all(), [
            //        'name_en' => 'required',
            //        'name_jp' => 'required',
            //        'episodes' => 'required',
            //        'source' => 'required',
            //        'banner' => 'required',
            //        'cover' => 'required',
            //        'status' => 'required',
            //    ]);
       
            //    if ($validator->fails()) {
                   
            //        return redirect('/add')
            //                    ->withErrors($validator)
            //                    ->withInput($request->input());
            //    }
       
               $name_en = request('name_en');
               $name_jp = request('name_jp');
               $source = request('source');
               $status = request('status');
               $episodes = request('episodes');
               $banner = request('banner');
               $cover = request('cover');

       
       
              Anime::create([
                   'name_en' => $name_en,
                   'name_jp' => $name_jp,
                   'source' => $source,
                   'status' => $status,
                   'episodes' => $episodes,
                   'banner' => $banner,
                   'cover' => $cover
               ]);
               // dd($new_vehicle['registarske_oznake']);
            //    return redirect('add');
            return response()->json(['success'=>'Form is successfully submitted!']);
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
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $anime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anime $anime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $anime)
    {
        //
    }
}
