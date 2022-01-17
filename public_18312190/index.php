<?php
if (!session_id()) {
    session_start();
}
require_once "../app_18312190/init.php";

$app = new App;
