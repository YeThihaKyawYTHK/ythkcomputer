 <?php
 class Database{
    public $conn="";
    public function __construct()
    {
        $this->conn=mysqli_connect("localhost","root","","ythkcomputer");
    }
 }
 new Database;

 ?>