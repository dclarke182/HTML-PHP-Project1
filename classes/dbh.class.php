<?php

class Dbh {
    private $host = "46.22.136.30";
    private $user = "cs4125usr";
    private $pwd = "sec_dev_ul21$";
    private $dbName = "cs4125db";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}