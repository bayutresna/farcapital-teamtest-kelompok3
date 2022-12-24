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

        return view('frontend.aspirasi.detail', [
            "aspirasi" => $data
        ]);
    }

    function create()
    {
        return view('frontend.aspirasi.add');
    }
}
