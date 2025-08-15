<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';


// Connect to the database and execute a query to fetch posts



$db = new Database();
$posts = $db->query("SELECT * FROM posts where id= 1")->fetch(PDO::FETCH_ASSOC);

dd($posts['title']);

//
//foreach ($posts as $post) {
//    echo '<li>' . $post['title'] . '</li>';
//}

