<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style>
    body {
        background: #2b2b31;;
    }

    .container {
        #28282d;
    }

    main {
        background-color: #28282d;
        -webkit-box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);
        box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);

        align-items: center;
        padding: 20px 20px;
        color: #AAAAAA;
    }

    input, textarea {
        background-color: #5c636a;
    }
</style>

<main class="container mt-6">
    <div class="row justify-content-center fix-center">
        <div class="col-md-8">
            <form action="/upload" method="post" enctype="multipart/form-data">

                <div class="form-group" class="sign__group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" style="background-color:#2b2b31; color: #AAAAAA" name="title"
                           class="form-control" id="exampleFormControlInput1" placeholder="Title">
                </div>

                <div class="form-group" class="sign__group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" style="background-color:#2b2b31; color: #AAAAAA" name="description"
                              id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group" class="sign__group">
                    <label for="exampleFormControlFile1">picture</label>
                    <input type="file" name="movie_img" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group" class="sign__group">
                    <label for="exampleFormControlFile1">Movie</label>
                    <input type="file" name="movie" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button type="submit" name="upload">submit</button>

            </form>
        </div>
    </div>
</main>

</body>
</html>