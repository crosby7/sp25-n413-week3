<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burrito Mania</title>
    <link rel="stylesheet" href="style.css" />
    <?php wp_head(); ?>
</head>

<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>Locations</li>
            <li>Menu</li>
        </ul>
    </nav>

    <h1>Burrito Mania</h1>

    <?php

    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title("<h4>", "</h4>");
    ?>
            <p>By: <?php the_author();
            echo "</p>";            
            the_content();
        endwhile;   
    endif;

    wp_footer();
    ?>

</body>

</html>