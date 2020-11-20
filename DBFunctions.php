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
            $this->conn->query("SELECT * FROM db");
 
            }
        catch(PDOException $e)
            {
            echo "------0------" . $e->getMessage();
            
            }
           
    }
    }
    

?>