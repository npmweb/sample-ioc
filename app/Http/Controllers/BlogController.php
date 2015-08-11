<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\TwitterService;

class BlogController extends Controller
{

    protected $twitterService;

    public function __construct( TwitterService $twitterService) {
        $this->twitterService = $twitterService;
    }

    public function store()
    {
        $this->twitterService->tweetAboutBlogPost('My Blog Post');
    }

}
