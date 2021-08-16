<?php


namespace App\Http\Action\UserProfile;

use App\Http\Action\Action;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;
use Rakit\Validation\Validator;

class SaveEditUser extends Action
{
    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {
        $validator = new Validator();
        $validation = $validator->make($request->getParsedBody(), [

            'name' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required',

        ]);

        $validation->validate();

        if ($validation->fails()) {
            // handling errors
            $errors = $validation->errors();
            echo "<pre>";
            print_r($errors->firstOfAll());
            echo "</pre>";
            exit;
        } else {
            // validation passes
//            echo "Success!";
        }


        $userid = $request->getParsedBody()['id'];
        $user = User::find($userid);

        $user->update([
            'name' => htmlspecialchars($request->getParsedBody()['name']),
            'email' => htmlspecialchars($request->getParsedBody()['email']),
            'password' => md5(htmlspecialchars($request->getParsedBody()['password'])),

        ]);


        return new HtmlResponse("<h1>done</h1>");
    }


}