## Week 2 (3)

### Recap

#### Custom Themes

* Index.php
  * Fallback page
  * Use the_title, the_author, the_content, etc.
* functions.php
  * Use to enqueue styles and more
* style.css
  * Styles for the theme
* screenshot.png
  * Enables the photo preview in the theme library

---

#### Child Themes

* style.css
  * Add template folder name to metadata
  * Add new styles to apply on top of parent styles
* functions.php
  * Enqueue parent styles

  ```php
  function my_child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
 }
 add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');
```
