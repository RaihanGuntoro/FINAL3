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
    </link>
    <title>LOGIN</title>
</head>

<body>

    <!-- The Modal -->
    <div class="modal fade br-15" style="margin-top: 12%;" id="myModal">
        <div class="modal-dialog ">
            <div class="modal-content br-15" style="background-color: #FF6C20;">

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="<?= BASEURL ?>assets/dist/img/modal.png" width="200px"  alt="">
                        </div>
                        <div class="col-md-7">
                            <center>
                                <h5 class="white mt-3">Berhasil !!!</h5>
                                <h5 class="white mt-3">Selamat Datang</h5>
                                <button type="submit" class="btn btn-white br-10 mt-3">OKE</button>
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
            <center>
                <img src="<?= BASEURL ?>assets/dist/img/bg-login.png" style="width: 536px; margin-top: 14%;" alt="">
            </center>

        </div>

        <div class="col-md-6">
            <div class="bg-orange">
                <div class="d-flex justify-content-end me-3 mt-3">
                    <h6 class="white me-3 mt-2">Belum punya akun?</h6>
                    <a href="../FINAL3/register" class="btn btn-white3 br-15">Daftar sini !</a>
                </div>

                <div class="card card-login">
                    <legend class="white text-center h2 fw-bold mb-4">LOGIN</legend>
                    <div class="card-body">

                        <form action="<?= BASEURL ?>Log/login" method="post">

                            <div class="form-group mb-3">

                                <div class="form-group mb-4">
                                    <label for="nama_pengguna" class="h5 white">Nama Pengguna </label>
                                    <input type="text" name="nama_pengguna" placeholder="Masukkan Nama Pengguna" class="form-control fst-italic  br-10" aria-describedby="nama_pengguna">
                                </div>

                                <div class="form-group mb-2">
                                    <label for="password" class="h5 white">Password </label>
                                    <div class="d-flex">
                                        <input type="password" name="password" placeholder="Masukkan Password" id="myinput" class="form-control fst-italic br-10">
                                        <span class="eye d-flex " style="position: absolute; right: 17%; margin-top: 10px" onclick="myFunction()">
                                            <i id="hide1" class="fa  fa-eye"></i>
                                            <i id="hide2" class="fa  fa-eye-slash"></i>
                                        </span>
                                    </div>


                                </div class="form-group">

                                <div class="mb-3 form-check">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label white " for="exampleCheck1">Ingat aku</label>
                                        </div>
                                        <a href="" class="white h6 fw-bold" style="text-decoration: none;">Lupa Password?</a>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-white fw-bold br-15 mb-4" data-bs-toggle="modal" data-bs-target="#myModal">Masuk</button>

                                <div class="form-group">
                                    <center>
                                        <img src="<?= BASEURL ?>assets/dist/img/google.png" width="59px" class="ms-3" alt="">
                                    </center>

                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>

        <footer class=" mt-0" style="text-align: center; position: absolute;  bottom: 0">
            <h6>©2022 Jatis Mobile. All rights reserved</h6>
        </footer>

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
        </script>
</body>

</html>