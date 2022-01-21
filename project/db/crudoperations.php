<?php

class crud
{
    private $db;

    function __construct($connection)
    {
        $this->db = $connection;
    }

    public function InsertPeople($firstname, $lastname, $dob, $country, $profession_id, $email, $pass)
    {
        try {

            //we created an insertion statememtent and made the values abstract to prevent sql-injection
            $sql = "INSERT INTO people(firstname, lastname, dateofbirth, Country, emailaddress, pass, Profession_id) VALUES(:firstname, :lastname, :dob, :country, :email, :pass, :profession_id)";
            //then prepared the database to take in values
            $insertion = $this->db->prepare($sql);
            //now inserting the values from attributes to the database
            $insertion->bindparam(':firstname', $firstname);
            $insertion->bindparam(':lastname', $lastname);
            $insertion->bindparam(':dob', $dob);
            $insertion->bindparam(':country', $country);
            $insertion->bindparam(':email', $email);
            $insertion->bindparam(':pass', $pass);
            $insertion->bindparam(':profession_id', $profession_id);

            $insertion->execute();
            return true;
        } catch (PDOException $e) {

            echo $e->getMessage();
            return false;
        }
    }
    public function getPeople()
    {
        $sql = "SELECT * FROM people";
        $getpeople = $this->db->query($sql);
        return $getpeople;
    }
    public function getProfession()
    {
        $sql = "SELECT * FROM profession";
        $getProfession = $this->db->query($sql);
        return $getProfession;
    }
    public function getprofession_name($id)
    {
        try {
            $sql = "SELECT Profession FROM profession WHERE profession_id=$id";
            $getProfession_name = $this->db->query($sql);
            return $getProfession_name;
        } catch (PDOException $err) {
            throw $err;
        }
    }
    public function getoneuser($email)
    {
        try {
            $sql = "SELECT * FROM people WHERE emailaddress LIKE '%$email%' OR CONCAT(firstname,' ',lastname) LIKE '%$email%'";
            return $this->db->query($sql);
        } catch (PDOException $th) {
            throw $th;
        }
    }
}
