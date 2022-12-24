<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(Request $req){
        if($req->method() == 'GET'){
            return view('frontend.user.login');
        }
        $payload = $req->all();
        $link = "http://localhost:8000/api/login";

        $user = HttpClient::fetch('POST',$link,$payload);
        // dd($user);
        $datauser = $user['data'];

        if(!$datauser){
            $msg = $user['message'];
            return redirect()
            ->back()
            ->withErrors([
                'msg' =>$msg
                ]);
        }
        if(!session()->isStarted()) session()->start();

        session()->put('logged',true);
        session()->put('IdUser',$datauser['id']);
        // session()->put('role', $user->role);

        return redirect()->route('admin');

    }

    function Logout(Request $request){
        session()->flush();
        return redirect()->route('homepage');
    }
}
