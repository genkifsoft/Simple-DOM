<?php

class Database {
    private $DBHOST;
    private $USERNAME;
    private $PASSWORD;
    private $DATABASE;
    private $CONN;

    function __construct($dbhost = "localhost", $username = "root", $password = "", $database = "tintuc") {
        $this->CONN = mysqli_connect(
            $this->DBHOST   = $dbhost,
            $this->USERNAME = $username,
            $this->PASSWORD = $password,
            $this->DATABASE = $database
        );
        // check connect. if success return TCP/IP
        if (!$this->CONN) {
            die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
        }
        echo 'Success... ' . mysqli_get_host_info($this->CONN) . "\n";
        mysqli_set_charset($this->CONN, "utf8");
    }

    function __destruct() {
        mysqli_close($this->CONN);
    }
}