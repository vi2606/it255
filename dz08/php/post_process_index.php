<?php
// session_start();
// include "php/functions.php";

// printPre($_POST);

$error = array();
?>



<!-- login vvvvv --------------------------------------------------------------------------------------------- -->
<?php
if (isset($_POST['loginsubmit'])) {
    $email = $conn->real_escape_string($_POST['email']);
    // $email = $_POST['email'];

    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        // echo "<script>console.log('Working...')</script>";

        if (proveriKorisnika($email, $password)) {
            $_SESSION['email'] = $email;

        } else {
            ?>
            <script type="text/javascript">
            (function ($){
                $('#mod-login').modal('show');

                // var 1 add div with error
                // $('#mod-login .mod-login-form').before('<div id="log_err" class="error">Error: No such user or bad password</div>');

                setTimeout(function () {
                    // remove err div
                // $("#log_err").remove();
                }, 7000);

                // var 2 bootstrap alert
                $('.alert.alert-danger').toggleClass("hide").toggleClass("show");

                setTimeout(function () {
                $('.alert.alert-danger').toggleClass("hide").toggleClass("show");

                }, 3000);


            })(jQuery);
            </script>
            <?php
}
    } else {
        echo "Niste uneli sve podatke";
    }
}
?>


<!-- register new user ----------------------------------------------------------------------------------->

<?php

if (isset($_POST['regsubmit'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $conn->real_escape_string($_POST['email']);
    // $email = $_POST['email'];
    $password = $_POST['password'];
    $confpassword = $_POST['confpassword'];

    if ($password !== $confpassword) {
        $error[] = "Paswords must match.";
    }
    if (checkIfUserExists($email)) {
        $error[] = "User already exists.";
    }
    // if (!proveriKorisnika($email, $password)) {

    // } else {
    //     $_SESSION['email'] = $email;
    // }

    if (!empty($error)) {
        // echo "</br>modal should folow </br>";
        ?>
                <script>

            (function ($){
            $('#mod-reg').modal('show');
            $('#mod-reg .mod-login-form').before('<?php echo display_errors($error); ?>');
            })(jQuery);

                </script>

        <?php
} else {

        if (dodajKorisnik($firstname, $lastname, $phone, $email, $password)) {
            ?>
            <script type="text/javascript">
            (function ($){

                // var 1 - popup with modal, autohide in 3 sec, change hide to show
                $('#msg-modal').modal('hide');
                $('#msg-modal .modal-header').after('<div id="log_err" class="modal-body msg">User added ! </br> <?php

            echo ' Login with email address: <span style="color:red">' . $_POST['email'] . '</span> and password!'

            ?></div>');


                setTimeout(function () {
                // enable next line to autohide
                // $("#msg-modal").modal("hide");

          }, 3000);


                // var 2 - bootstrap alert

                $('.alert.alert-success').toggleClass("hide").toggleClass("show");

                 setTimeout(function () {
                $('.alert.alert-success').toggleClass("hide").toggleClass("show");

          }, 3000);


                setTimeout(function () {
                location.replace("index.php");
          }, 3500);


            })(jQuery);

            </script>
            <?php

        } else {
            ?>
            <script type="text/javascript">
            (function ($){
                $('#msg-modal').modal('show');
                // $('#msg-login .modal-body').html('<div id="log_err" class="error">DB error</div>');
                $('#msg-modal .modal-header').after('<div id="log_err" class="modal-body error">DB Error !</div>');


                setTimeout(function () {
                $("#msg-modal").modal("hide");
                }, 3000);
                location.replace("index.php");

            })(jQuery);
            </script>
            <?php
}

    }
}
?>

<!-- check if should logout user ------------------------------------------------------------------------------ -->
<?php
if (isset($_POST['logout'])) {

    session_destroy(); //clears everything for the current user
    unset($_SESSION['email']);
    ?>
<script>

(function (){
    // window.location.reload();
    location.replace("index.php");
})();
</script>
    <?php
// header("Location: " . $_SERVER['PHP_SELF']);
    // header("Location: index.php");
    // die();
}
?>


<!-- check if email is in the session -------------------------------------------------------------------------------->
<?php

if (isset($_SESSION['email'])) {
    ?>

            <script>

            (function ($){
            $('#log-reg-btn').parent().html('<form class="" action="index.php" method="POST"><button type="submit" id="log-reg-btn" class="btn btn-warning" name="logout"> Logout <?php echo $_SESSION['email'] ?> </button></form>');
            })(jQuery);

            </script>

    <?php
}
?>


