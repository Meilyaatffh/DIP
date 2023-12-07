<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Tambahkan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <style>
        .form-field {
            position: relative;
        }

        #pwd {
            padding-right: 35px; /* Sesuaikan padding agar ikon dapat muat */
        }

        .toggle-password {
            position: absolute;
            right: 10px; /* Sesuaikan jarak dari kanan */
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <link rel="stylesheet" href="/css/login.css">
    <div class="wrapper text-center">
        <div class="logo">
            <img src="logo smk.png" alt="">
        </div>
        <div class="mt-4 name">
            Pembayaran SPP
        </div>
        <form class="p-3 mt-3" action="proses_login.php" method="post">
            <div class="form-field d-flex align-items-center">
                <input type="text" name="nama_siswa" id="nama_siswa" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <input type="password" name="password" id="pwd" placeholder="Password">
                <span class="toggle-password" onclick="togglePassword()">
                    <i id="eye-icon" class="far fa-eye"></i>
                </span>
            </div>
            <button class="btn mt-3">Login</button>
        </form>
    </div>
    
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("pwd");
            var eyeIcon = document.getElementById("eye-icon");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
