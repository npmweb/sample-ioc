<?php namespace App\Services;

class TwitterService {

    protected $apiKey;

    public function __construct() {
        $this->apiKey = 'api-key-123';
    }

    public function tweetAboutBlogPost( $title ) {
        echo 'Tweeting with API key '.$this->apiKey.' "New post: '.$title.'"';
    }

}