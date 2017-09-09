<?php

class Db {

    protected static $connection;

    public function connect() {
        if (!isset(self::$connection)) {
            #$config = parse_ini_file('/Users/nigelkoli/Desktop');
            #self::$connection = new mysqli('localhost', $config['name'], $config['password'], $config['dbname']);

            self::$connection = new mysqli('localhost', 'root', '', 'BEProject');

            if(!self::$connection)
            {
                echo "Error in obtaining connection";
            }
            return self::$connection;
        }

        if (self::$connection === false) {
            echo self::$connection->error;
            return false;
        }

        return self::$connection;
    }

}

?>