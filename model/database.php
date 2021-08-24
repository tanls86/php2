<?php 
class database
{
    public $host   = DB_HOST;
    public $user   = DB_USER;
    public $pass   = DB_PASS;
    public $dbname = DB_NAME;
    public  $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    public $conn;
    public $error;

    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {
        $dsn="mysql:host=$this->host;dbname=$this->dbname";
        $username=$this->user;
        $password=$this->pass;
        $options=$this->option;
        $this->conn = new PDO($dsn, $username, $password, $options);
       if(!$this->conn)
       {
           echo "connect fail !";
           return false;
       }
    }

    public  function pdo_execute($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn =$this->conn;
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
        }
        catch(PDOException $e){
            $e->getMessage();
            echo $e;
        }
        finally{
            unset($conn);
        }
       
    }

    function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn =$this->conn;
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }

}

function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn =$this->conn;
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn =$this->conn;
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }

}
    


    
}