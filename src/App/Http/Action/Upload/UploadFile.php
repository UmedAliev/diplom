<?php


namespace App\Http\Action\Upload;

use App\Models\Movie;
use App\Http\Action\Action;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Laminas\Diactoros\Request;
use Laminas\Diactoros\Response\HtmlResponse;
use mysql_xdevapi\Exception;
use Psr\Http\Message\ServerRequestInterface;
use Rakit\Validation\Validator;

class UploadFile extends Action
{
    public function __invoke(ServerRequestInterface $request)
    {

        $validator = new Validator;
        $validation = $validator->make( $_POST + $_FILES,[
            'title' =>'required',
            'description' =>'required',
            'movie_img'=>'required|uploaded_file:0,15000000,png,jpg,jpeg',
            'movie'=>'required|uploaded_file:0,5000M,mp4',
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

            $title = $_POST['title'];
            $description = $_POST['description'];

            $img_target_dir = "src/App/Uploads/IMG/";
            $imgFile = $_FILES['movie_img'];
            $imgFileName = basename($imgFile["name"]);
            $imgSeparate = explode('.',$imgFileName);
            $imgName = md5(rand().$imgSeparate[0]);
            $imgExtension = $imgSeparate[1];
            $imgTargetFile = $img_target_dir.$imgName.".".$imgExtension;
            $imgTmpNname = $imgFile['tmp_name'];


            #movie
            $movie_target_dir = "src/App/Uploads/MOVIES/";
            $movieFile = $_FILES['movie'];
            $movieFileName = basename($movieFile["name"]);
            $movieSeparate = explode('.',$movieFileName);
            $movieName = md5(rand().$movieSeparate[0]);
            $movieExtension = $movieSeparate[1];
            $movieTargetFile = $movie_target_dir.$movieName.".". $movieExtension;
            $movieTmpName = $movieFile['tmp_name'];

            move_uploaded_file($imgTmpNname, $imgTargetFile);
            move_uploaded_file($movieTmpName,$movieTargetFile);
            echo "Success!";
        }

            // make it
        if ($_POST['upload']=='') {

                try {

                        Movie::create(
                            [
                                "title" => $title,
                                "description" => json_decode("{'description':{$description})}"),
                                "main_picture" => $imgTargetFile,
                                "media" => "sfdgffds",
                                "media_path" => $movieTargetFile,
                                "created_by_id" => 1,
                                "updated_by_id" => 1,
                                "created_at" => time(),
                                "category_id"=>1,

                            ]
                        );


                }catch (Exception $e){
                echo $e->getMessage();
                }


        }



         return $this->viewResponse('fillUploadForm', ['aa' => '']);
    }

}