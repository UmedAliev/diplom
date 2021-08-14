<?php


namespace App\Http\Action\Authorization;

use App\Http\Action\Action;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;

class Signin extends Action
{
    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {
        return $this->viewResponse('signin', ['aa' => '']);
    }

}