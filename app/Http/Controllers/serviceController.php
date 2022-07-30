<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $services = Service::all()->first();
        return response($services);

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


            if (is_object($request->image_url)) {

                if ($request->hasFile('image_url')) {



                    if (file_exists($currentImagePath)) {
                        unlink($currentImagePath);
                    }

                    try {
                        $file = $request->file('image_url');
                        $filename = time() . '_' . $file->getClientOriginalName();
                        $location = 'images/service/';
                        $file->move($location, $filename);

                        Service::where('id', $id)->update([
                            'image_url' => $filename
                        ]);
                    } catch (\Throwable $th) {

                        return response('catch');
                    }
                }
            }
	
            
            Service::where('id', $id)->update([

                'title' => $request->title,
                'short_description' => $request->short_description,
                'degree' => $request->degree

            ]);

            return response('service block');
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
