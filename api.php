<?php
include __DIR__ . '/database.php';


header('Content-Type: application/json ');



if ( !empty($genre) ) {
  $genre = $_GET['genre'];
  $categories = [];

  foreach ($database as $album) {
    if (strtolower($album['genre']) == strlower($genre)) {
      $categories[] = $album;
    }
  }

  $database = $categories;
}

$response_rest = [
  "success" => true,
  "response" => $database
];


echo json_encode($response_rest);
