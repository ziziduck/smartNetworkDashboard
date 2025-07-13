<?php
require_once '../core/router.php';
$uri = $_SERVER['REQUEST_URI'];
router::route($uri);
