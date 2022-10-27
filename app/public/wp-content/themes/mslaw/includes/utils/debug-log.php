<?php
if (!defined('ABSPATH')) exit;

if (!function_exists('debug')) {
    function debug($log)
    {
        if (true === WP_DEBUG) {
            $backtrace = debug_backtrace();
            $caller = $backtrace[0]['file'] . ":" . $backtrace[0]['line'];
            error_log('Caller: ' . $caller);
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }
}
