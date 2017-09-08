<?php

/**
 * Class Database
 */
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASS;
    private $database = DB_NAME;
    private $conn;

    function __construct()
    {
        $this->conn = $this->connectDB();
    }

    /**
     * @return mysqli
     */
    function connectDB()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $conn;
    }

    /**
     * Returns an associative array of strings representing the fetched row. NULL if there are no more rows in result-set
     * @param $query
     * @return array
     */
    function runQuery($query)
    {
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if (!empty($resultset))
            return $resultset;

    }

    /**
     * Returns the number of rows in the result set
     * @param $query
     * @return int
     */
    function numRows($query)
    {
        $result = mysqli_query($this->conn, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }


    // Select or Read data

    public function select($query)
    {
        $result = $this->conn->query($query) or die($this->conn->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }


    // Insert data
    public function insert($query)
    {
        $insert_row = $this->conn->query($query) or die($this->conn->error . __LINE__);
        if ($insert_row) {
            /*            header("Location: index.php?msg=" . urlencode('Data Inserted successfully.'));
                        exit();*/
            return $insert_row;
        } else {
            /*die("Error :(" . $this->link->errno . ")" . $this->link->error);*/
            return false;
        }
    }

    // Update data
    public function update($query)
    {
        $update_row = $this->conn->query($query) or die($this->conn->error . __LINE__);
        if ($update_row) {
            /*            header("Location: index.php?msg=" . urlencode('Data Updated successfully.'));
                        exit();*/
            return $update_row;
        } else {
            /* die("Error :(" . $this->link->errno . ")" . $this->link->error);*/
            return false;
        }
    }

    // Delete data
    public function delete($query)
    {
        $delete_row = $this->conn->query($query) or die($this->conn->error . __LINE__);
        if ($delete_row) {
            /*            header("Location: index.php?msg=" . urlencode('Data Deleted successfully.'));
                        exit();*/
            return $delete_row;
        } else {
            /* die("Error :(" . $this->link->errno . ")" . $this->link->error);*/
            return false;
        }
    }

}

