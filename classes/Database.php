<?php

/**
 * Class Database
 */
Class Database
{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $db_name = DB_NAME;


    public $link;
    public $error;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->connectDB();
    }

    /**
     * @return bool
     */
    private function connectDB()
    {
        $this->link = new mysqli($this->host, $this->user, $this->pass,
            $this->db_name);
        if (!$this->link) {
            $this->error = "Connection fail" . $this->link->connect_error;
            return false;
        }
    }


    /**
     * Select or Read data
     * @param $query
     * @return bool
     */
    public function select($query)
    {
        $result = $this->link->query($query) or
        die($this->link->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Insert data
     * @param $query
     * @return bool
     */
    public function insert($query)
    {
        $insert_row = $this->link->query($query) or
        die($this->link->error . __LINE__);
        if ($insert_row) {
            return $insert_row;
        } else {
            return false;
        }
    }

    /**
     * Update data
     * @param $query
     * @return bool
     */
    public function update($query)
    {
        $update_row = $this->link->query($query) or
        die($this->link->error . __LINE__);
        if ($update_row) {
            return $update_row;
        } else {
            return false;
        }
    }

    /**
     * Delete data
     * @param $query
     * @return bool
     */
    public function delete($query)
    {
        $delete_row = $this->link->query($query) or
        die($this->link->error . __LINE__);
        if ($delete_row) {
            return $delete_row;
        } else {
            return false;
        }
    }

}