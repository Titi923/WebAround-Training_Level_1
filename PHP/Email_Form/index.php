<?php
$errors = [];
$missing= [];
if (isset($_POST['send'])) {
   $expected = ['name', 'email', 'message'];
   $required = ['name', 'message'];
   require './process_email.php';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact form</title>
  </head>
  <body>
    <h1>Contact Us</h1>
    <?php if ($errors || $missing) {?>
      <span class="warning">Please fix the item(s) indicated</span>
    <?php };?>  
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    <p>
        <label for="name">Name:
        <?php if ($missing && in_array('name', $missing)) {
        ?>
        <span class="warning">Please enter your name</span>
        <?php }?>  
      </label>
        <input type="text" name="name" id="name" />
      </p>
      <p>
        <label for="email">Email:
          <?php if ($missing && in_array('email', $missing)) {
        ?>
        <span class="warning">Please enter your email</span>
        <?php }?>  
      </label>
        <input type="email" name="email" id="email" />
      </p>
      <p>
        <label for="message">Message:
          <?php if ($missing && in_array('message', $missing)) {
        ?>
        <span class="warning">Please enter your message</span>
          <?php }?>  
          </label>
          <textarea
          for="message"
          name="message"
          id="message"
          cols="25"
          rows="5"
        ></textarea>
      </p>
      <p>
        <input type="submit" name="send" id="send" value="Send Messages" />
      </p>
    </form>
  </body>
</html>
