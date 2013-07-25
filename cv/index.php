<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    if ($lang == 'fr') {
        $index = 'fr/';
    }
    else {
        $index = 'en/';
    }
    header("Location: $index", TRUE, 301);
?>

