<?php
namespace Models;

use \core\classes\msqli_db as db;

class articlesmodel extends db
{
    public function __construct()
    {
        $this->db = new db();
    }

    public function getAllArticles()
    {
        return $this->db->querydb('SELECT * from `articles`');
    }
}
?>