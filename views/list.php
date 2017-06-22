
<h3>List Student</h3>
<a href="index.php?action=form" style='padding: 3px 10px; border: 1px solid #ccc; background: #f3f3f3; '>Add Student</a>

<table border="1" style='margin-top: 15px;'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>DOB</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Controls</th>
    </tr>
    <?php foreach ($students as $student) :?>
    <tr>
        <td><?=$student->getIdStudent();?></td>
        <td><?=$student->getNameStudent();?></td>
        <td><?=$student->getDob();?></td>
        <td><?=$student->getAddress();?></td>
        <td><?=$student->getEmail();?></td>
        <td><?=$student->getPhone()?></td>
        <td>
            <a href="<?php echo  'index.php?action=edit&id='.$student->getIdStudent(); ?>">Update</a>
            <a href="<?php echo  'index.php?action=delete&id='.$student->getIdStudent(); ?>" onclick="confirm('Delete Item ?')">Delete</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>