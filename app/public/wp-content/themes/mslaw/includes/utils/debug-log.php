<?php
if (!defined('ABSPATH')) exit;

if (!function_exists('debug')) {
    function debug($log)
    {
        if (is_array($msg) || is_object($msg)) {
            error_log(print_r($msg, true));
        } else {
            error_log($msg);
        }
    }
}
