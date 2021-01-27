<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class BarbieInventory
{
    private $databaseManager;



    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(string $name = null, string $collection = null, int $yearOfBirth = null, string $valueDollar = null)
    {
        $sql = "INSERT INTO doll_inventory (name, collection, year_of_birth, value_dollar)
                VALUES ('$name', '$collection', '$yearOfBirth', '$valueDollar')";
        $statement = $this->databaseManager->database->prepare($sql);
        $statement->execute();
        // $dolls = $statement->fetchAll(PDO::FETCH_OBJ);

    }


    // Get one

    public function find($id)
    {
        $sql = "SELECT * FROM doll_inventory
                WHERE id=:id";
        $statement = $this->databaseManager->database->prepare($sql);
        $statement->execute([':id' => $id]);
        $doll = $statement->fetch(PDO::FETCH_OBJ);
        return $doll;
    }

    // Get all
    public function get()
    {
        // We get the database connection first, so we can apply our queries with it
        $sql = "SELECT * FROM doll_inventory";

        return $this->databaseManager->database->query($sql);
    }

    public function update(string $name = null, string $collection = null, int $yearOfBirth = null, string $valueDollar = null, $id)
    {
        $sql = "UPDATE doll_inventory
                SET name = '$name', collection = '$collection' , year_of_birth = '$yearOfBirth' , value_dollar = '$valueDollar'
                WHERE id = '$id'";
        $statement = $this->databaseManager->database->prepare($sql);
        $statement->execute();
        // $doll = $statement->fetchAll(PDO::FETCH_OBJ);
        // unset($_POST);

    }

    public function delete($id)
    {
        $sql = "DELETE FROM doll_inventory
                WHERE id = '$id'";
        $statement = $this->databaseManager->database->prepare($sql);
        $statement->execute();
    }

}