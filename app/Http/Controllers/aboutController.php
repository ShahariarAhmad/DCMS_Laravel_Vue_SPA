<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all()->first();
        return response($about);
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
        //
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
        $currentImagePath = substr($request->PreviousImage, strlen(env('APP_URL') . '/'));


      

            if (is_object($request->profile_img)) {

                if ($request->hasFile('profile_img')) {



                    if (file_exists($currentImagePath)) {
                        unlink($currentImagePath);
                    }

                    try {
                        $file = $request->file('profile_img');
                        $filename = time() . '_' . $file->getClientOriginalName();
                        $location = 'images/about/';
                        $file->move($location, $filename);

                        About::where('id', $id)->update([
                            'profile_img' => $filename
                        ]);
                    } catch (\Throwable $th) {

                        return response('catch');
                    }
                }
            }

            About::where('id', $id)->update([

                'name' => $request->name,
                'degree' => $request->degree,
                'brife_description' => $request->brife_description,
            ]);
        


      
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
