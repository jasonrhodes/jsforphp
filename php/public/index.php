<?php

require "../vendor/autoload.php";

$fs = new MyApp\FileSystem();
$app = new Slim\Slim();

$app->get("/", function () {

  echo "hello world";

});

$app->get("/tweets(/:id)", function ($id = null) use ($app, $fs) {

  $app->response->header("Content-type", "application/json");

  $contents = $fs->readFile("../data/tweets.json");

  if (is_null($id)) {
    echo $contents;
    return;
  }

  $tweets = json_decode($contents);

  $tweet = new MyApp\Tweet();
  $tweet->ID = $id;
  $tweet->content = $tweets->$id->content;
  $tweet->username = $tweets->$id->username;
  echo $tweet->getJSON();

});

$app->run();