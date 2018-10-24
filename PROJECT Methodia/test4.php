<!--http://thisinterestsme.com/php-user-registration-form/-->
<?php

$db=new PDO('mysql:dbname=methodia;charset=UTF8;host=localhost;','master','master');
//If the POST var "register" exists (our submit button), then we can assume that the user has submitted the registration form.
if(isset($_POST['register'])){
    
    //Retrieve the field values from our registration form.
    $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
    $car = !empty($_POST['car']) ? trim($_POST['car']) : null;
    $profession = !empty($_POST['profession']) ? trim($_POST['profession']) : null;
    $family = !empty($_POST['family']) ? trim($_POST['family']) : null;
    $mail = !empty($_POST['mail']) ? trim($_POST['mail']) : null;

    
// basic name validation - didnt work good
//  if (empty($name)) {
// echo "<script type='text/javascript'>alert('полето не е попълнено');</script>";
//      return;
//  } else if (strlen($name) < 3) {
//  echo "<script type='text/javascript'>alert('повече от 3 символа');</script>";
//      return;
//  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
//echo "<script type='text/javascript'>alert('само букви и бели полета');</script>";
//return;
//  }
  

    
//    TO ADD: Error checking (username characters, password length, etc). Basically, you will need to add your own error checking BEFOREthe prepared statement is built and executed.
    
//Now, we need to check if the supplied field (name, mail) already exists. Construct the SQL statement and prepare it.

    $sql = "SELECT COUNT(mail) AS num FROM users_table WHERE mail = :mail";
    $stmt = $db->prepare($sql);
    
    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':mail', $mail);
    
    //Execute.
    $stmt->execute();
    
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //the scope of this tutorial.
    if($row['num'] > 0){
        //If the email is taken.
         echo "<script type='text/javascript'>alert('тази електронна поща вече е регистрирана');</script>";
     
    }else{
    //Prepare our INSERT statement.
    $sql = "INSERT INTO users_table (name, mail, profession, car, family) VALUES (:name, :mail,:profession, :car, :family)";
    $stmt = $db->prepare($sql);
    
    //Bind our variables.
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':mail', $mail);
    $stmt->bindValue(':car', $car);
    $stmt->bindValue(':family', $family);
    $stmt->bindValue(':profession', $profession);
    
    //Execute the statement and insert the new account.
    $result = $stmt->execute();
        
    //If the signup process is successful.
          echo "<script type='text/javascript'>alert('Вие бяхте регистриран успешно');</script>";

    }
}

?>


    
        <form action="index.php" method="post" class="regForm">
            <h2>Регистрация</h2>
            <hr class="filler4">
        <p>Ако искате да спечелите безплатен летищен VIP трансфер с електрическо Renault Z.E., <br>регистрирайте се тук:
        </p>
            <input type="text" name="name" placeholder="ИМЕ" required class="inputs">
            <input type="text" name="family" placeholder="ФАМИЛИЯ" required class="inputs">
            <input type="text" name="profession" placeholder="ПРОФЕСИЯ" required class="inputs">
            <input type="text" name="car" placeholder="КАКЪВ АВТОМОБИЛ КАРАТЕ" required class="inputs">
            <input type="email" name="mail" placeholder="ИМЕЙЛ" required class="inputs">
            <button type="submit" name="register" value="Register">РЕГИСТРИРАЙ</button>
        </form>

