<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    define('ROOT', dirname(__DIR__));
    const TEMPLATE = ROOT.'/'.'template';
    const URL_ROOT = '/';
    const IMG = URL_ROOT.'public/img/';
    define('IS_POST', $_SERVER['REQUEST_METHOD'] === 'POST');

