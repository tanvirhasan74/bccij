<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StartController extends Controller
{
    public function index()
    {
        $newslist = DB::table('news')->limit(8)->latest()->get();
        //$newslist = App\News::all();
       $message = \Illuminate\Support\Facades\File::get(base_path() . '/public/messages/president.txt');
       $notice = \Illuminate\Support\Facades\File::get(base_path() . '/public/storage/important_notice.txt');
       error_log($notice);
        $msg="hibfb  ibuiwbuibruefbeiurie iebauibueribuerbifuq rnfireabubreiubirebuer jbbijbfribrre irberire ";
        $data=array('newspack'=>$newslist, 'message'=>$message,'notice'=>$notice);
        return view('index')
                    ->with($data);
    }
}
