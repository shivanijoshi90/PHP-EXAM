<?php

class Config{

private $HOSTNAME = "localhost";
private $USERNAME = "root";
private $PASSWORD = "";
private $DB_NAME = "curd"; 


private $LOGIN_TABLE ="login";
private $LIVEMOVIE_TABLE ="livemovie";
private $UPCOMINGMOVIE_TABLE ="upcoming";

public $conn;




public function connect()
{

    $this->conn = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);

    return $this->conn;
}

public function insertUser($name,$email)
{
    $this->connect();

    $query = "INSERT INTO login (name,email) VALUES('$name', '$email');";

    return mysqli_query($this->conn, $query); 

}



public function fetchuser()
{
    $this->connect();

    $query = "SELECT * FROM login;";

    return mysqli_query($this->conn, $query);

}

public function fetchSingleUser($id)
{
    $this->connect();

    $query = "SELECT * FROM login WHERE id = '$id';";

    return mysqli_query($this->conn, $query);

}

public function deleteuser($id)
{
    $this->connect();

    $query = "DELETE FROM login WHERE id = '$id';";

    return mysqli_query($this->conn, $query);

}
public function updateUser($email, $id)
{
    $this->connect();

    $query = "UPDATE login SET name = '$name',email = '$email' WHERE id = '$id';";

    return mysqli_query($this->conn, $query);

}

public function insertLiveMovie($name,$time)
{
    $this->connect();

    $query = "INSERT INTO livemovie (name,time) VALUES('$name', '$time');";

    return mysqli_query($this->conn, $query);
}

public function fetchLiveMovie()
{
    $this->connect();

    $query = "SELECT * FROM livemovie;";

    return mysqli_query($this->conn, $query);
    

}

public function fetchSingleMovie($id)
{
    $this->connect();

    $query = "SELECT * FROM livemovie WHERE id = '$id';";

    return mysqli_query($this->conn, $query);


}
public function deletemovie($id)
{
    $this->connect();

    $query = "DELETE FROM livemovie WHERE id = '$id';";

    return mysqli_query($this->conn, $query);

}

public function updateMovie($name,$time, $id)
{
    $this->connect();

    $query = "UPDATE livemovie SET name = '$name',time = '$time' WHERE id = '$id';";

    return mysqli_query($this->conn, $query);

}

public function insertUpcomingMovie($name,$movie_id)
{
    $this->connect();

    $query = "INSERT INTO upcoming (name, movie_id) VALUES('$name', '$movie_id');";

    return mysqli_query($this->conn, $query);



}

public function fetchUpcomingMovie()
{
    $this->connect();

    $query = "SELECT * FROM upcoming;";

    return mysqli_query($this->conn, $query);   
}

public function fetchSingleUpcomingMovie($id)
{
    $this->connect();

    $query = "SELECT * FROM upcoming WHERE id = '$id';";

    return mysqli_query($this->conn, $query);

}

public function deleteUpcomingMovie($id)
{
    $this->connect();

    $query = "DELETE FROM upcoming WHERE id = '$id';";

    return mysqli_query($this->conn, $query);

}

public function updateUpcomingMovie($name,$movie_id, $id)
{
    $this->connect();

    $query = "UPDATE upcoming SET name = '$name',movie_id = '$movie_id' WHERE id = '$id';";

    return mysqli_query($this->conn, $query);

}
}





?>