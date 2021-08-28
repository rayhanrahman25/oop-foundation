<?php
define("pb", "\n");
include "student.php";
include "student-1.php";
include "teacher.php";
include "teacher-1.php";
//========================== you can call class this way example 111111 =============== 
$mediumStudent = new \AUHS\students\medium\Goodstudent();
$goodStudent = new \AUHS\students\Goodstudent();
$angryModeTeacher = new \AUHS\teacher\angrymode\Teacher();
$goodModeTeacher = new \AUHS\teacher\goodmode\Teacher();
//============================= you can call class this way also example 22222 =====================

// use  \AUHS\students\medium\Goodstudent as mdStudent;
// use \AUHS\students\Goodstudent as gdStudent;
// use \AUHS\teacher\angrymode\Teacher as anteacher;
// use \AUHS\teacher\goodmode\Teacher as gdteacher;

//======================= these are for example one ========================
$mediumStudent->studentName();
echo pb;
$goodStudent->studentName();
echo pb; 
$angryModeTeacher->teacherName();
echo pb;
$goodModeTeacher->teacherName();

//============================= these are for example two ===========

// $gdStudent = new gdStudent();
// $mdStudent = new mdStudent();
// $anTeacher = new anteacher();
// $gdTeacher = new gdteacher();

// $gdStudent->studentName();
// echo pb;

