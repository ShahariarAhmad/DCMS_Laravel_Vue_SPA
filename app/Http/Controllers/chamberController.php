<?php

namespace App\Http\Controllers;

use App\Models\Chamber;
use Illuminate\Http\Request;

class chamberController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Chamber::all();
        return response($response); //
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

        if ($request->hasFile('file')) {

            try {
                $file = $request->file('file');
                $filename = time() . '_' . $file->getClientOriginalName();
                $location = 'images/chambers/';
                $file->move($location, $filename);
                Chamber::create([
                    'name' => $request->name,
                    'house_no' => $request->house_no,
                    'road_number' => $request->road_number,
                    'area' => $request->area,
                    'district' => $request->district,
                    'day' => $request->date,
                    'time' => $request->time,
                    'img_url' => $filename,
              
                ]);
             

                return response('Success', 200);
            } catch (\Throwable $th) {
                return response($th);
            }
        }

  
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



        // return response($id);
        // return response($request->url);

        // if ($request->hasFile('file')) {
        //     return response('file found');
        // }
        if ($request->hasFile('file')) {
            $path =    strlen(env('APP_URL').'/');
            $imageName = substr($request->url, $path);
            if (file_exists($imageName)) {

                unlink($imageName);
            }

            try {
                $file = $request->file('file');
                $filename = time() . '_' . $file->getClientOriginalName();
                $location = 'images/chambers/';
                $file->move($location, $filename);



                Chamber::where('id', $id)->update([
                    'img_url' => $filename
                ]);

              
            } catch (\Throwable $th) {

                return response($th);
            }

        } 
        Chamber::where('id', $id)->update([
            'name' => $request->name,
            'area' => $request->area,
            'day' => $request->date,
            'district' => $request->district,
            'house_no' => $request->house_no,
            'road_number' => $request->road_number,
            'time' => $request->time
        ]);
        
        return response($request->name, 200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = substr(Chamber::find($id)->img_url, strlen(env('APP_URL')) + 1);
        if (file_exists($path)) {
            unlink($path);
        }
        Chamber::find($id)->delete();
        return response('', 200);
    }
}
