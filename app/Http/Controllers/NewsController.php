<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsData;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->get();
        return view('news.index', ['news' => $news]);
    }
    public function create()
    {
        return view('news.create');
    }

    public function store(NewsData $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->image->store('images');
        }
        $newsdata = $request->validated();
        $newsdata['image_url'] = $imagePath ?? '';
        
        $news = $request->user()->news()->save(new News($newsdata));

       // return redirect()->route('reports.show', $report);
       return redirect()->route('home');
    }
}
