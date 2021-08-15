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
//       session_destroy();
      $user =  User::where('email',$_POST['email'])->where('password', $_POST['password'])->first();
        if ($user){
            $_SESSION["user_id"] = $user->id;

//            return new HtmlResponse("<h1>you have email in system</h1>");
            header("Location: /");
        }
        else{
            return new HtmlResponse("<h1>sorry get out /h1>");
        }



    }




}