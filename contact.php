<?php include("header.php") ?>
   <div class="column">
      <form action="contact.php" method ="POST" enctype="text/plain">
        <label for="fname" style="color:white;">Անուն Ազգանուն</label>
        <input type="text" id="fname" name="name" placeholder="Գրեք ձեր անուն ազգանունը․․">
        <label for="fname" style="color:white;">Էլ․ Հասցէ</label>
        <input type="text" id="fname" name="mail" placeholder="Գրեք ձեր Էլ․ Հասցէն․․">
        <label for="lname" style="color:white;">Հաղորդագրություն</label>
        <input type="text" id="lname" name="haxord" placeholder="Գրեք հաղորդագրությունը․․">
        <input type="submit" value="Ուղարկել" name="submit">
      </form>
    </div>
  </div>
  <?php
 $name = $_POST['name'];
 $to = $_POST['mail'];
 $subject = "Namak";
 $sms = $_POST['haxord'];
 ?>
<?php include("footer.php") ?>