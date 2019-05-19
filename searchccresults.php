<?php

require_once 'db_connect.php';

if(isset($_GET['searchval'])){
    echo $keywords = $_GET['searchval'];
}


?>