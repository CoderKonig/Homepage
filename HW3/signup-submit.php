<?php


$errors = array();
$user = array(
    'name' => '',
    'gender' => '',
    'age' => '',
    'personality_type' => '',
    'favorite_os' => '',
    'min_seeking_age' => '',
    'max_seeking_age' => ''
);

if(isset($_POST['name'])) {
    $user['name'] = urlencode($_POST['name']);
}
if(isset($_POST['gender'])) {
    $user['gender'] = urlencode($_POST['gender']);
}
if(isset($_POST['age'])) {
    $user['age'] = urlencode($_POST['age']);
}
if(isset($_POST['personality_type'])) {
    $user['personality_type'] = ($_POST['personality_type']);
}
if(isset($_POST['os'])) {
    $user['favorite_os'] = ($_POST['os']);
}
if(isset($_POST['min_seeking_age'])){
    $user['min_seeking_age'] = ($_POST['min_seeking_age']);
}
if(isset($_POST['max_seeking_age'])){
    $user['max_seeking_age'] = ($_POST['max_seeking_age']);
}

/* check: names cannot be digits */
if (preg_match("/[0-9]/", $_POST["name"]) === 1) {
    $errors[] = "Name cannot be digits";

}

if (!is_numeric($user["age"])) {
    $errors[] = "Age is not a number.";
}

if (empty($errors)) {
    
    $user_details = $user;
    $to_write = implode(",", $user_details); 
    file_put_contents("singles.txt", PHP_EOL.$to_write, FILE_APPEND);
?>

  <pre>
        Thank you
        Welcome to NerdLuv, <?= $user["name"] ?>!
        Now <a href="matches.php">log in to see your matches!</a>
    </pre>

    <?php
}
else {
?>
    <div class="errors">
        Please fix the following errors:
        <ul>
<?php
    foreach ($errors as $error) {
?>
            <li><?= $error ?> </li>
    <?php } ?>
        </ul>
    </div>
<?php
}
?>






