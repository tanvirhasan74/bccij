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
       $president_message = \Illuminate\Support\Facades\File::get(base_path() . '/public/messages/president.txt');
       $ambassador_message = \Illuminate\Support\Facades\File::get(base_path() . '/public/messages/ambassador.txt');
       $generalSecretary_message = \Illuminate\Support\Facades\File::get(base_path() . '/public/messages/generalSecretary.txt');
       $notice = \Illuminate\Support\Facades\File::get(base_path() . '/public/storage/important_notice.txt');
       error_log($notice);
        $data=array('newspack'=>$newslist, 'president_message'=>$president_message,'ambassador_message'=>$ambassador_message,'generalSecretary_message'=>$generalSecretary_message,'notice'=>$notice);
        return view('index')
                    ->with($data);
    }
}
