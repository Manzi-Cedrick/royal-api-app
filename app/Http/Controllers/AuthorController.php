<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        // dd($data);
        return view('authors.index', [
            'data' => $items,
        ]);
        // return view('authors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
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
                // 'id' => $request
            ],
        ]);
        $data = json_decode($response->getBody(), true);
        $books = $data['books'];
        $first_name = $data['first_name'];
        // dd($first_name);
        // dd($data);
        return view('authors.books', [
            'title' => $first_name,
            'data' => $books
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
    }
}
