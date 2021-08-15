<?php


namespace App\Http\Action\Registration;

use App\Http\Action\Action;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;

class SignUp extends Action
{
    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {
        return $this->viewResponse('signup', ['aa' => '']);
    }

}