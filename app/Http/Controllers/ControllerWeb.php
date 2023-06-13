<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Request;
use Session;
use App\Models\User;
use App\Models\Orange;
use App\Models\Comment;

class ControllerWeb extends BaseController {

public function home() {
    if(!Session::get('user_id')){
        return redirect('login');
    }
    return view('hw2-home');
}
public function arance(){

    if(!Session::get('user_id')){
        return ['ok' => false];
    } 
    
    if (Orange::where('arance', Request::post('title'))->where('user_id', Session::get('user_id'))->first()) {
        return ['ok' => false];
    }

    $orange = new Orange;
    $orange->arance  = Request::post('title');
    $orange->user_id = Session::get('user_id');
    $orange->save();
    return ['ok' => true];     

}

public function ricette() {
    if(!Session::get('user_id')){
        return redirect('login');
    }
    return view('hw2-recipe');
}
function ricette_cerca() {
    if(!Session::has('user_id')){
        exit;
    }
    $cibo = env('CIBO');
    $query = urlencode(Request::get("q"));
    $url = 'https://api.spoonacular.com/recipes/complexSearch?apiKey='.$cibo.'&query='.$query.'&includeIngredients=orange&number=6';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $res=curl_exec($ch);
    curl_close($ch);
    return $res;
}

public function video() {
    if(!Session::get('user_id')){
        return redirect('login');
    }
    return view('hw2-video');
}
public function video_cerca(){
    
    if(!Session::has('user_id')){
        exit;
    }
    
    $secret_vimeo = env('VIMEO_SECRET');
    $client_vimeo = env('VIMEO_ID');
    

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.vimeo.com/oauth/authorize/client' );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials&scope=public'); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.utf8_encode(base64_encode($client_vimeo.':'.$secret_vimeo)))); 
    $token=json_decode(curl_exec($ch), true);
    curl_close($ch);    


    $url = 'https://api.vimeo.com/videos?page=1&per_page=5&query=arancia%20sicilia';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
    $res=curl_exec($ch);
    curl_close($ch);
    return $res;
}

public function social() {
    if(!Session::get('user_id')){
        return redirect('login');
    }
    return view('hw2-social');
}
public function commento_cerca() {
    
    $rows = Comment::all();
    return json_encode($rows);
}

public function profile() {
    if(!Session::get('user_id')){
        return redirect('login');
    }
    $user = User::find(Session::get('user_id'));
    return view('hw2-profile')
        ->with('user', $user);
}
public function commento() {

    if(!Session::get('user_id')){
        return ['ok' => false];
    }

    $comment = Request::post('commento');
    $star = Request::post('stella');
    $user = Session::get('user_id');

    $commento = new Comment;
    $commento->commenti = $comment;
    $commento->stella = $star;
    $commento->user_id = User::find($user)->username;
    $commento->save();
    
    return ['ok' => true];  

}
public function arance_cerca() {
   
   $rows = Orange::where('user_id', Session::get('user_id'))->get();
   return json_encode($rows);
    
}

}