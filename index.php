<?php

use App\Http\Action;
use Framework\Http\Router\Exception\RequestNotMatchedException;
use Framework\Http\Router\RouteCollection;
use Framework\Http\Router\Router;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\ServerRequestFactory;


//require_once __DIR__ . "/../vendor/autoload.php";
require_once "vendor/autoload.php";

### Initialization
//require_once "../start.php";
require_once "start.php";

$routes = new RouteCollection();


$routes->get('home', '/', new Action\Home());

$routes->get('signin', '/signin', new Action\Authorization\SignIn());
$routes->post('authorization', '/authorization', new Action\Authorization\Authorization());
$routes->get('signup', '/signup', new Action\Registration\SignUp());
$routes->post('registration', '/registration', new Action\Registration\Registration());
$routes->get('fillFormMovie', '/fillFormMovie', new Action\Upload\FileForm());


$routes->post('upload', '/upload', new Action\Upload\UploadFile());

$routes->get('showMovie', '/showmovie', new Action\ShowMovie());

$routes->get('profile', '/profile', new Action\UserProfile\Profile());
$routes->get('editProfile', '/editProfile/{id}', new Action\UserProfile\EditProfile(), ['id' => '\d+']);
$routes->post('saveEeditProfile', '/saveEditProfile', new Action\UserProfile\SaveEditUser());

$routes->get('catalog', '/catalog', new Action\CatalogMovie());
$routes->get('price', '/price', new Action\PricingMovies());
$routes->get('help', '/help', new Action\HelpAction());
$routes->get('about', '/about', new Action\AboutUs());


//    $routes->get('showMovie','/movie/{id}', new Action\ShowMovie(),['id' => '\d+']);
//    $routes->get('downloadMovie','/download/{id}', new Action\DownloadMovie(),['id' => '\d+']);


$router = new Router($routes);

### Running

$request = ServerRequestFactory::fromGlobals();
try {
    $result = $router->match($request);
    foreach ($result->getAttributes() as $attribute => $value) {
        $request = $request->withAttribute($attribute, $value);
    }
    /** @var callable $action */
    $action = $result->getHandler();
    $response = $action($request);
} catch (RequestNotMatchedException $e) {
//    $response = new HtmlResponse('Undefined page', 404);
    include 'src/App/Views/404.php';
}


### Sending
$a = new \Framework\Http\ResponseSender();
$a->send($response);



