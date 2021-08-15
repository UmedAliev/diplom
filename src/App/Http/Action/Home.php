<?php


namespace App\Http\Action;


use App\Models\Movie;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;

class Home extends Action
{
    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {
        $newItemSeason = Movie::orderBy('created_at','desc')->limit(2)->get();

        $movies = [
            'newItemSeason'=>$newItemSeason
        ];

         return $this->viewResponse('index', ['movies' => $movies]);
    }

}