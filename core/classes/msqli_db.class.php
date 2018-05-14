<?php
namespace core\classes;
/*
|
|           ~Database class~
|   DO NOT change the defined vars!
*/

    class msqli_db()
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


    }
    
?>