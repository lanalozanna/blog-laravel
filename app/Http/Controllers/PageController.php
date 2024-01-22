<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    public function about()
    {
        $tags = ['яблоко','apple','kukop','moteda'];
        return view('about', ['tags' => $tags]);
    }
    public function article()
    {   
        $data = Article::all();
        
        return view('article',['data' => $data] );
    }
    
    public function message()
    {   
        $mail = Article::simplePaginate(1);
        
        return view('message', compact('mail') );
    }
    
}
