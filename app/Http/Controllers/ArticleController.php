<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        return view('viewArticle',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.addArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'img'=>'required|image',
           
        ]);

   
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        $article = new Article();
        $article->name =  $request->input('name');
        $article->description =  $request->input('description');
        $article->img =  $newName;
        $article->user_id = Auth::id();
        $article->save();

        return redirect()->route('article.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
    
        return view('article.showArticle',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        
        return view('article.editArticle',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article){
        
        if ($request->hasFile('img')) {
            Storage::disk('public')->delete($article->img);
            $image=Storage::disk('public')->put('', $request->img);
            $article->img=$image;
        }
        $article->name=$request->input('name');
        $article->description=$request->input('description');        

        $article->save();
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        
        Storage::disk('public')->delete($article->img);
        $article->delete();
        return redirect()->route('article.index');
    }
}
