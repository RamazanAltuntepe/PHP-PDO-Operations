<?php 
class DBRepositoryFuncs
    {
        public $DSN="mysql:host=localhost;dbname=mysql";
        public $user="root";
        public $password="";
    public function Connect()
    {
        
        try {
            $this->conn = new PDO($this->DSN, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "------1------";
            
 
            }
        catch(PDOException $e)
            {
            echo "------0------" . $e->getMessage();            
            }   
    }  
    public function GetData($table,$where="",$whereValue="")
    {  
        try
        {
            if($where==null)
            {
                $this->conn->query("SELECT * FROM $table");
            }
            else
            {
                $this->conn->query("SELECT * FROM $table WHERE $where $whereValue");
            }
            
            
            echo("veri getirme işlemi başarılı.");
        }
        catch(PDOException $e)
        {
            echo "veri getirilemedi" . $e->getMessage();
        }
    }
    }
    

?>