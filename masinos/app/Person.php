<?php
 
namespace App;
 
/**
 * Person implementation
 */
class Person {
 
    /**
     * PDO object
     * @var \PDO
     */
    private $pdo;
 
    /**
     * connect to the database
     */
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
 
    /**
     * get the table list in the database
     */
    public function getTableList() {
 
        $stmt = $this->pdo->query("SELECT date, model, collor
                                   FROM car
                                   ORDER BY date, model, collor");
        $tables = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $tables[] = $row;
        }
 
        return $tables;
    }
 
}