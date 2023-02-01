<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
class AuthorController extends Controller
{
    public function index()
    {
        $token = Session::get('token_key');

        $client = new Client();
        $response = $client->get('https://symfony-skeleton.q-tests.com/api/v2/authors', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json',
            ],
            'query' => [
                'orderBy' => 'id',
                'direction' => 'ASC',
                'limit' => 12,
                'page' => 1,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $items= $data['items'];
        return view('authors.index', [
            'data' => $items,
        ]);
    }
    public function show($id)
    {
        //
        $token = Session::get('token_key');
        $client = new Client();
        $response = $client->get('https://symfony-skeleton.q-tests.com/api/v2/authors/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ],
            'query' => [
                'orderBy' => 'id',
                'direction' => 'ASC',
                'limit' => 12,
                'page' => 1,
            ],
        ]);
        $data = json_decode($response->getBody(), true);
        $books = $data['books'];
        $first_name = $data['first_name'];
        return view('authors.books', [
            'title' => $first_name,
            'data' => $books
        ]);
    }
}
