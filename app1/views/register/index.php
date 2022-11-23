<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style.css">
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
                            <img src="../img/modal.png" width="200px" alt="">
                        </div>
                        <div class="col-md-7">
                            <center>
                                <h5 class="white mt-4">Anda Telah Terdaftar Silahkan Login</h5>
                                <button type="button" class="btn btn-white br-10 mt-3" data-bs-dismiss="modal">OKE</button>
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
                <img src="../img/logojatis.png" width="40px" alt="">
                <h3 class="orange ms-2">Jatis Reader</h3>
            </div>
            <img src="../img/bg-register.png" style="width: 631px;" alt="">
        </div>

        <div class="col-md-6">
            <div class="container">
                <div class="d-flex" style="margin-left: 50%;">
                    <h6 class="mt-3 orange">Sudah punya akun?</h6>
                    <button type="submit" class="mt-2 btn btn-white2 br-15 ms-2">Masuk</button>
                </div>

                <div class="mt-5">
                    <h3 class="fw-bold">SELAMAT DATANG DI JATIS READER !</h3>

                    <form class="fw-bold ">
                        <div class="mb-2 mt-4 ">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control form-register br-10" id="" aria-describedby="">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Nama Pengguna</label>
                            <input type="text" class="form-control form-register br-10" id="" aria-describedby="">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control form-register br-10" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control form-register br-10" id="myinput">
                            <span class="eye d-flex " style="position: absolute; right: 16%; margin-top: -27px" onclick="myFunction()">
                                <i id="hide1" class="fa  fa-eye"></i>
                                <i id="hide2" class="fa  fa-eye-slash"></i>
                            </span>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control form-register br-10" id="myinput">
                            <span class="eye d-flex " style="position: absolute; right: 16%; margin-top: -27px" onclick="myFunction()">
                                <i id="hide1" class="fa  fa-eye"></i>
                                <i id="hide2" class="fa  fa-eye-slash"></i>
                            </span>
                        </div>
                        <div class="mb-2 form-check orange">
                            <input type="checkbox" class="form-check-input" id="">
                            <label class="form-check-label" for="">Ingat aku</label>
                        </div>
                        <button type="button" class="mt-3 btn btn-white3 br-15" data-bs-toggle="modal" data-bs-target="#ModalRegis">Masuk</button>
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
    </script>
</body>

</html>