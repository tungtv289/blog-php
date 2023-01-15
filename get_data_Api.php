<?php

$payload= json_encode([
       "body"       =>    "update title",
       "title"         =>     "hello world"

]);
$option = [ 
        "http"         => [
        "method" =>"PATCH",
        "header"  =>"Content-type: application/json; charset=UTF-8",
        "content"  =>$payload
      ]
      ];
$context =  stream_context_create($option);
$data = file_get_contents('https://jsonplaceholder.typicode.com/posts/1',false,$context);
// $test = file_get_contents('https://jsonplaceholder.typicode.com/posts');
var_dump($data);
// var_dump(gettype($option));
// echo ($test);
// print_r($http_response_header);
?>
