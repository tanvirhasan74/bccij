<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $newslist = DB::table('news')->get();
        //$newslist = App\News::all();
        
        return view('news.index')
                    ->with('newspack', $newslist);
    }
    public function indexFront()
    {
        $newslist = DB::table('news')->get();
        //$newslist = App\News::all();
        
        return view('news_events')
                    ->with('newspack', $newslist);
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
        error_log($imagePath);
        $newsdata = $request->validated();
        $newsdata['image_url'] = $imagePath ?? '';
        
        $news = $request->user()->news()->save(new News($newsdata));

       // return redirect()->route('reports.show', $report);
       return redirect()->route('newsHome');
    }


    

    public function deleteNews(Request $request)
    {
        //$news = DB::table('news')->where('id', $request->id)->first();

        $news=News::find($request->id);
        $news->delete();
        return redirect()->route('newsHome');


    }
    public function newsdetails(Request $request,$newsid)
    {
        //$news=News::find($request->id);
        //$news = DB::table('news')->where('id',$request->id)->first();
        $news = News::whereid($newsid)->first();
        return view('news_details')
                    ->with( 'newstitle',$news->title)
                    ->with('newsdescription', $news->description)
                    ->with('newsimage',$news->image_url);
    }
}
