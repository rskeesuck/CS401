<html>
  <div id="navigation">
      <ul>
        <li<?php if ($thisPage=="00MainPage")
        echo " id=\"currentpage\""; ?>>
        <a href="#">Home</a></li>
        <li<?php if ($thisPage=="06Help")
        echo " id=\"currentpage\""; ?>>
        <a href="#">Help/FAQ</a></li>
        <li<?php if ($thisPage=="07About")
        echo " id=\"currentpage\""; ?>>
        <a href="#">About Us</a></li>
        <li<?php if ($thisPage=="01LogonPage")
        echo " id=\"currentpage\""; ?>>
        <a href="#">Logon</a></li>
        <li<?php if ($thisPage=="02UserHome")
        echo " id=\"currentpage\""; ?>>
        <a href="#">My Students</a></li>
      </ul>
    </div>
</html>
