
<?php
require_once './controllers/StudentController.php';
$studentController = new StudentController();

if(isset($_GET['action'])){
	$action = $_GET['action'];
	if($action == 'form'){
		$studentController->showForm();
	}else if($action == 'add'){
		$studentController->addStudents();
	}elseif($action == 'edit'){
		$id = $_GET['id'];
		$studentController->editStudent($id);
	}elseif($action == 'update'){
		$id = $_GET['id'];
		$studentController->updateStudent($id);
	}elseif($action == 'delete'){
		$id = $_GET['id'];
		$studentController->deleteStudent($id);
	}
}else{
	$studentController->showStudents();
}
?>
