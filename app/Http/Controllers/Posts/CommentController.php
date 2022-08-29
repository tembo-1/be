<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        return 'index';
    }

    public function create()
    {
        return 'index';
    }

    public function store(Request $request)
    {
        return 'index';
    }

    public function show($id)
    {
        return 'index';
    }

    public function edit($post, $comment)
    {
        return 'Edit ' . $comment . 'post'. $post;
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
