<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <header>
    <?php
    if (has_nav_menu( 'primary' )) {
        wp_nav_menu( array(
            'theme_location'  => 'primary'
        ) );
    }
    get_search_form();
    ?>
    </header>
