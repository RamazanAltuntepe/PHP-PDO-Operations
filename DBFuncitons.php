<?php  
class DBConnect
{
    public function Connect()
    {
        $serv="localhost";
        $dbName="mydatabase";
        $username="root";
        $passwrd="";
        try {
            $conn = new PDO("mysql:host=$serv;dbname=mydatabase;charset=utf8", $username, $passwrd);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Bağlantı başarılı"; 
            }
        catch(PDOException $e)
            {
            echo "Bağlantı Başarısız.Veritabanı İsmini, kullanıcı adınızı veya şifresini kontrol ediniz." . $e->getMessage();
            
            }
           
    }
    
}
class DBRepositoryFuncs
    {
     public function GetData($table)
     {
      $dbconnect = new DBConnect;
        $dbconnect->Connect();
        try
        {
            $sqlquery = $dbconnect->Connect->query("SELECT * FROM $table");
            $result = $sqlquery->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $ex)
        {
            echo "veri getirme işlemi yapılamadı." . $ex->getMessage();
        }
     }   
    }

?>