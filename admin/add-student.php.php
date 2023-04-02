
<?php
    include ("db_connection.php");
    $stu_id = $_POST['stu_id'];
    $stu_name = $_POST['stu_name'];
    $YOE = $_POST['YOE'];
    $stu_major = $_POST['stu_major'];
    $GPA = $_POST['GPA'];
    $YOG = $_POST['YOG'];
    $uid = $_POST['uid'];
    $psw = $_POST['psw'];  
    $done = FALSE;  


    if($stu_id == null || $stu_name == null || $YOE == null || $stu_major == null || $GPA == null || $YOG == null || $uid == null || $psw == null){
        $done = FALSE;
        include('add-student-error.php');
    }
    else{

        
        $sql = "INSERT INTO student_tab (sid, stu_id, stu_name, stu_year_of_enrollment, stu_major, GPA, year_of_graduation, psw) 
        VALUES ('', '$stu_id', '$stu_name', '$YOE', '$stu_major', '$GPA', '$YOG', '$psw')";   
        
        $result = $connect->query($sql);

        if ($result == FALSE){
            include('add-student-error.php');
        }

        $sql = "INSERT INTO users_tab (sid, userid, password, role) 
        VALUES ('', '$uid', '$psw', 'S')";   
        
        $result = $connect->query($sql);

        if ($result == FALSE){
            include('add-student-error.php');
        }
        else{ header('location: /lab5/ind.php');}
    }

?>