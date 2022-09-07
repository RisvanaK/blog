<?php
include "includes/config.php";
include "includes/head_links.php";
?>
<body>

    <?php
include "includes/header.php";
?>
  
    <div class="home">
        <div class="container"></div>
    </div>

    <form class="form">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">

        <button>Log In</button>
        <div class="social">
            <div class="go"><i class="fab fa-google"></i> Google</div>
            <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
        </div>
    </form>

<?php
include "./includes/footer.php";
?>

    <!-- link to jquery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- link to js -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="./assests/js/main.js"></script>
</body>

</html>