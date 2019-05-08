<?php 
class DBconnector{
    var $servername = "ec2-54-225-76-136.compute-1.amazonaws.com";
    var $username = "dmaxqikrlsmzpm";
    var $password = "0d7bc65d413fbbcd8d3b9ecd389a711d8e4a0f7c6891f4c2c21a40f15ba23632";
    var $dbname = "d9tgn0udurm769";
    var $port = "5432";
    var $conn;
           public function runQuery($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //doc het cau truy van, tra ve mot mang
            $rows = pg_fetch_all($result);
            //dong ket noi   
            $conn=pg_close($conn);
            return $rows;     
           }
           public function execStatement($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //dong ket noi   
            $conn=pg_close($conn);
            return $result;   
           }
} ?>