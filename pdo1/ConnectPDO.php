<?php 

class ConnectPDO {
    /* Properti adalah variabel didalam class */


    protected $host         = 'localhost',
              $dbname       = 'pengaduan_masyarakat',
              $username     = 'root',
              $password;


    /* method construct merupakan method yang pertamakali berjalan */
    public function __construct() {

        $dsn = "mysql:host=$this->host;dbname=$this->dbname";

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password);

            // if($this->pdo) {
            //     echo "berhasil Terhubung kedatabase $this->dbname";
            // }
        } catch (PDOException $e) {
            echo "terjadi kesalahan :" . $e->getMessage();
        }
    }          

}

$db = new ConnectPDO();
?>