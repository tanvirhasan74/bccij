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
       //$msg=file_get_contents('president.txt');
       $message = \Illuminate\Support\Facades\File::get(base_path() . '/public/messages/president.txt');
        $msg="hibfb  ibuiwbuibruefbeiurie iebauibueribuerbifuq rnfireabubreiubirebuer jbbijbfribrre irberire ";
        $data=array('newspack'=>$newslist, 'message'=>$message,'msg'=>$msg);
        return view('index')
                    ->with($data);
    }
}
