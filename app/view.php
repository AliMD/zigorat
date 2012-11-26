<?php

@file_exists("./pages/$template[page].php") or $template['page'] = '404';
$template['title'] = ucwords(str_replace(array('-','%20'), ' ', $template['page']));

// view template

inc($template['page'],'pages');