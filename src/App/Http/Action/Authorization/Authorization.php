<?php


namespace App\Http\Action\Authorization;

use App\Http\Action\Action;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;

class Authorization extends Action
{
    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {

        session_start();

      $user =  User::where('email',$request->getParsedBody()['email'])->where('password', md5($request->getParsedBody()['password']))->first();
        if ($user){
            $_SESSION["user_id"] = $user->id;

//            return new HtmlResponse("<h1>you have email in system</h1>");
            header("Location: /");
        }
        else{
            return new HtmlResponse("<h1>шумо дар система кайд надоред");
        }



    }




}