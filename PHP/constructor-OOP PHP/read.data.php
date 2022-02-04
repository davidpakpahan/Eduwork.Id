<?php
include ('conn.db.php');

class Read extends Koneksi
    {
        function __construct()
            {
                parent::__construct();            
            }
            
        public function getAll($table)
            {
                $query     = "SELECT * FROM $table";
                $query_run = $this->conn->query($query);

                if(!$query_run)
                {
                    return "Terjadi kesalahan!";
                }
                $rows = array();
                while ($row = $query_run->fetch_assoc())
                    {
                        $rows[] = $row;
                    }
                    return $rows;
            }
    }
?>
