<?php
include("config.php");
?>
<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['tel'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="index.php" method="POST" class="form" id="form">
      <div class="form__inp">
        <label for="username">username:</label>
        <input type="text" name="username" id="username" placeholder="joe doe" required />
      </div>
      <div class="form__inp">
        <label for="email">email:</label>
        <input name="email" type="email" placeholder="joe@gmail.com" />
      </div>
      <div class="form__inp">
        <label for="tel">tel:</label>
        <input
          type="tel"
          pattern="^[0-9-+\s()]*$"
          name="tel"
          id="tel"
          maxlength="14"
          minlength="10"
          placeholder="+91-9895979490"
        />
        <small>Format: +91-XXXXXXXXXX</small>
      </div>
      <div class="form__gender">
        <label for="male">Male:</label>
        <input type="radio" name="gender" value="MALE" id="male" />
        <label for="female">Female:</label>
        <input type="radio" name="gender" value="FEMALE" id="female" />
        <label for="other">other</label>
        <input type="radio" name="gender" value="OTHER" id="other" />
      </div>
      <select name="city" id="city">
        <option value="mumbai">mumbai</option>
        <option value="delhi">delhi</option>
        <option value="jaipur">jaipur</option>
        <option value="mussoorie">mussoorie</option>
        <option value="nanital">nanital</option>
        <option value="chennai">chennai</option>
        <option value="pune">pune</option>
        <option value="banglore">banglore</option>
        <option value="hyderabad">hyderabad</option>
        <option value="lukhnow">lukhnow</option>
      </select>
      <input type="submit" value="SUBMIT" />
    </form>
  </body>
</html>