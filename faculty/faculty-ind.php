<?php
    session_start();
    include ("db_connection.php");

    $uid=($_SESSION['id']);
    $pwd=($_SESSION['pwd']);

    $courses = array();
    $majors = array();
    $studentids = array();
    $students = array();
    $allstuids = array();

    //Courses
    $course_name = array();
    $offered_in = array();
    $credits = array();
    $pre_req = array();
    $type = array();

    //get faculty id
    $sql1="SELECT * FROM faculty_tab where psw='".$pwd."'";
    $result1 = $connect->query($sql1);
    $row1 = $result1->fetch_assoc();
    $facid = $row1['fac_id'];

    //Get courses of Faculty
    $sql2="SELECT * FROM `courses_tab` where fac_id='".$facid."'";
    $result2 = $connect->query($sql2);
    while($row2 = $result2->fetch_assoc()){
        $course_name[] = $row2['course_name'];
        $offered_in[] = $row2['offered_in'];
        $credits[] = $row2['credits'];
        $pre_req[] = $row2['pre_req'];
        $type[] = $row2['type'];
    } 

    //Get students for each course
    $sql3="SELECT * FROM `registration_tab`";
    $result3 = $connect->query($sql3);
    while($row3 = $result3->fetch_assoc()){
        $studentids[] = $row3['stu_id'];
    } 

    //Get student names
    $sql4="SELECT * FROM `student_tab`";
    $result4 = $connect->query($sql4);
    while($row4 = $result4->fetch_assoc()){
        $students[] = $row4['stu_name'];
        $allstuids[] = $row4['stu_id'];
    } 

    //Faculty
    $faculty_name = array();
    $fac_DOJ = array();
    $qual = array();
    $department = array();

    //Get Faculty info
    $sql5="SELECT * FROM faculty_tab where psw='".$pwd."'";
    $result5 = $connect->query($sql5);
    while($row5 = $result5->fetch_assoc()){
        $faculty_name[] = $row5['fac_name'];
        $fac_DOJ[] = $row5['fac_DOJ'];
        $qual[] = $row5['qualification'];
        $department[] = $row5['department'];
    }

?>