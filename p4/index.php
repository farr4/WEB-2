<?php
require_once("function/callpage.php");
callpage("header");
if (isset($_GET['page'])) {
callpage("navbar");
    callpage($_GET['page']);
}
callpage("footer");

?>