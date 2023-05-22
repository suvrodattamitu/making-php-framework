<?php

//require "Database.php";
//require "Response.php";

//spl_autoload_register(function ($class) {
//    require base_path($class . ".php");
//});
//
//require "router.php";
//require "helpers.php";

//$config = require ("config.php");
//$db = new Database($config['database']);
//
//
//$id = $_GET['id'];

/*
http://demo.test/?id=1;%20drop%20table%20new_table; // Never use user input inline in query
$query = "select * from posts where id = $id"; //this is responsible for sql injection, for direct call to sql data..
$posts = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
*/

//$query = "select * from posts where id = ?";
//$posts = $db->query($query, [$id])->fetchAll(PDO::FETCH_ASSOC);
//
//foreach ($posts as $post) {
//    echo "<li>". $post['title'] . "</li>";
//}



