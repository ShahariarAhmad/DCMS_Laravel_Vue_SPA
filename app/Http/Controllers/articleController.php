<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\blog_category;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Notifications\ArticlePosted;
class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Blog::where('status',1)->where('feautured',1)->count();

        $dratfs = Blog::whereJsonContains('status', 0)->get();

        $response = Blog::where('status', 1)->get();;
        return response()->json([
            'article' => $response,
            'dratfs' => $dratfs
        ]);
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
            // return response($request->categories);

            try {
                $file = $request->file('file');
                $filename = time() . '_' . $file->getClientOriginalName();
                $location = 'images/articles/';
                $path = $file->move($location, $filename);

                $blog = Blog::create([
                    'title' => $request->title,
                    'article' => $request->article,
                    'status' => $request->status,
                    'user_id' => 1,
                    'img_url' => $filename
                ]);

                $blogId = $blog->id;
                $arr = explode(",", $request->categories);
                foreach ($arr as $c) {
                    blog_category::create(['blog_id' => $blogId, 'category_id' => $c]);
                }

              
 
                $user->notify(new ArticlePosted($blog));
                return response($blog->id, 200);
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
        $data = Blog::whereId($id)->get();

        return response($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories =   DB::table('blog_categories')
            ->join('categories', 'categories.id', 'blog_categories.category_id')
            ->where('blog_id', $id)
            ->get(['categories.id', 'category']);


        $blog = Blog::find($id);
        return response([
            'categories' => $categories,
            'article' => $blog
        ], 200);
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
        // return response($request);
     

        if ($request->hasFile('file')) {
            if (file_exists($request->currentImage)) {
                unlink($request->currentImage);
            }

                try {
                    $file = $request->file('file');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $location = 'images/articles/';
                    $file->move($location, $filename);



                    Blog::where('id',$id)->update([
                        'title' => $request->title,
                        'article' => $request->article,
                        'status' => $request->status,
                        'user_id' => 1,
                        'img_url' => $filename
                    ]);

         

                    return response('If Block :', 200);

                } catch (\Throwable $th) {
                  
                    return response('catch');
                }
            
        } else {
            $path =    strlen(env('APP_URL').'images/articles/.') ;
             response($path);
            $imageName = substr(Blog::find($id)->img_url, $path);
            response($imageName);
            Blog::where('id',$id)->update([
                'title' => $request->title,
                'article' => $request->article,
                'status' => $request->status,
                'user_id' => 1,
                'img_url' => $imageName
            ]);

            return response('ELSE Block :' . $imageName , 200);
        }

        if (!empty($request->categories)) {
            blog_category::where('blog_id', $id)->delete();
            
            $arr = explode(",", $request->categories);
            foreach ($arr as $c) {
                blog_category::create(['blog_id' => $id, 'category_id' => $c]);
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $path = substr(Blog::find($id)->img_url, strlen(env('APP_URL')) + 1);
        if (file_exists($path)) {
            if (unlink($path)) {
                Blog::find($id)->delete();
                return response('success', 200);
            }
        } else {
            Blog::find($id)->delete();
            return response('success', 200);
        }
    }

    public function categoryList()
    {
        $data = Category::all();
        return response($data, 200);
    }
}
