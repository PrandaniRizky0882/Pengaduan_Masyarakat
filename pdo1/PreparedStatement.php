<?php

class PreparedStatement {
    public function __construct()
    {
        $sql = "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES (?, ?, ?, ?, ?)";   
        $statement = $pdo->prepare($sql);
        $statement->execute(['Sandra', 'Aamodt']);


        $sql = "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES (:nik, :nama, :username, :password, :telp)";   
        $statement = $pdo->prepare($sql);
        $statement->execute([
            'nik'           =>  '1100011', 
            'nama'          =>  'Sandra',
            'username'      =>  'sandra',
            'password'      =>  'Sandra123',
            'telp'          =>  '08787788765',
        ]);


        $nik = $_POST['nik']; // 1000111000

        $sql = "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES ($nik, '$nama', '$username', '$password', '$telp')";   
        $statement = $pdo->prepare($sql);
        $statement->execute();
    }
}