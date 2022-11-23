<?php
// //Import PHPMailer classes into the global namespace
// //These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// require 'vendor/autoload.php';

// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'RaihanGuntoro@gmail.com';                     //SMTP username
//     $mail->Password   = 'secret';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
//     $mail->setFrom('from@example.com', 'Mailer');
//     $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient

//     $kode_verifikasi = substr(number_format(time() * rand(),0,'',''),0,6);

//     //Content
//     $mail->Subject = 'KODE VERIFIKASI';
//     $mail->Body    = '<h6> Kode Verifikasi anda adalah  <b> : $kodeverifikasi : </b> </h6>';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <title>Register</title>
</head>

<body>

    <!-- The Modal -->
    <div class="modal fade br-15" style="margin-top: 12%;" id="ModalRegis">
        <div class="modal-dialog ">
            <div class="modal-content br-15" style="background-color: #FF6C20;">

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="<?= BASEURL ?>assets/dist/img/modal.png" width="200px" alt="">
                        </div>
                        <div class="col-md-7">
                            <center>
                                <h5 class="white mt-4">Anda Telah Terdaftar Silahkan Login</h5>
                                <button type="submit" class="btn btn-white br-10 mt-3" data-bs-dismiss="modal">OKE</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="d-flex ms-3 mt-3">
                <img src="<?= BASEURL ?>assets/dist/img/logojatis.png" width="40px" alt="">
                <h3 class="orange ms-2">Jatis Reader</h3>
            </div>
            <img src="<?= BASEURL ?>assets/dist/img/bg-register.png" style="width: 631px;" alt="">
        </div>

        <div class="col-md-6">
            <div class="container">
                <div class="d-flex" style="margin-left: 50%;">
                    <h6 class="mt-3 orange">Sudah punya akun?</h6>
                    <a href="../FINAL3/log" class="mt-2 btn btn-white2 br-15 ms-2">Masuk</a>
                </div>

                <div class="mt-5">
                    <h3 class="fw-bold">SELAMAT DATANG DI JATIS READER !</h3>

                    <form class="fw-bold" action="<?= BASEURL ?>Register/tambah" method="post">
                        <div class="mb-2 mt-4 ">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control form-register br-10" id="nama" aria-describedby="nama" name="nama">
                        </div>
                        <div class="mb-2">
                            <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control form-register br-10" id="nama_pengguna" aria-describedby="nama_pengguna" name="nama_pengguna">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control form-register br-10" id="" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control form-register br-10" id="myinput" name="password">
                            <span class="eye d-flex " style="position: absolute; right: 16%; margin-top: -27px" onclick="myFunction()">
                                <i id="hide1" class="fa fa-eye"></i>
                                <i id="hide2" class="fa fa-eye-slash"></i>
                            </span>
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control form-register br-10" id="myinput2" name="passwordConfirm">
                            <span class="eye d-flex " style="position: absolute; right: 16%; margin-top: -27px" onclick="myFunction2()">
                                <i id="hide11" class="fa  fa-eye"></i>
                                <i id="hide22" class="fa  fa-eye-slash"></i>
                            </span>
                        </div>
                        <div class="mb-2 form-check orange">
                            <input type="checkbox" class="form-check-input" id="">
                            <label class="form-check-label" for="">Ingat aku</label>
                        </div>
                        <button type="submit" class="mt-3 btn btn-white3 br-15" data-bs-toggle="modal" data-bs-target="#ModalRegis">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myinput");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");
            if (x.type === 'password') {
                x.type = "text";
                y.style.display = "none";
                z.style.display = "block";;

            } else {
                x.type = "password";
                y.style.display = "block";
                z.style.display = "none"
            }
        }

        function myFunction2() {
            var x = document.getElementById("myinput2");
            var y = document.getElementById("hide11");
            var z = document.getElementById("hide22");
            if (x.type === 'password') {
                x.type = "text";
                y.style.display = "none";
                z.style.display = "block";;

            } else {
                x.type = "password";
                y.style.display = "block";
                z.style.display = "none"
            }
        }
    </script>

    <footer class="" style="text-align: center;  bottom: 0">
        <h6>©2022 Jatis Mobile. All rights reserved</h6>
    </footer>
</body>

</html>