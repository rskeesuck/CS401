<html>
  <div id="navigation">
      <ul>
        <li<?php if ($thisPage=="00MainPage")
        echo " id=\"currentpage\""; ?>>
        <a href="00MainPage.php">Home</a></li>
        <li<?php if ($thisPage=="06Help")
        echo " id=\"currentpage\""; ?>>
        <a href="06Help.php">Help/FAQ</a></li>
        <li<?php if ($thisPage=="07About")
        echo " id=\"currentpage\""; ?>>
        <a href="07About.php">About Us</a></li>
        <li<?php if ($thisPage=="01LogonPage")
        echo " id=\"currentpage\""; ?>>
        <a href="01LogonPage.php">Logon</a></li>
      </ul>
    </div>
</html>
