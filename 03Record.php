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

      <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">What happened?</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#1">Category 1</a>
            <a href="#2">Category 2</a>
            <a href="#3">Category 3</a>
        </div>
      </div>

      <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Who?</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#1">Category 1</a>
            <a href="#2">Category 2</a>
            <a href="#3">Category 3</a>
            <a href="#3">Category 4</a>
        </div>
      </div>

      <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Where did it happen?</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#1">Add Student #1</a>
            <a href="#2">Add Additional Student</a>
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

      <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">When?</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#1">Now / Last 10 minutes</a>
            <a href="#2">Enter Time</a>
        </div>

      </div>

      <div class = "photos">
        <br>
        <br>
        <img src="Graduate.png" alt= "Graduate" width =40% class="center">
      </div>

      <?php include_once "footer.php"; ?>

    </body>
</html>
