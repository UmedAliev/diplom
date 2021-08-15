<?php


namespace App\Http\Action\Upload;

use App\Http\Action\Action;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;

class FileForm extends Action
{
    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {
        session_start();
      if ($_SESSION['user_id']){
          return $this->viewResponse('fillUploadForm', ['aa' => '']);
      }else{
          return $this->viewResponse('signin', ['aa' => '']);
      }

    }

}