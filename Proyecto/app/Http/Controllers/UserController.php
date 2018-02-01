<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        $credenciales = $this->validate(request(),[
            'email'=>'email|required|string',
            'password'=>'required|string'
        ]);


        if(Auth::attempt($credenciales)){
            session('usuario');
            return redirect('/');
        }else{
            return back()
                ->withErrors(['email' => trans('auth.failed')])
                ->withInput(request(['email']));
        }

    }
    public function register(Request $request){
        $credenciales = $this->validate(request(),[
            'email' =>'email|required|string',
            'name' =>'required|string',
            'surnames' => 'required|string',
            'password'=>'required|string',
        ]);
        if(request()->get('pwd')!=request()->get('rpwd')){
            return back()->withErrors(['password'=>'Las contraseñas introducidas no coinciden']);
        }
        if(DB::table('users')->where('email', 'LIKE', $request->get('email'))->firstOrFail()){
            return back()->withErrors(['email'=>'Email ya utilizado']);
        }

    }
}
