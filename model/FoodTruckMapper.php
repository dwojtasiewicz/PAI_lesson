<?php
/**
 * Created by PhpStorm.
 * User: Dominika W
 * Date: 2019-02-10
 * Time: 21:47
 */

class FoodTruckMapper extends Database
{
    private $database=null;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getFoodTruckName(string $pattern)
    {
        try {
            $pdo = $this->database->getConnection();
            $stmt = $pdo->prepare("SELECT foodtruck.id, foodtruck.name, foodtruck.cook_type, foodtruck.image, foodtruck.description, users.name
                                      FROM foodtruck, users where foodtruck.id_user =users.id and foodtruck.name LIKE '%{$pattern}%'");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount()) {
                $f = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $f;
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            exit();
        }
    }
    public function getFoodTrucks()
    {
        try {
            $pdo = $this->database->getConnection();
            $stmt = $pdo->prepare("SELECT * FROM foodtruck ;");
            $stmt->execute();

            $f = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $f;
        }
        catch (PDOException $e){
            echo 'Error: ' . $e->getMessage();
            exit();
        }
    }

    public function getFoodTruck(int $id)
    {
        try {
            $pdo = $this->database->getConnection();
            $stmt = $pdo->prepare("SELECT foodtruck.id, foodtruck.name, foodtruck.cook_type, foodtruck.image, foodtruck.description,users.name
                                  FROM foodtruck, users where foodtruck.id_user=users.id and foodtruck.id=:id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $bargain = $stmt->fetch(PDO::FETCH_ASSOC);
            return $bargain;
        }
        catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            exit();
        }
    }

    public function setFoodtruck(string $name, string $cook_type, string $image,string $description, int $id_user)
    {
        try {
            $pdo = $this->database->getConnection();
            $stmt = $pdo->prepare("INSERT INTO foodtruck (name,cook_type,image, description, id_user) VALUES (?,?,?,?,?)");
            $stmt->execute([$name, $cook_type, $image,$description, $id_user]);

            $s = $stmt->fetch(PDO::FETCH_ASSOC);
            return $s;
        }
        catch (PDOException $e){
            echo 'Error: ' . $e->getMessage();
            exit();
        }
    }

    public function removeFoodTruck(int $id)
    {
        try {
            $pdo = $this->database->getConnection();
            $stmt = $pdo->prepare("DELETE FROM foodtruck WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
        }
        catch (PDOException $e){
            echo 'Error: ' . $e->getMessage();
            exit();
        }
    }

}