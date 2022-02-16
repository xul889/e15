<?php
session_start();
$string = $_SESSION['string'];
$result = $_SESSION['result'];
$count = $_SESSION['count'];
$_SESSION['string'] = null;
$_SESSION['result'] = null;
$_SESSION['count'] = null;

require 'done-view.php';