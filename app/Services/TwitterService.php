<?php namespace App\Services;

class TwitterService {

    protected $apiKey;

    public function __construct( $apiKey ) {
        $this->apiKey = $apiKey;
    }

    public function tweetAboutBlogPost( $title ) {
        echo 'Tweeting with API key '.$this->apiKey.' "New post: '.$title.'"';
    }

}