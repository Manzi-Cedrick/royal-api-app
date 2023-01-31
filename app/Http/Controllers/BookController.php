<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Cast\String_;

class BookController extends Controller
{
    //
    public function index () {
        $token = Session::get('token_key');
        $client = new Client();
        $response = $client->get('https://symfony-skeleton.q-tests.com/api/v2/books', [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ],
            'query' => [
                'orderBy' => 'id',
                'direction' => 'ASC',
                'limit' => 12,
                'page' => 1,
                // 'id' => $request
            ],
        ]);
        $data = json_decode($response->getBody(), true);
        $books = $data['items'];
        return view('authors.listbooks', [
            'title' => 'List Book',
            'data' => $books
        ]);

    }
    public function create () {
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
        return view('authors.createbook', [
            'data' => $items,
        ]);
    }
    public function store (Request $request) {
        $request -> validate([
            'title'=>'required',
            'description'=>'required',
            'release_date'=>'required',
            'isbn'=>'required',
            'format'=>'required',
            'page'=>'required|integer',
            'author' => 'required|integer'
        ]);
        // dd($request);
        $token = Session::get('token_key');
        $client = new Client();
        // print(gettype((int)$request->get('page')));
        $numberOfPages =  (int)$request->input('page');
        $response = $client->post('https://symfony-skeleton.q-tests.com/api/v2/books', [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ],
            'form_params' => [
                'author' => [
                    'id' => 62596
                ],
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'realease_date' => $request->input('realease_date'),
                'isbn' => $request->input('isbn'),
                'format' => $request->input('format'),
                'number_of_pages' => $numberOfPages
            ]
        ]);
        $data = json_decode($response->getBody(), true);
        dd($data);
    }
    public function delete(string $id) {
        $token = Session::get('token_key');
        $client = new Client();
        $response = $client->delete('https://symfony-skeleton.q-tests.com/api/v2/books/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ]
        ]);
        dd($response);
        $data = json_decode($response->getBody(), true);
        if ($data) {
            redirect()->back();
        }
    }
}