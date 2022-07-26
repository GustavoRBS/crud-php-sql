<?php
session_start();

if (isset($_SESSION['msg-danger'])) :
?>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-4">
                <div class="alert alert-danger" role="alert"><?php echo $_SESSION['msg-danger']; ?></div>
            </div>
        </div>
    </div>
<?php
endif;
unset($_SESSION['msg-danger']);

if (isset($_SESSION['msg-success'])) :
?>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-4">
                <div class="alert alert-success" role="alert"><?php echo $_SESSION['msg-success']; ?></div>
            </div>
        </div>
    </div>
<?php
endif;
unset($_SESSION['msg-success']);
?>