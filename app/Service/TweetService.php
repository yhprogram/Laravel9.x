<?php
namespace App\Service;

use App\Models\Tweet;

class TweetService
{
    public function getTweets(){
        return $tweets = Tweet::orderBy('created_at', 'DESC')->get();
    }
}
