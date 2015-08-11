<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\SocialService;

class BlogController extends Controller
{

    protected $twitterService;

    public function __construct( SocialService $socialService) {
        $this->socialService = $socialService;
    }

    public function store()
    {
        $this->socialService->shareAboutBlogPost('My Blog Post');
    }

}
