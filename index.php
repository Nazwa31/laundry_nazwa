<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 50%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }


        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="nik"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="aksi.php" method="POST">
            <img class="mb-4" src="cute.jpg" alt="" width="100" height="100">
            <!-- Baris untuk nofitikasi -->
            <?php if(isset($_GET['pesan'])) : ?>
            
                <?php 
                if($_GET['pesan'] == "nik") {
                    echo "
                    <div class='alert alert-danger'>
                        Silahkan masukan username  yang benar!
                    </div>";
                }
                else if($_GET['pesan'] == "pass") {
                    echo "
                    <div class='alert alert-danger'>
                        Silahkan masukan Password yang benar!
                    </div>";
                }
            ?>
            
            <?php else : ?>
                <h1 class="h3 mb-3 fw-normal">Login</h1>
            <?php endif; ?>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" id="floatingInput" placeholder="username">
                <label for="floatingInput">username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingNamaLengkap" placeholder="Password">
                <label for="floatingPassword">password</label>
            </div>


            <a href="signup.php" class="w-70 btn btn-lg btn-primary mt-4" >Pengguna Baru</a>
            <button class="w-30 btn btn-lg btn-primary mt-4" type="submit" name="submit">Masuk</button>
            <p class="mt-5 mb-3 text-muted">&copy; SMK PGRI TELAGASARI</p>
        </form>
    </main>
</body>

</html>