<?php

    $country = $_POST['country'];
    # $city = $_POST['city'];
    # $population = $_POST['population'];
    
    echo $country;
    

    function getServerSetting($connection, $table, $setting)
    {
        // Will only work for single attribute, not SELECT *
        $setting = $connection->query("SELECT $setting FROM $table");
        foreach($setting as $result)
        {
            return $result[0];
        }
    }
    
    function sqlConnect($server, $db, $user, $pass)
    {
        if(!isset($pass))
        {
            $pass="";
        }
        try
        {
            return new PDO("mysql:dbname=$db;host=$server", 
                            $user, $pass
                           );
        }
        catch (PDOException $e)
        {
            echo 'Connection failed: ' . $e->getMessage();
        }    
    }
?>