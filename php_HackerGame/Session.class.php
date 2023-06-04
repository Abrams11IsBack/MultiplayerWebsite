<?php

class MySession {
    function __construct() {
        if (!isset($_SESSION))
            session_start();
    }

    // Probably stuff like login, logout needing database support
}
?>