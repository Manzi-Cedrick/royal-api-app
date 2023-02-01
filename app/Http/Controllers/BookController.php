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
        $token = Session::get('token_key');
        $client = new Client();
        $number_of_pages = intval(request()->input('page'));
        $response = $client->post('https://symfony-skeleton.q-tests.com/api/v2/books', [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
            ],
            'form_params' => [
                'author' => [
                    'id' => intval(request()->input('author'))
                ],
                'title' => $request->input('title'),
                'realease_date' => $request->input('realease_date'),
                'description' => $request->input('description'),
                'isbn' => $request->input('isbn'),
                'format' => $request->input('format'),
                'number_of_pages' => intval(request()->input('page'))
            ]   
        ]);
        $data = json_decode($response->getBody(), true);
        if ($data) {
            Session::flash('success', 'Success: Done');
            return redirect('/books');
        }else {
            Session::flash('Error','Error occured');
            return redirect()->back()->withInput();
        }
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
        $data = json_decode($response->getBody(), true);
        if ($data) {
            redirect()->back();
        }
    }
}