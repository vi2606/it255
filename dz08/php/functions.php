<?php
include "config.php";

function printPre($arr = array())
{
    echo "<pre>";
    // print_r($_POST);
    print_r($arr);

    echo "</pre>";
}

function checkIfUserExists($email)
{
    global $conn;
    $sql = "SELECT * FROM user WHERE email=?";
    $query = $conn->prepare($sql);
    $query->bind_param('s', $email);
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        return true;
    } else {
        return false;
    }
    $query->close();
}

function getImeAndPrezimeForEmail($email)
{
    global $conn;
    $sql = "SELECT ime,prezime FROM user WHERE email=?";
    $query = $conn->prepare($sql);
    $query->bind_param('s', $email);
    $query->execute();
    $query->store_result();
    $query->bind_result($ime, $prezime);
    $returnvalue = "";
    while ($query->fetch()) {
        $returnvalue = $ime . " " . $prezime;
    }
    $query->free_result();
    $query->close();
    return $returnvalue;
}

function dodajKorisnik($ime, $prezime, $telefon, $email, $password)
{
    global $conn;
    // $pass = password_hash($password, PASSWORD_BCRYPT);
    $pass = md5($password);

    if (!checkIfUserExists($email)) {
        $insert = "INSERT INTO user (ime,prezime,broj_telefona,email,password) VALUES
(?,?,?,?,?)";
        $query = $conn->prepare($insert);
        $query->bind_param('sssss', $ime, $prezime, $telefon, $email, $pass);
        $query->execute();
        $query->close();
        return true;
    } else {
        return false;
        // echo "Korisnik vec postoji!";
    }
}

function proveriKorisnika($email, $password)
{
    global $conn;
    // $pass = password_hash($password, PASSWORD_BCRYPT);
    $pass = md5($password);

    $sql = "SELECT * FROM user WHERE email=? AND password=?";
    $query = $conn->prepare($sql);
    $query->bind_param('ss', $email, $pass);
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        return 1;
    } else {
        // echo "No go proveriKorisnika";
        return 0;
    }
    $query->close();
}

function h($string = "")
{
    return htmlspecialchars($string);
}

function display_errors($errors = array())
{
    $output = '';
    if (!empty($errors)) {
        $output .= "<div class=\"error\">";
        $output .= "Please fix the following errors:";
        $output .= "<ul>";
        foreach ($errors as $error) {
            $output .= "<li>" . h($error) . "</li>";
        }
        $output .= "</ul>";
        $output .= "</div>";
    }
    return $output;
}

function clearSession()
{
    unset($_POST['fname']);
    $_POST = array();
    session_unset();
    session_destroy();
    $_SESSION = array();
    // header("Location: index.php");
    // die();
}
// dodajKorisnik("Vlad", "ilic", "iliv", "123");
// session_destroy();
// dodajKorisnik("Marko", "Ilic", "0644554555", "mark@asd.com", "123");
