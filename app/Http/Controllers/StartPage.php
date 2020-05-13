<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StartPage extends Controller
{
    public function index()
    {
        $newslist = DB::table('news')->latest()->get();
        //$newslist = App\News::all();
        
        return view('news.index')
                    ->with('newspack', $newslist);
    }   
}
