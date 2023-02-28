<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getBWA()
    {
        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ])->get('https://buildwithangga.com/api/catalog/code');

        return view('bwa', [
            'response' => $response->json()
        ]);
    }
    public function getBWADesign()
    {
        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ])->get('https://buildwithangga.com/api/catalog/design');

        return view('bwa', [
            'response' => $response->json()
        ]);
    }
}
