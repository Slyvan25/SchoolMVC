<?php
namespace core\classes;
/*
|
|           ~Database class~
|   DO NOT change the defined vars!
*/

    class msqli_db
    {
        public $conn;
        public $num_row;

        public function __construct()
        {
            $this->host = SITE_CONF['host'];
            $this->user = SITE_CONF['user'];
            $this->password = SITE_CONF['password'];
            $this->database = SITE_CONF['database'];
        }

        public function connect($host=null, $user=null, $password=null, $database=null)
        {
            if($host != null)
            {
                $this->host = $host;
                $this->user = $user;
                $this->password = $password;
                $this->database = $database;
            }
            $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);

            if($this->conn->connect_error)
            {
                die("Connection failed: ". $this->conn->connect_error);
            }
        }

        public function querydb($sql, $object = false)
        {
            $q = mysqli_real_escapestring($this->conn, $sql);
            $result = $this->conn->query($q);

            if(is_bool($result))
            {
                return $result;
            }

            $this->num_rows = $result->num_rows;
            $collection = [];
            if($this->num_rows > 0)
            {
                $i = 0;
                while($data = $result->fetch_assoc())
                {
                    foreach ($data as $key => $value) {
                        $collection[$i][$key] = $value;
                    }
                    $i++;
                }
            if ($object) {
                return (object) $collection;
            }
                return $collection;
            }
        return null;
        }
    }
    
?>