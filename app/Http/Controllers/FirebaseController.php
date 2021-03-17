<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    // protected $database;

    // public function __construct()
    // {
    //     $this->database = app('firebase.database');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
        // ->withServiceAccount($serviceAccount)
        ->withServiceAccount(__DIR__.'/FirebaseKey.json')
        // ->withDatabaseUri('https://laravel-firebase-9b32e.firebaseio.com/')
        ->withDatabaseUri('https://laravel-firebase-9b32e.firebaseio.com/');
        // ->withDatabaseUri('https://laravel-firebase-9b32e-default-rtdb.firebaseio.com/')
        // ->create();

        // $database = $firebase->getDatabase();
        $database = $firebase->createDatabase();

        // $newPost = $database
        $createPost    =   $database
        ->getReference('blog/posts')
        ->push([
        'title' => 'Laravel FireBase Tutorial' ,
        // 'category' => 'Laravel'
        'body'  =>  'This is really a cool database that is managed in real time.'
        ]);
        echo '<pre>';
        // print_r($newPost->getvalue());
        print_r($createPost->getvalue());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
