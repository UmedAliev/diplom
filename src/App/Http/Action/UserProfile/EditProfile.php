<?php


namespace App\Http\Action\UserProfile;


use App\Http\Action\Action;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;

class EditProfile extends Action
{
    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {

        $userId = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $user = User::find($userId);

        return $this->viewResponse('editProfile', ['user' => $user]);
    }

}