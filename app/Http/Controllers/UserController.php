<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\HttpClient;

class UserController extends Controller
{
    function index(){
        $responseUser = HttpClient::fetch(
            "GET",
            "http://127.0.0.1:8000/api/user/list"
        );
        $users = $responseUser["data"];
        return view('frontend.user.index', [
            "users" => $users
        ]);
    }
    function detail($id){
        $responseUser = HttpClient::fetch(
            "GET",
            "http://127.0.0.1:8000/api/user/$id/show"
        );
        $user = $responseUser["data"];
        return view('frontend.user.detail', [
            "user" => $user

        ]);
    }

    function update(Request $request, $id){

        $nama = $request->nama;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;


        $payload = [
            'nama' => $nama,
            'username' => $username,
            'email' => $email,
            'password' => $password
        ];

        $responseUser = HttpClient::fetch(
            "POST",
            "http://127.0.0.1:8000/api/user/$id/update",
            $payload
        );

        $user = $responseUser["data"];

        return redirect()->route('user.index');
    }

    function create(){
        return view('frontend.user.add');
    }

    function destroy($id){
        HttpClient::fetch(
            "POST",
            "http://127.0.0.1:8000/api/user/$id/delete"
        );
        return redirect()->route('user.index');
    }

    function store(Request $request){

        $nama = $request->nama;
        $username = $request->username;
        $email = $request->email;
        $password = $request->email;

        $payload = [
            'nama' => $nama,
            'username' => $username,
            'email' => $email,
            'password' => $password
        ];

        $responseUser = HttpClient::fetch(
            "POST",
            "http://127.0.0.1:8000/api/user/store",
            $payload
        );

        if(!$responseUser['status']){
            return redirect()->back()->withError(["error"=>"data tidak berhasil disimpan"]);
        }

        $users = $responseUser["data"];
        return redirect()->route('user.index');
    }
}
