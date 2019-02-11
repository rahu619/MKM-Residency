<?php
class dbhandler
{
    public $mysqli;

    const SERVER = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DB = "mkm";

    public $dsn = "mysql:host=" . self::SERVER . ";dbname=" . self::DB . ";charset=utf8mb4";
    public $options = [
        PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
    ];

    private $pdo;

    public function __construct()
    {
        // $this->mysqli=new PDO(self::SERVER, self::USERNAME, self::PASSWORD, self::DB);

        try {
            $this->pdo = new PDO($this->dsn, self::USERNAME, self::PASSWORD, $this->options);
        } catch (Exception $e) {
            error_log($e->getMessage());
            exit('Connection Failed');
        }

    }

    // public function insertAdmin()
    // {
    //     $user = "admin";
    //     $hash = password_hash("admin", PASSWORD_DEFAULT);

    //     $query = "INSERT INTO users(userID, firstname,lastname,email,phone,username,password,is_admin,is_disabled, created_on) VALUES (?,?,?,?,?,?,?,?,?,?)";

    //     $stmt = $this->pdo->prepare($query);
    //     $stmt->execute([1, 'admin', '', '', '', 'admin', $hash, 1, 0, '2019-02-02 00:00:00']);

    // }

    public function ifUserExists($user, $pwd)
    {
        $query = "select * from users where username=?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$user]);
        $row = $stmt->fetch();

        if (password_verify($pwd, $row['password'])) {
            return $row['userID'];
        } else {
            return;
        }

    }

//closing connection
    public function __destruct()
    {
        // $this->mysqli.close();
        //$this->con.close();

    }

}
