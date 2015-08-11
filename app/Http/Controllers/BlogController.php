<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\TwitterService;

class BlogController extends Controller
{

    public function store()
    {
        $twitterService = new TwitterService;
        $twitterService->tweetAboutBlogPost('My Blog Post');
    }

}
