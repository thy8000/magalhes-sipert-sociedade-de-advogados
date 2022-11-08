<?php
if (!defined('ABSPATH')) exit;
?>
<div class="post-share d-flex gap-3 pt-5">
    <li class="post-share-list">
        <button class="link" data-name="facebook" data-url="https://www.facebook.com/sharer/sharer.php?u={url}&quote={title}">
            <?php echo it9_mslaws_get_svg_icon('facebook.svg', 'icon') ?>
        </button>
    </li>
    <li class="post-share-list">
        <button class="link" data-name="linkedin" data-url="https://www.linkedin.com/shareArticle?mini=true&url={url}&title={title}">
            <?php echo it9_mslaws_get_svg_icon('linkedin.svg', 'icon') ?>
        </button>
    </li>
    <li class="post-share-list">
        <button class="link" data-name="whatsapp" data-url="https://wa.me/?text={title} {url}">
            <?php echo it9_mslaws_get_svg_icon('whatsapp.svg', 'icon') ?>
        </button>
    </li>
    <li class="post-share-list">
        <button class="link" data-name="twitter" data-url="https://twitter.com/intent/tweet?url={url}&text={title}">
            <?php echo it9_mslaws_get_svg_icon('twitter.svg', 'icon') ?>
        </button>
    </li>
    <li class="post-share-list">
        <button class="link" data-name="copylink">
            <?php echo it9_mslaws_get_svg_icon('share-link.svg', 'icon') ?>
        </button>
    </li>
    <div class="copylink-alert bg-one p-3 text-white translate-y-300">
        <span><?php echo esc_html__('Link copiado para a área de transferência', 'it9_mslaws'); ?></span>
    </div>
</div>