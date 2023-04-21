<?php
if(!defined('ABSPATH')) exit;

$embed_video = get_field('single_midia_embed');

$embed_video = it9_mslaws_iframe_append_classes($embed_video, 'single-video-iframe');

if(empty($embed_video))
    return;
?>

<div class="pt-5 single-video-wrapper">
    <?php echo $embed_video; ?>
</div>