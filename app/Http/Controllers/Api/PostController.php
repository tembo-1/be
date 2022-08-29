<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Страница списка товаров';
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show($post)
    {
        return 'пост '.$post;
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function like()
    {

    }
}
