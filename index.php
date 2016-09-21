<?php

require "task.php";

require 'functions.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';

$config = require 'config/database.php';

$message = require 'config/message.php';

///POJO o POPO
$task = new Task("Aprendre PHP", false);

require 'index-template.php';