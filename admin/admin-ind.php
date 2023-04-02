<?php
    session_start();
    include ("db_connection.php");

    $uid=($_SESSION['id']);
    $pwd=($_SESSION['pwd']);

    //Faculty
    $fac_name = array();
    $fac_DOJ = array();
    $qualification = array();
    $department = array();

    $sql1="SELECT * FROM `faculty_tab`";
    $result1 = $connect->query($sql1);
    while($row1 = $result1->fetch_assoc()){
        $fac_name[] = $row1['fac_name'];
        $fac_DOJ[] = $row1['fac_DOJ'];
        $qualification[] = $row1['qualification'];
        $department[] = $row1['department'];
    } 

    //Student
    $stu_name = array();
    $YOE = array();
    $YOG = array();
    $major = array();
    $GPA = array();

    $sql2="SELECT * FROM `student_tab`";
    $result2 = $connect->query($sql2);
    while($row2 = $result2->fetch_assoc()){
        $stu_name[] = $row2['stu_name'];
        $YOE[] = $row2['stu_year_of_enrollment'];
        $YOG[] = $row2['year_of_graduation'];
        $major[] = $row2['stu_major'];
        $GPA[] = $row2['GPA'];
    } 

?>