<?php

class Base {
    // property to hold our data
    var $data = array();
    // property to hold errors
    var $errors = array();

    // table name this class works with
    var $tableName = null;
    // keyfield of the table
    var $keyField = null;
    // column names minus the keyword in the table
    var $columnNames = array();
    
    // property for holding a reference to a database connection so we can reuse it
    var $db = null;

    function __construct() {
        // create a connection to our database
        $this->db = new PDO('mysql:host=localhost;dbname=portfolioday_backend;charset=utf8', 
            'root', '');       
    }

    function specificColumns(array $columns) {
        $sqlStr = '';
        $count = 0;
        $length = count($columns);

        foreach($columns as $column) {
            if($count == $length - 1) {
                $sqlStr .= $column;
            } else {
                $sqlStr .= $column . ", ";
            }
            $count++;
        }

        return $sqlStr;
    }

    function loadBySpecific($column, $program, $specificColumns = null) {
        $dataArray = null;

        $select = (!is_null($specificColumns)) ? $this->specificColumns($specificColumns) : "*";

        $sql = "SELECT " . $select . " FROM " . $this->tableName . " WHERE " . $column . "=?";

        // load from database                
        $stmt = $this->db->prepare($sql);
        
        $stmt->execute(array($program));

        if ($stmt->rowCount() >= 1) {
            $dataArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $dataArray;
    }
}
?>