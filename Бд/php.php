<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","hotel");

$connect = new mysqli(HOST,USER,PASS,DB);
if($connect->connect_error){
    exit("Ошибка соединения с бд".$connect->connect_error);
}
$connect->set_charset("utf8");

// $ap = "SELECT numberofrooms, roomtype,employmentallroom,floor FROM apartment";
// $se = "SELECT numberofseats, numberofoccupiedseats,availabilityofbookin,havingaphone,cost FROM room";
// $result = $connect->query($ap);
// $resultt = $connect->query($se);
    // output data of each row

    if ($_POST['action']=="pipisok11"){
        echo("12121");
    }

    if ($_POST['action']=="pipisok1"){
        $sql = "SELECT idapartment, numberofrooms, roomtype,employmentallroom,floor FROM apartment";
        $result = $connect->query($sql);
        $f = $connect->real_escape_string($_POST["floor"]);
        $t = $connect->real_escape_string($_POST["typeap"]);
        $n = $connect->real_escape_string($_POST["numberrooms"]);
        $r = $connect->real_escape_string($_POST["roomocc"]);
        $p = '';
        $sql = "INSERT INTO apartment (idapartment, numberofrooms, roomtype, employmentallroom, floor) VALUES (NULL, '$n', '$t', '$r', '$f');";
        $connect->query($sql);
        while($row = $result->fetch_assoc()) {
            $p.= " |idapartment:".$row["idapartment"]."| номер комнаты: " . $row["numberofrooms"]. " | Тип комнаты: " . $row["roomtype"]." | занятость комнаты: " . $row["employmentallroom"]." | этаж: " . $row["floor"]."<a href='index.php?idapartment=".$row['idapartment']."&action=delapartment'>&times;</a>". "<br>";
        }
        echo ($p);
    }
    if ($_GET["action"]=="delapartment"){
        $id = intval($_GET["idapartment"]);
        $sql="DELETE FROM apartment WHERE apartment.idapartment = $id";
        $connect->query($sql);
    }
    if ($_POST["action"]=="pipisok2"){
        $sql = "SELECT idroom, numberofseats, numberofoccupiedseats,availabilityofbookin,havingaphone,cost FROM room";
        $result = $connect->query($sql);
        $s = $connect->real_escape_string($_POST["numberseats"]);
        $so = $connect->real_escape_string($_POST["numberoccseats"]);
        $arm = $connect->real_escape_string($_POST["armorav"]);
        $ph = $connect->real_escape_string($_POST["phav"]);
        $co = $connect->real_escape_string($_POST["cost"]);
        $p = '';
        
        $sql = "INSERT INTO room (idroom, numberofseats, numberofoccupiedseats, availabilityofbookin, havingaphone, cost) VALUES (NULL, '$s', '$so', '$arm', '$ph', '$co');";
        $connect->query($sql);
        
        while($row = $result->fetch_assoc()) {
            $p .= "|idroom:".$row["idroom"]." | колличество мест: " . $row["numberofseats"]. " | колличество занятых мест: " . $row["numberofoccupiedseats"]. " | Наличие брони: " . $row["availabilityofbookin"]." | наличие телефона: " . $row["havingaphone"]." | цена: " . $row["cost"]."<a href='index.php?idroom=".$row['idroom']."&action=delroom'>&times;</a>". "<br>";
        }
        echo ($p);
    }
    if ($_GET["action"]=="delroom"){
        $id = intval($_GET["idroom"]);
        $sql="DELETE FROM room WHERE room.idroom = $id";
        $connect->query($sql);
    }
    if ($_POST["action"]=="pipisok3"){
        $sql = "SELECT idregistration, firstname, secondname,midlename,passportseries,passportnumber,pasportregistration,dateofbirth,gender,telephone,mail FROM registrationcards";
        $result = $connect->query($sql);
        $fn = $connect->real_escape_string($_POST["firstname"]);
        $sn = $connect->real_escape_string($_POST["secondname"]);
        $mn = $connect->real_escape_string($_POST["midlename"]);
        $ps = $connect->real_escape_string($_POST["passportseries"]);
        $pn = $connect->real_escape_string($_POST["passportnumber"]);
        $pr = $connect->real_escape_string($_POST["pasportregistration"]);
        $db = $connect->real_escape_string($_POST["dateofbirth"]);
        $ge = $connect->real_escape_string($_POST["gender"]);
        $te = $connect->real_escape_string($_POST["telephone"]);
        $ma = $connect->real_escape_string($_POST["mail"]);
        $p = '';
        
        $sql = "INSERT INTO registrationcards (idregistration, firstname, secondname, midlename, passportseries, passportnumber,pasportregistration,dateofbirth,gender,telephone,mail) VALUES (NULL, '$fn', '$sn', '$mn', '$ps', '$pn', '$pr', '$db', '$ge', '$te', '$ma');";
        $connect->query($sql);
        
        while($row = $result->fetch_assoc()) {
            $p = " | Имя: " . $row["firstname"]. " | Фамилия: " . $row["secondname"]. " | Отчество: " . $row["midlename"]." | Серия паспорта: " . $row["passportseries"]." | Номер паспорта: " . $row["passportnumber"]." | Регистрация: " . $row["pasportregistration"]." | Дата рождения: " . $row["dateofbirth"]." | Пол: " . $row["gender"]." | Телефон: " . $row["telephone"]." | Почта: " . $row["mail"]."<a href='index.php?idregistration=".$row['idregistration']."&action=delregistration'>&times;</a>". "<br>";
        }
        echo ($p);
    }
    if ($_GET["action"]=="delregistration"){
        $id = intval($_GET["idregistration"]);
        $sql="DELETE FROM registrationcards WHERE registrationcards.idregistration = $id";
        $connect->query($sql);
    }
    
    
    