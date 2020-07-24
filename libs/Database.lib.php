<?php class Database{
    // PHP Data Object Arguments
    private $dbHost = DB_HOST;   // Database Host Name Variable.
    private $dbUser = DB_USER;   // Database Username Variable.
    private $dbPass = DB_PASS;   // Database Password Variable.
    private $dbName = DB_NAME;   // Database Name Variable.

    private $dbh;   // Database Handler Variable.
    private $err;   // Database Error Variable.
    private $stmt;  // Datebase Statement Variable.

    public function __construct()
    {   // constructor.
        $dsn = 'mysql:host=' .$this->dbHost.
                ';dbname=' .$this->dbName;                  // Set Data Source Name.

        $opts = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );                                                  // Set Options

        try {                                               // PHP Data Objects Instance.
            $this->dbh = new PDO(
                $dsn,
                $this->dbUser,
                $this->dbPass,
                $opts
            );
        } catch (PDOException $e) {
            $this->err = $e->getMessage();                  // PHP Error Exception.
        }
    }
    
    public function query($qury){                           // Query Statement Method.
        $this->stmt = $this->dbh->prepare($qury);
    }

    public function bind($param, $value, $type = null){     // Parameter Bind Method.
        if (is_null($type)) {
            switch (true) {
                case is_int ($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool ($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null ($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute(){                              // Statement Execute Method.
        return $this->stmt->execute();
    }

    public function resultSet(){                            // Statement Fetch All Method.
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function singleResult(){                         // Statement Fetch Method.
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
}