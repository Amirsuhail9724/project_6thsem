<?php
require("essentials.php");
session_start();
session_destroy();
redirection("index.php");
?>