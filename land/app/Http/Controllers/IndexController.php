<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;

use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use App\About;
use DB;
use Mail;

class IndexController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            $messages = [
                'required'=>"Поле :attribute обязательно к заполнению",
                'email'=>"Поле :attribute должно соответствовать email адресу",
            ];
            
            $this->validate($request, [
                'name'=>'required|max:255',
                'email'=>'required|email',
                'text'=>'required',
                'phone'=>'required'
            ], $messages);
            
            $data = $request->all();
               
            $result = Mail::send('site.email', ['data'=>$data], function($message) use($data){
                $mail_admin = env('MAIL_ADMIN'); 
                $message->from($data['email'], $data['name']);
                $message->to($mail_admin)->subject('Question');
            });
            return redirect()->route('home')->with('status', 'Email was sent.');

        }
        
        $pages = Page::all();
        $about = About::all();
        $portfolios = Portfolio::get(array('name', 'images', 'filter'));
        $services = Service::where('id', '<', 20)->get();
        $people = People::take(3)->get();
        
        $tags = DB::table('portfolioss')->distinct()->pluck('filter');
        
//        dd($about);// dump and die
       $menu = array();
     
       foreach($pages as $page){
           $item = array('title'=>$page->name, 'alias'=>$page->alias);
           array_push($menu, $item);
       }
       
        return view('site.index', array(
            'menu'=>$menu,
            'pages'=>$pages,
            'services'=>$services,
            'portfolios'=>$portfolios,
            'people'=>$people,
            'about'=>$about,
        ));
    }
}
