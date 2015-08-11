<?php namespace App\Services;

class TwitterService {

    public function tweetAboutBlogPost( $title ) {
        echo 'Tweeting "New post: '.$title.'"';
    }

}