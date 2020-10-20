<?php

    session_start();
    include "../src/schema.php";
    include "../src/connect.php";
    
    $dbname="BLOGDB";
    $base = connectSqlite($dbname);

    $username = filter_input(INPUT_POST, 'uname');
    $password = filter_input(INPUT_POST, 'psw');
    $remember = filter_input(INPUT_POST, 'remember');
    $endSession = filter_input(INPUT_POST, 'endSession');

    $startSession = filter_input(INPUT_POST, 'startSession');
    $date = date('d-m-Y H:i');

    if(isset($endSession)){
        header("location:../views/home.html");
        setcookie('date', $date, time()-100, '/');
        setcookie('username', $username, time()-100, '/');
        setcookie('password', $password, time()-100, '/');
    }

    if(isset($startSession) && isset($_COOKIE['username']) && isset($_COOKIE['password'])){
        header("location:../views/homeVerifyed.php");
        setcookie('date', $date, time()-100, '/');
        setcookie('date', $date, time()+3600*24, '/');
    }

    if(isset($username) && isset($password)){
        $stmt = $base-> prepare("SELECT name,password FROM users WHERE name=:uname and password=:psw");

        try {
            $stmt->bindValue(':uname', $username);
            $stmt->bindValue(':psw', $password);
            $stmt->execute();
            $row=$stmt->fetchAll(PDO::FETCH_ASSOC);

            $count=count($row);

            if($count == 1){

                header("location:../views/homeVerifyed.php");
                $user=$row[0];
                    $_SESSION['uname']=$user['uname'];
                    $_SESSION['psw']=$user['psw'];

                    if(($_POST['remember']=='on' || $_POST['remember']=='1')){
                        setcookie('username', $username, time()+(60*60*24*365), '/');
                        setcookie('password', $password, time()+(60*60*24*365), '/');
                        setcookie('date', $date, time()+3600*24, '/');
                    }


            }else{
                header("location:../index.php");
            }

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

?>