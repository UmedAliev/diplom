<?php


namespace App\Http\Action;


use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ServerRequestInterface;
use Rakit\Validation\Validator;

class Registration2 extends Action
{
    public function __invoke(ServerRequestInterface $request): HtmlResponse
    {
        $validator = new Validator();
        $validation = $validator->make($request->getParsedBody(),[

            'name' => 'required|min:6',
            'email'=> 'required|email',
            'password'=> 'required',

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
            echo "Success!";
        }


        User::create([
        'name' => $_POST['name'],
           'email'=>$_POST['email'],
           'password'=>$_POST['password'],

           ]);




        return new HtmlResponse("<h1>done</h1>");
    }


}