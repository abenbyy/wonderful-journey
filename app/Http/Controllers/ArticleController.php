<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('blog',['articles'=>$articles]);
    }

    public function user(){
        $articles = Article::where('user_id', Auth::user()->id)->get();

        return view('blog', ['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $category = Category::where('name', $request->category)->first();
        
        $article->title = $request->title;
        $article->category_id = $category->id;
        $article->user_id = Auth::user()->id;
        $article->description = $request->description;
        if($request->file('image') !== null){
            
            $request->file('image')->storeAs('/public/images', $request->file('image')->hashName());
            $article->image = $request->file('image')->hashName();
        }

        $article->save();

        return redirect('/articles/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('detail', ['article' => $article]);
    }

    public function category($category){
        $category = Category::where('name', $category)->first();
        $articles = Article::where('category_id', $category->id)->get();

        return view('home', ['articles'=> $articles]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        unlink(storage_path('app/public/images/'.$article->image));
        $article->delete();

        return redirect()->back();
    }
}
