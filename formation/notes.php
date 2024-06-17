<?php

require "sql.php";
$heading = "Notes";
$sql = new SQL($config['SQL']);

$notes = [];

$dd($sql);

require "notes.view.php";