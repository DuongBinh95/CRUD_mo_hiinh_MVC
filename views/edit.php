<?php 
    if(isset($student)){
        $id = $student['id_student'];
        $name = $student['name_student'];
        $dob = $student['dob'];
        $address = $student['address'];
        $email = $student['email'];
        $phone = $student['phone'];
    }
?>
<h1><?php  echo  (!isset($student))? 'Add Student':'Update Student'  ?></h1>
<form method="post" action="<?php echo  'index.php?action=update&id='.$id ?>">
    <table>
        <tr>
            <td><label>Name :</label></td>
            <td><input type="text" name="name" value='<?php if(isset($name)) echo $name; ?>' /></td>
        </tr>
        <tr>
            <td><label>DoB :</label></td>
            <td><input type="text" name="dob" value="<?php if(isset($dob)) echo $dob; ?>" /></td>
        </tr>
        <tr>
            <td><label>Address :</label></td>
            <td><input type="text" name="address" value='<?php if(isset($address)) echo $address; ?>' /></td>
        </tr>
        <tr>
            <td><label>Email :</label></td>
            <td><input type="email" name="email" value='<?php if(isset($email)) echo $email; ?>' /><br/></td>
        </tr>
        <tr>
            <td><label>Phone :</label></td>
            <td><input type="number" name="phone" value="<?php if(isset($phone)) echo $phone; ?>" /><td>
        </tr>
        <tr>
            <td><input type="submit" name='add' value="Update"></td>
        </tr>
    </table>
    
</form>

    