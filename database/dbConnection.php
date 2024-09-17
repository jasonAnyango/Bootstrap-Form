<?php

class dbConnection
{
    // Database connection variables
    private $connection;
    private $dbType;
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;

    // Constructor
    public function __construct($dbType, $dbHost ,$dbUser, $dbPass, $dbName)
    {
        $this->dbType = $dbType;
        $this->dbHost = $dbHost;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
        $this->dbName = $dbName;
        // Call the connection function -- Below
        $this->connection($dbType, $dbHost ,$dbUser, $dbPass, $dbName);
    }

    public function connection($dbType, $dbHost ,$dbUser, $dbPass, $dbName)
    {
        switch($dbType)
        {
            case "PDO":
                try
                {
                    // Create PDO object and assign it to the connection variable
                    $this->connection = new PDO("mysql:
                    host = $dbHost;
                    dbname = $dbName",
                    $dbUser,
                    $dbPass);

                    // Set the error mode to exception
                    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // Print success message
                    echo "Connected successfully 😁 <br>";
                }
                catch(PDOException $pdoError)
                {
                    // Print error message
                    echo "Connection Failed 😞: " . "<br>" . $pdoError->getMessage();
                }
                // Break the case
                break;

            case "MySQLi":
                // Create MySQLi object and assign it to the connection variable
                $this->connection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
                // Check if connection worked
                if($this->connection->connect_error)
                {
                    // Print error message.
                    echo "Connection Failed 😞: " . "<br>" .$this->connection->connect_error;
                }
                else
                {
                    // Print success message
                    echo "Connected successfully 😁";
                }
                // Break the case
                break;
        }
    }
}