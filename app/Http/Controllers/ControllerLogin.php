<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Request;
use Session;
use App\Models\User;

class ControllerLogin extends BaseController {

    public function login() {
        return view('hw2-login');
    }

    public function login_post() {
        if(Session::has('user_id')){
            return redirect('home');
        }
        $error = array();
        if(!empty(Request::post('username')) && !empty(Request::post('password'))){
            $user = User::where('username', Request::post('username'))->first();
            if(!$user){
                $error['username'] = "ERRORE: Username non valido";
            } else {
                if(!password_verify(Request::post('password'), $user->password)){
                    $error['password'] = "ERRORE: Password errata";
                }
            }
        } else {
            $error['username'] = "Inserisci username e password";
        }
        if(count($error) == 0){
            Session::put('user_id', $user->id);
            return redirect('home');
        } else {
            return redirect('login')->withInput()->withErrors($error);
        }
    }

    public function logout() {
        Session::flush();
        return redirect('login');
    }

    public function registro() {
        return view('hw2-registra');
    }

    public function registro_post() {
        if(Session::has('user_id')) {
            return redirect('home');
        }   
        
        $error = array();

        if (!empty(Request::get('username')) && !empty(Request::get('name')) && !empty(Request::get('surname')) && 
	    !empty(Request::get('email')) && !empty(Request::get('password')) && !empty(Request::get('confirm_password'))){
            
            if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', Request::get('username'))) {
                $error['username'] = "ERRORE: Username non valido";
            } else {
                if(User::where('username', Request::get('username'))->first()) {
                    $error['username'] = "ERRORE: Username già usato";
                }
            }

            if (strlen(Request::get('password')) < 10) {
                $error['password'] = "ERRORE: Caratteri della password insufficienti, min 10";
            } 

            if (Request::get('password') != Request::get('confirm_password')) {
                $error['password'] = "ERRORE: Le due password non coincidono";
            }

            if (!filter_var(Request::get('email'), FILTER_VALIDATE_EMAIL)) {
                $error['email'] = "ERRORE: Email invalida";
            } else {
                if(User::where('email', Request::get('email'))->first()) {
                    $error['email'] = "ERRORE: Email già usata";
                }
            }
    
            if (count($error) == 0) {
                $user = new User;
                $user->username = Request::get('username');
                $user->password = password_hash(Request::get('password'), PASSWORD_BCRYPT);
                $user->name = Request::get('name');
                $user->surname = Request::get('surname');
                $user->email = Request::get('email');
                $user->save();
                Session::put('user_id', $user->id);
                return redirect('home');
            }

        }
        else {
            $error[] = "ERRORE: Riempi tutti i campi";
            #return redirect('signup')->withInput()->withErrors($error);
        }
        return redirect('signup')->withInput()->withErrors($error);
    }

    public function check($field) {
        if(empty(Request::get('q'))) {
            return ['exists' => false];
        }
        $user = User::where($field, Request::get('q'))->first();
        return ['exists' => $user ? true : false];
    }

}