<?php
$name = "Aurore";
$age = 35;
$eyes_color = "green";
//$family_name = ["Joëlle", "Fabienne", "Claire", "Anne", "Patricia", "Morgan"];
$family_name = [
    "0" => "Joëlle",
    "1" => "Fabienne",
    "2" => "Claire",
    "3" => "Anne",
    "4" => "Patricia",
    "5" => "Morgan"
];
$hungry = [
    0 => "Yes",
    1 => "No"
];

//L'injection de variable fonctionne uniquement avec les guillemets doubles
//Pas avec '' car c'est une string
echo "<p>Hi! My name is $name.</p>";
echo "<p>I am $age years old.</p>";
echo "<p>My eyes are $eyes_color.</p>";
echo "<p>The first person in my family is $family_name[0] </p>";
//echo $family_name[0];
//echo "<p>Are you hungry? $hungry[0]</p>";
?>
<form method="get">
    <p>Are you hungry? <?php echo $_GET['confirm']?></p>

    <input type="checkbox" id="yes" name="confirm" value="Yes">
    <label for="yes">Yes</label>
    <input type="checkbox" id="no" name="confirm" value="No">
    <label for="no">No</label>
</form>
<!--Il faut mettre un attribut id pour relier les checkbox aux labels correspondants-->
<?php
if (isset($_GET['confirm'])){
    echo $_GET['confirm'];
}?>
