<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Service\TweetService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\View\Factory;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Factory $factory, TweetService $tweetService)
    {
        // return view('tweet.index', ['name' => 'laravel']);

        // return View::make('tweet.index', ['name' => 'laravel']);

        // return $factory->make('tweet.index', ['name' => 'laravel']);

        // return view('tweet.index')
        //         ->with('name' ,'laravel')
        //         ->with('version' ,8);

        // $tweets = Tweet::all();
        // $tweets = Tweet::orderBy('created_at', 'DESC')->get();

        // $tweetService = new TweetService();
        $tweets = $tweetService->getTweets();

        // dd($tweets);
        // return view('tweet.index')
        //         ->with('name', 'Laravel')
        //         ->with('version', 8);

        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
