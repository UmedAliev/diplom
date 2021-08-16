<?php


namespace App\Http\Action\UserProfile;


use App\Http\Action\Action;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;

class Profile extends Action
{
    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {
        session_start();
        $id = $_SESSION['user_id'];
        $user = User::find($id);


        return $this->viewResponse('profile', ['user' => $user]);
    }

}