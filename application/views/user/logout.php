<?php
require_once '../../configs/core/init.php';

$user = new User();
$user->logout();
redirect::to('../index.php');