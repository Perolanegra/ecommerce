<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);

#Session Starts
// session_start();

// $client_id = '0oam4leh2yhQcgO6q356';
// $client_secret = 'zR-dLFu6wjK1SArCFk0_tPw7HpLlulcKpgBTL4Ce';
// $redirect_uri = 'http://localhost:8000/';


// $metadata_url = 'https://dev-126999.okta.com/oauth2/default/.well-known/oauth-authorization-server';

// // Fetch the authorization server metadata which contains a few URLs
// // that we need later, such as the authorization and token endpoints
// $metadata = http($metadata_url);

// function http($url, $params=false) {
//     $ch = curl_init($url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     if($params)
//       curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
//     return json_decode(curl_exec($ch));
//   }

// // If there is a username, they are logged in, and we'll show the logged-in view
// if(isset($_SESSION['username'])) {
//   echo '<p>Logged in as</p>';
//   echo '<p>' . $_SESSION['username'] . '</p>';
//   echo '<p><a href="/?logout">Log Out</a></p>';
//   die();
// }

// // If there is no username, they are logged out, so show them the login link
// if(!isset($_SESSION['username'])) {
//   $authorize_url = 'TODO';
//   echo '<p>Not logged in</p>';
//   echo '<p><a href="'.$authorize_url.'">Log In</a></p>';
// }
