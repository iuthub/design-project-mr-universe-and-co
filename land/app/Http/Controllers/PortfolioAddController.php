<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Portfolio;

class PortfolioAddController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            $input = $request->except('_token');
//            dd($input);
            $validator = Validator::make($input, [
                'name'=>'required|max:255',
                'filter'=>'required|max:255',
            ]);
            
            if($validator->fails()){
                return redirect()->route('portfolioAdd')->withErrors($validator);
            }
            
            if($request->hasFile('images')){
                $file = $request->file('images');
                $input['images'] = $file->getClientOriginalName();
                $file->move(public_path().'/assets/img/portfolio', $input['images']);
            } else{
                $input['images'] = 'default.jpg';
            }
            
            $portfolio = new Portfolio();
            $portfolio->fill($input);
            if($portfolio->save()){
                return redirect('admin')->with('status', 'Портфолио добавлено');
            }
        }
        
        if(view()->exists('admin.portfolio_add')){
         
            $data = [
                'title' => 'Новое портфолио',
            ];
            
            return view('admin.portfolio_add', $data);
        }
        
        abort(404);
    }
}
