<form method="POST" action="">
    <label for="gender">Are you a human, a cat or a unicorn ?</label>
    <br>
    <input type="radio" name="gender" value="human">
    <label for="gender">a human</label>
    <br>
    <input type="radio" name="gender" value="cat">
    <label for="gender">a cat</label>
    <br>
    <input type="radio" name="gender" value="unicorn">
    <label for="gender">a unicorn</label>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_POST['gender'])){
    $gender = $_POST['gender'];
    $lien_image; 
}
$hello = ($gender == "human")? $lien_image = "https://media.giphy.com/media/3o7bu1QBfylzi8MmYw/giphy.gif": 
(($gender == "cat")? $lien_image =  "https://media.giphy.com/media/ICOgUNjpvO0PC/giphy.gif": 
 $lien_image = "https://media.giphy.com/media/l3978LHbIV5GAzRPG/giphy.gif"
); 
    echo '<img src="'.$hello.'">';
?>
