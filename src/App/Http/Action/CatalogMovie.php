<?php


namespace App\Http\Action;


use App\Models\Movie;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;


class CatalogMovie extends Action
{

    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {


        return $this->viewResponse('catalog', ['' => '']);
    }

}