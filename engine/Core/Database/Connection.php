<?php 

namespace Engine\Core\Database;

use \PDO;

use PDOException;
use Engine\Core\Config\Config;
class Connection {
    private $link;
/**
 * Undocumented function
 */
    public function __construct() {
        $this->connect();
    }
    /**
     * 
     */

    private function connect() {
        try {
        $config = Config::file('database');
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $this->link = new PDO ($config['driver'].":host=".$config['host'].";dbname=".$config['db_name'].";charset=".$config['charset'], $config['db_user'], $config['db_password'], $options);
        return $this;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    }
    /** */
/**
 * Undocumented function
 *
 * @param [type] $sql
 * @param array $values
 * @return void
 */
    public function execute($sql, $values = []) {
        $sth = $this->link->prepare($sql);
        
        return $sth->execute($values);
    }

    /**
     * Undocumented function
     *
     * @param [type] $sql
     * @param array $values
     * @return void
     */

    public function query($sql, $values = []) {
        $sth = $this->link->prepare($sql);

        $sth->execute($values);

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result === false) {
            return [];
        }

        return $result;
    }
    

   
}
    
?>