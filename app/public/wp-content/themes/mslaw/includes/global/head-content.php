<?php

add_action('wp_head', 'it9_mslaw_head_content');
function it9_mslaw_head_content()
{

?>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>
      <?php

      wp_title('|', true, 'right');
      bloginfo('name');

      ?>
   </title>
<?php

}

?>
