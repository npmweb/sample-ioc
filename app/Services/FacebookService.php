<?php namespace App\Services;

class FacebookService implements SocialService {

    protected $fbThing1;
    protected $fbThing2;

    public function __construct( $fbThing1, $fbThing2 ) {
        $this->fbThing1 = $fbThing1;
        $this->fbThing2 = $fbThing2;
    }

    public function shareAboutBlogPost( $title ) {
        echo 'Posting to FB with things '.$this->fbThing1.", ".$this->fbThing2.' "New post: '.$title.'"';
    }

}