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
    public function GetData()
    {  
        try
        {
            $this->conn->query("SELECT * FROM db");
            echo("veri getirme işlemi başarılı.");
        }
        catch(PDOException $e)
        {
            echo "veri getirilemedi" . $e->getMessage();
        }
    }
    }
    

?>