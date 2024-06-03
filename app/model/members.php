<?php
class Member {
    private $conn;
    private $table = 'membres';

    public $id;
    public $nom;
    public $description;
    public $image_default;
    public $image_hover;

    public function __construct() {
        $this->conn = getDatabaseConnection();
    }

    public function read() {
        $query = "SELECT id, nom, description, image_default, image_hover FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
