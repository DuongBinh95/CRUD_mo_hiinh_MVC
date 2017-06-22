<?php
require_once './models/Student.php';
require_once 'database.php';

class StudentDB extends database
{
    function listAllStudents(){
        $db = $this->connectDB();
        $results = $db->query("SELECT * FROM Student");
        $students =[];
        foreach ($results as $result){
            $id_student = $result['id_student'];
            $name_student = $result['name_student'];
            $dob= $result['dob'];
            $address= $result['address'];
            $email= $result['email'];
            $phone= $result['phone'];
            $student = new Student($id_student, $name_student, $dob, $address, $email, $phone );
            $students[] = $student;
        }
        return $students;
    }

    function addStudent($student){
        try {
            $db = $this->connectDB();
            $sql = "INSERT INTO Student (name_student, dob, address, email, phone) VALUES('".$student->getNameStudent()."','".$student->getDob()."','".$student->getAddress()."','".$student->getEmail()."','".$student->getPhone()."')";
            $db->exec($sql);
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        $db = null;
    }

    public function updateStudent($student){

        try {
            $db = $this->connectDB();
            $id = (int)$student->getIdStudent();
            $sql = "UPDATE Student SET name_student = '".$student->getNameStudent()."', dob = '".$student->getDob()."', address = '".$student->getAddress()."', email = '".$student->getEmail()."', phone = '".$student->getPhone()."' WHERE id_student = $id";
            $db->exec($sql);
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        $db = null;
    }

    public function removeStudent($student_id){
        try {
            $db = $this->connectDB();
            $student_id = (int) $student_id;
            $sql = "DELETE FROM student WHERE id_student = $student_id";
            $db->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        $db = null;
    }

    function isStudentExists($name_student){
        $db = $this->connectDB();
        $sql = "SELECT id_student FROM student WHERE name_student = '".$name_student."'";
        $results = $db->prepare($sql);
        $results->execute($sql);
        $result = $results->fetchAll();
        return count($result);
    }

    public function getStudentById($id){
        $db = $this->connectDB();
        $sql = "SELECT * FROM student WHERE id_student = $id";
        $results = $db->prepare($sql);
        $results->execute($sql);
        $result = $results->fetch();
        return $result;
    }
}