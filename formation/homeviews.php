<?php

require 'functions.php';
//require 'routes.php';
require 'sql.php';

$config = require('config.php');
$sql = new SQL($config('sql'));

$id = $_GET['id'];
$query = "select * from posts where id = {$id}";

dd($query);

$posts = $sql->query($query)->fetch();

dd($posts);