<?php
// include 'Model.php';
class Post extends Model{
    protected $table  = 'posts';
    protected $pk = 'id';

    public function get_data_with_users(){
        $query = "SELECT * FROM posts JOIN users on posts.user_id=users.id";
        $result=$this->connection->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function get_single_user_data(){
        $query = "SELECT * FROM posts WHERE user_id ={$_SESSION['user']['id']}";
        $result = $this->connection->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
        // return $query;
    }

    
   
    
}

?>