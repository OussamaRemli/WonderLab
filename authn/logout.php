<?php
define('ROOT_URL','http://localhost/wonderlab-master/');
session_destroy();
header('location: ' . ROOT_URL);
die();
