<?php
if(!defined('ABSPATH')) exit;

function it9_mslaws_iframe_append_classes($iframe, string $iframe_classes){
    $iframe = str_replace('<iframe', '<iframe class="' . $iframe_classes . '"', $iframe);

    return $iframe;
}