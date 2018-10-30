<!DOCTYPE html>
<html>
    <head>
      <?php include_once "head.php"; ?>
    </head>
    <body>
      <?php
       include_once "navbar.php";
       include_once "header.php";
        ?>

      <h4>Create an Individual Student Report</h4>
      <br>

      <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Grade</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#1">6</a>
            <a href="#2">7</a>
            <a href="#2">8</a>
        </div>
      </div>

      <script>
      /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

    // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

          var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
          for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

      <div class = "login">
        <form action="/action_page.php">
          First Name:<br>
          <input type="text" name="First Name" value="First">
          <br>
          Last Name:<br>
          <input type="text" name="Last Name" value="Last">
          <br>
          Teacher:<br>
          <input type="text" name="Teacher" value="Teacher">
          <br>
      </div>

      <div class = "mainphoto">
          <img src="FakeNews.jpg" alt= "Fake Newspaper" width="50%" class = "center">
      </div>

      <?php include_once "footer.php"; ?>

    </body>
</html>
