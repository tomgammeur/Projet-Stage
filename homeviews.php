<?php

require 'functions.php';
//require 'router.php';
require 'sql.php';


$table = new SQL();
$posts = $table->query("select $ from posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);