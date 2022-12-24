<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    function index()
    {
        $aspirasi = HttpClient::fetch(
            "GET",
            "http://localhost:8000/api/aspirasi/list"
        );
        $data = $aspirasi["data"];

        return view('frontend.aspirasi.index', [
            "aspirasis" => $data
        ]);
    }

    function detail($id)
    {
        $linknya = "http://localhost:8000/api/aspirasi/" . $id . "/show";
        $responseData = HttpClient::fetch(
            "GET",
            $linknya
        );
        $data = $responseData["data"];
        $data['is_read'] = 1;

        $linkpost = "http://localhost:8000/api/aspirasi/" . $id . "/update";
        $post = HttpClient::fetch(
            "post",
            $linkpost,
            $data
        );

        return view('frontend.aspirasi.detail', [
            "aspirasi" => $data
        ]);
    }
    function create()
    {
        return view('frontend.aspirasi.add');
    }

    function add(Request $req)
    {
        $file = ['foto' => $req->file('foto')];
        $payload = [
            'nama' => $req->input('nama'),
            'email' => $req->input('email'),
            'nik' => $req->input('nik'),
            'judul' => $req->input('judul'),
            'cerita' => $req->input('cerita'),
        ];

        $linknya = "http://localhost:8000/api/aspirasi/store";
        $aspirasi = HttpClient::fetch(
            "POST",
            $linknya,
            $payload,
            $file
        );

        return redirect()->route('homepage')->withErrors([
                'msg' =>'aspirasi telah diterima. terimakasih sudah berkontribusi untuk kemajuan negara kita'
                ]);
    }
}
