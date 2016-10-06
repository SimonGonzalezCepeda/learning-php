<?php

require "../controllers/task.php";

require '../core/database/Connection.php';

require '../core/database/QueryBuilder.php';


$config = require '../core/config/database.php';

$message = require '../core/config/message.php';

$pdo = Connection::make($config, $message);

require '../views/home.php';