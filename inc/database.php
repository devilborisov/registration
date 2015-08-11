<?php
class Data_Base{
    public  $dbconnect='';
    function __construct(){
        $dbname='registr';
        $dbhost='localhost';
        $dbusername='root';
        $dbpass='';
        $this->dbconnect=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

}