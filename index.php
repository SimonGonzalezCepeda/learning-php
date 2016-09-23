<?php

require "controllers/task.php";

require 'core/functions.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

$config = require 'core/config/database.php';

$message = require 'core/config/message.php';

///POJO o POPO
$task = new Task("Aprendre PHP", false);

require 'views/index-template.php';