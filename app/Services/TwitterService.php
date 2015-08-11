<?php namespace App\Services;

class TwitterService implements SocialService {

    protected $apiKey;

    public function __construct( $apiKey ) {
        $this->apiKey = $apiKey;
    }

    public function shareAboutBlogPost( $title ) {
        echo 'Tweeting with API key '.$this->apiKey.' "New post: '.$title.'"';
    }

}