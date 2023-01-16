<!--Exercice 1-->

<!--Exercice 1.1 Clean your room Exercise -->
<?php
$room_is_filthy = false;
if( $room_is_filthy === false ){ 
    echo "Yuk, Room is dirty... "; 
    echo "Let's clean it up !";
    //cleanup_room(); 
    echo "<br>Room is now clean!"; 
    //$room_is_filthy=false; 
} else {
    echo "<br>Nothing to do, room is neat." ; 
}

//Exercice 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = [
    "0" => "health hazard",
    "1" => "filthy",
    "2" => "dirty",
    "3" => "clean",
    "4" => "immaculate",
];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if($room_filthiness == "health hazard"   ){
	echo "<br>Yuk, Room is Disgusting! Let's clean it up ";
} else if($room_filthiness = "filthy" || $room_filthiness == "dirty" ){
	echo "<br>Yuk, Room is dirty : let's clean it up !";
} else {
	echo "<br>Nothing to do, room is neat.";
}
// 2. "Different greetings according to time" Exercise

$now = date("H:i:s"); // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
if($now >= "05:00:00" && $now < "09:00:00:"){
    echo "<br>Good morning!";
} elseif ($now >= "09:01:00" && $now < "12:00:00"){
    echo "<br>Good day!";
} elseif ($now >= "12:01:00" && $now < "16:00:00"){
    echo "<br>Good afternoon!";
} elseif ($now >= "16:01:00" && $now < "21:00:00"){
    echo "<br>Good evening";
} elseif ($now >= "21:01:00" && $now < "04:59:00"){
    echo "<br>Good night!";
}

// 3. "Different greetings according to age" Exercise
// 4. Display a different greeting according to the user's age and gender.
// 5. Display a different greeting according to the user's age, gender and mothertongue.

if (isset($_GET['age']) && isset($_GET['gender']) &&
isset($_GET['english'])){
	// Form processing
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $english = $_GET['english']; 
    if ($age < 12){
        if ($english == 'Yes'){
            if ($gender == 'Woman'){
                echo "<br>Hello Girl!"; 
            }
            else {
                echo "<br>Hello Boy!";
            }
        }else{
            if ($gender == 'Woman'){
                echo "<br>Aloha Girl!";
            }
            else {
                echo "<br>Alloa Boy!";
            }
        }
    } elseif ($age >= 12 && $age < 18){
        if($english == 'Yes')
            if($gender == 'Woman'){
                echo "<br>Hello Miss Teen!";
            }
            else {
                echo "<br>Hello Mister Teen!";
            }
        else {
            if($gender == 'Woman'){
                echo "<br>Aloha Miss Teen!";
            }
            else {
                echo "<br>Aloha Miss Teen!";
            }
        }
    } elseif ($age >= 18 && $age < 115){
        if($english == 'Yes'){
            if($gender == 'Woman'){
                echo "<br>Hello Miss Adult"; 
            }
            else {
                echo "<br>Hello Mister Adult!";
            }
        }else {
            if($gender == 'Woman'){
                echo "<br>Aloha Miss Adult!";
            }
            else {
                echo "<br>Aloha Mister Adult!";
            }
        }
    } elseif ($age <= 115){
        if($english == 'Yes'){
            echo "<br>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
        }
        else {
            echo "<br>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
        }
    }
}
// Form (incomplete)
?>
<form method="get" action="">
    <label for="age">Please enter your age</label>
    <input type="number" name="age">
    <label for="gender"><br>Are you a man or a woman?</label>
    <input type="radio" name="gender" value="Woman">Woman
    <input type="radio" name="gender" value="Man">Man
    <label for="english"><br>Do you speak English?</label>
    <input type="radio" name="english" value="Yes">Yes
    <input type="radio" name="english" value="No">No
    <input type="submit" name="submit" value="Submit">
</form>

<!--6. The Girl Soccer team-->
<!--7. Achieve the same, without the ELSE.-->

<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name"><br><br>

    <label for="age">Age:</label>
    <input type="number" name="age"><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male<br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_POST['name']) && isset($_POST['age']) &&
isset($_POST['gender'])){ 
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $message = "Sorry, you don't fit the criteria.";//En utilisant une variable de message avec une valeur par défaut, pour éviter d'avoir à utiliser un else

if($age >= 21 && $age <= 40 && $gender == "female"){
    $message = "Welcome to the team, $name!";
} 
    echo $message;
}
?>

<!--8. "School sucks!" Exercise-->

<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name"><br><br>

    <label for="quotation">Quotation</label>
    <input type="number" name="quotation"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['name']) && isset($_POST['quotation'])){
$name = $_POST["name"];
$quotation = $_POST["quotation"];
if ($quotation < 4) {
    echo "This work is really bad. What a dumb kid!";
    } elseif ($quotation >= 5 && $quotation >= 9){
        echo "This is not sufficient. More studding is required.";
    } elseif ($quotation == 10){
        echo "Barely enough!";
    } elseif ($quotation >= 11 && $quotation <= 14){
        echo "Not bad!";
    } elseif ($quotation >= 15 && $quotation <=18){
        echo "Bravo, bravissimo!";
    } elseif($quotation >=19 && $quotation <= 20){
        echo "Too good to be true : confront the cheater!";
    } 
}
?>
