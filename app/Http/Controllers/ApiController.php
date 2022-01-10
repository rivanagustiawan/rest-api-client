<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getData(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer 1|MWl7UozmKZ9yPI5OAEGPOdYXPHXiC8Y3OMnoJ3ZT'
        ])->get('http://127.0.0.1:8000/api/posts');

        dd($response);
    }

    public function getDataByUserId($id){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer 1|MWl7UozmKZ9yPI5OAEGPOdYXPHXiC8Y3OMnoJ3ZT'
        ])->get('http://127.0.0.1:8000/api/posts/'.$id);

        dd($response, $response->json());
    }
}
