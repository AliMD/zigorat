<?php

$sitedown = true;

session_start();

isset($_GET['debug']) and $_SESSION['debug']=$_GET['debug'];

$page = ($sitedown && !$_SESSION['debug']) ? 'underdev' : (isset($_GET[page]) ? $_GET[page] : 'home');

@file_exists("./$page.php") or $page='err/index';

@include "./$page.php";
