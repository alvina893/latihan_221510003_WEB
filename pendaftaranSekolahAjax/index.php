<?php
session_start();
include 'config.php';

$mode = isset($_GET['mode']) ? $_GET['mode'] : 'signup';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up / Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        .form-box { max-width: 400px; margin: 40px auto; border-radius: 6px; box-shadow: 0 2px 8px #0001; }
        .nav-tabs {
            border-bottom: none;
            display: flex;
        }
        .nav-tabs .nav-item {
            flex: 1 1 0;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="m-5 text-center">PENDAFTARAN</h2>
    <div class="form-box bg-white">
        <ul class="nav nav-tabs mb-3 justify-content-between">
            <li class="nav-item">
                <a class="nav-link <?php if($mode=='signup') echo 'active'; ?>" href="?mode=signup">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($mode=='login') echo 'active'; ?>" href="?mode=login">Login</a>
            </li>
        </ul>
        <form id="authForm">
            <input type="hidden" name="action" value="<?php echo $mode; ?>">
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button class="btn btn-primary w-100" type="submit">
                <?php echo $mode == 'signup' ? '<i class=\'bi bi-person-plus\'></i> Sign up' : '<i class=\'bi bi-box-arrow-in-right\'></i> Login'; ?>
            </button>
        </form>
        <div id="message" class="alert mt-3 text-center d-none"></div>
    </div>
</div>
<script>
$(function() {
    $('#authForm').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var btn = form.find('button[type=submit]');
        btn.prop('disabled', true);
        $('#message').removeClass('alert-info alert-danger alert-success').addClass('d-none').text('');
        $.ajax({
            url: 'auth.php',
            method: 'POST',
            data: form.serialize(),
            dataType: 'json',
            success: function(res) {
                if (res.success) {
                    $('#message').removeClass('d-none').addClass('alert alert-success').text(res.message);
                    if (res.redirect) {
                        setTimeout(function() { window.location = res.redirect; }, 1000);
                    }
                } else {
                    $('#message').removeClass('d-none').addClass('alert alert-danger').text(res.message);
                }
            },
            error: function() {
                $('#message').removeClass('d-none').addClass('alert alert-danger').text('Server error.');
            },
            complete: function() {
                btn.prop('disabled', false);
            }
        });
    });
    // Switch mode on tab click
    $('.nav-link').on('click', function(e) {
        e.preventDefault();
        window.location = $(this).attr('href');
    });
});
</script>
</body>
</html> 