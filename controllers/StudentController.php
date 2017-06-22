<?php
require_once './db/StudentDB.php';

class StudentController
{
    function showStudents(){
        $studentDB = new StudentDB();
        $students = $studentDB->listAllStudents();
        include './views/list.php';
    }

    public function showForm(){
        include './views/add.php';
    }

    function addStudents(){
        $db = new StudentDB();
        if(isset($_POST['add'])){
            $name_student = $_POST['name'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            if (!empty($name_student) && !empty($dob) && !empty($address) && !empty($email) && !empty($phone)){
                if ($db->isStudentExists($name_student)){
                   $message = 'Student is exists';
                   echo $message;
                } else{
                    $student = new Student(0, $name_student, $dob, $address, $email, $phone);
                    $db ->addStudent($student);
                    header('Location: index.php');
                }
            }else{
                $message = 'No data';
            }
        }
    }

    public function editStudent($id){
        $studentDb = new StudentDB();
        $student =  $studentDb->getStudentById($id);
        include './views/edit.php';
    }

    public function updateStudent($id){
        $db = new StudentDB();
        if(isset($_POST['add'])){
            $id = (int)$id;
            $name_student = $_POST['name'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            if (!empty($name_student) && !empty($dob) && !empty($address) && !empty($email) && !empty($phone)){
                $student = new Student($id, $name_student, $dob, $address, $email, $phone);
                $db ->updateStudent($student);
                header('Location: index.php');
            }else{
                $message = 'No data';
            }
        }
    }

    public function deleteStudent( $id){
        $studentDb = new StudentDB();
        $studentDb->removeStudent($id);
        header('Location: index.php');
    }

}