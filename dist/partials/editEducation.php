<?php 

/** @var $pdo \PDO */
require_once "../include/database.php";
    
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $id=$_POST['id'];
    
    $statement= $pdo->prepare('Select * FROM education where id =:id');
    $statement ->bindValue(':id', $id);
    $statement-> execute();
    $education = $statement-> fetch();


?>

<form action="./../include/editEducation.php" method="post">
    <input type='hidden' value='<?php echo $id?>' name='id'/>

    <label for="name">Name of institution*</label>
    <input type="text" id="name" name="name" value ="<?php echo $education['name']?>" required>

    <label for="subject">Subject*</label>
    <input type="text" id="subject" name="subject" value ="<?php echo $education['subject']?>" required>

    <label for="city">City</label>
    <input type="text" id="city" name="city" value ="<?php echo $education['city']?>">

    <label for="description">Description</label>
    <textarea id="description" name="description" style="height:70px" value ="<?php echo $education['description']?>"></textarea>

    <label for="start-date">Start date*</label>
    <input type="month" id="start-date" name="start-date" required value ="<?php echo $education['startdate']?>">

    <label for="end-date">End date</label>
    <input type="month" id="end-date" name="end-date" value ="<?php echo $education['enddate']?>">
    <input type="submit" value="Submit">
    </form>

    <?php } ?>