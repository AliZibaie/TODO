<?php
namespace app\models;
class DataBase
{
    private static DataBase $DB ;
    public function connect()
    {
        try {
            $pdo =  new PDO('mysql:host=localhost;dbname=MVC',"root",'');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             return $pdo;
            echo 'connected to database successfully';
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function signUp(string $username, string $password)
    {
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        Application::getApp()->getRouter()->renderView('home',['username'=>$username, 'password'=>$password]);
        exit();
    }
    public function login(string $username, string $password)
    {
        $query = "SELECT *  FROM users ";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($users as $user){
            if ($user['username'] == $username && $user['password'] == $password ){
               Application::getApp()->getRouter()->renderView('home',['username'=>$username, 'password'=>$password]);
               exit();
            }
        }
    }

    /**
     * @return string
     */
    public static function getDB(): DataBase
    {
        return self::$DB;
    }

    /**
     * @param string $DB
     */
    public static function setDB(DataBase $DB): void
    {
        self::$DB = $DB;
    }

}