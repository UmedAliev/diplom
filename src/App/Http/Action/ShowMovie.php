<?php


namespace App\Http\Action;


use App\Models\Movie;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;


class ShowMovie extends Action
{

    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {
        $id = $_GET['id'];


//        $id = $request->getAttribute('id');
//        $movie = Movie::find($id);

        $movie = Movie::find($id);

        return $this->viewResponse('details', ['movie' => $movie]);
    }

}