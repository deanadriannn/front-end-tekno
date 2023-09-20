<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postModel;
    public function __construct() {
        $this->postModel = new PostModel;
    }
}
