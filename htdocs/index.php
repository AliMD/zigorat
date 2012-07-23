<?php

$page =isset($_GET[page])?$_GET[page]:'home';

@file_exists("./$page.php") or $page='err/index';

@include "./$page.php";
