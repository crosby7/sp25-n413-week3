<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psychic Detective</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Events</a></li>
            </ul>
        </nav>
        <div>
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
            <p>Last post on <?= get_lastpostdate('blog') ?></p>
        </div>
    </header>
    <main>
    <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    echo '<div>';
                    the_title('<h2>', '</h2>');
                    echo '<h4>By ' . get_the_author() . ' on ' . get_the_date() . '</h4>';
                    the_content();
                    echo '</div>';
                endwhile;
            else :
                echo '<p>No content found.</p>';
            endif;

            ?>
    </main>
    <?php wp_footer(); ?>
</body>

</html>