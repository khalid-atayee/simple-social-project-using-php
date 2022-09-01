<?php

class Model{

    protected $table='users';
    protected $pk='id';
    protected $connection ='';


    public function __construct()
    {
        $this->connection = new mysqli('localhost','root','','socialminiphpproject');

        
    }
    public function select(){
        $query = "SELECT * FROM {$this->table}";
        $resutl = $this->connection->query($query);
        $data = $resutl->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

    
    public function insert($data){
        $column_string = "";
        $column_values = "";
        foreach ($data as $column => $value) {
            $column_string .="{$column}, ";
            $column_values.="'$value', ";
        }
        $column_string=trim($column_string,', ');
        $column_values =trim($column_values,", ");
   
        $query = "INSERT INTO {$this->table} ($column_string) VALUES ($column_values)" ;
        $this->connection->query($query);

    }

    public function delete($id){
        $query = "DELETE FROM {$this->table} WHERE {$this->pk}={$id}";
        // return $query;
        $this->connection->query($query);
    }

    public function update($data,$id){
        $update_column='';
        foreach ($data as $column => $value) {
            $update_column.="{$column}='$value', ";
        }
        $update_column = trim($update_column,', ');

        $query  = "UPDATE {$this->table} SET $update_column WHERE {$this->pk}={$id}";
        return $query;
    }


}










?>