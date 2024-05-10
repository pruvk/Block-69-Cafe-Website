<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BLOCK 69 Café</title>

  <!-- LINK -->
  <link rel="icon" href="icons/newlogo-light.png">
  <link rel="stylesheet" href="css/header.css">

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- ICONS -->
  <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- SCRIPT -->
  <script src="https://kit.fontawesome.com/266d743c96.js" crossorigin="anonymous"></script>
</head>

<body>
  <a href="#" class="to-top">
    <i class="fas fa-chevron-up"></i>
    <script>
      const toTop = document.querySelector(".to-top");
      window.addEventListener("scroll", () => {
        if (window.pageYOffset > 700) {
          toTop.classList.add("active");
        } else {
          toTop.classList.remove("active");
        }
      })
    </script>
  </a>
  <nav>
    <ul>
      <img src="Icons/newlogo.png" onclick="window.location.href='../admin/home.php'" style="cursor: pointer;" alt="">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fa fa-bars"></i>
      </label>
      <li><a href="../admin/menu.php">MENU</a></li>
      <li><a href="../admin/blog.php">BLOG</a></li>
      <li><a href="../admin/services.php">SERVICES</a></li>
      <li><a href="../admin/about.php">ABOUT US</a></li>
    </ul>
    <div class="buttons">
      <?php
        include '../config/functions.php';
        include '../config/connect.php';
        include '../sign-out.php';

        $conn = get_connection();
        $userActive = check_login($conn);

        $foo = $_SESSION['username'];

        echo "<h1>$foo</h1>";

    if($userActive){
        echo '
        <a id="Cart" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>;
        <a id="User" onclick="toggleUserPanel()"><i class="fa-solid fa-user" style="font-size: 22px; margin-right: 10px;"></i></a>
        <div id="userPanel" class="user-panel" style="
        
            display: none;
            // position: absolute;
            // top: 7em;
            background-color: black;
            border: 1px solid black;
            padding: .5em 0em .5em 0em;
            // width: 6em;
            margin-right: 1em;
            ">

            <a id="" type="button" name="SignOut" style="
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-left: 1.5em;
            color: white;
            font-family: League Spartan;
            font-weight: bold;
            ">Sign out</a>
        </div>';
    }else{
        echo '<a href="sign-in.php" id="Sign-in">Login</a>
        <a href="sign-up.php" id="Sign-up">Sign up</a>
        <a id="Cart" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>';
    }
    ?>
    </div>

    <form action="sign-out.php" method="post">
      <button type="submit">LOG OUT XD</button>
    </form>
  </nav>

  <script>
    function toggleUserPanel() {
      var userPanel = document.getElementById("userPanel");
      if (userPanel.style.display === "none") {
        userPanel.style.display = "block";
      } else {
        userPanel.style.display = "none";
      }
    }
  </script>