<?php

class Model{

    protected $table='';
    protected $pk='';
    protected $connection ='';


    public function __construct()
    {
        $this->connection = new mysqli('localhost','root','','minisocialphp');

        
    }

    public function select($whereData=[],$single=false){
        // $query = "";
       
        $select_query = "SELECT * FROM {$this->table} ";
        if(count($whereData)){
            $select_query .=" WHERE";
            foreach ($whereData as $column => $value) {
                $select_query .=" {$column}='{$value}'AND ";
                
            }
            $select_query = trim($select_query,'AND ');
            
        }
        // return $select_query;
        $resutl = $this->connection->query($select_query);

        if($single){

            return $resutl->fetch_assoc();
           

        }
        else{
            
           return $resutl->fetch_all(MYSQLI_ASSOC);
            
        }


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
        // return $query;
        // var_dump($query);
        $this->connection->query($query);
        // return $this->connection->insert_id;

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
        // $this->connection->query($query);
    }


}










?>