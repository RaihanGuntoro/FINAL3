<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Lupa Password</title>
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
                            <img src="../img/modal.png" width="200px" alt="">
                        </div>
                        <div class="col-md-7">
                            <center>
                                <h5 class="white mt-4">Kode verifikasi telah terkirim. Cek email anda</h5>
                                <button type="button" class="btn btn-white br-10 mt-3" data-bs-dismiss="modal">OKE</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <h1 class="orange fw-bold mb-3 mt-5">LUPA SANDI</h1>
                <div class="card card-lupa ms-2 mt-2 br-10"></div>
                <div class="card  mt-5 card-lupa2 br-10">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="../img/lupapassword.png" width="400px" class="ms-5" alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="container" style="width: 70%; margin-top: 20%">
                                <h4 class="mb-3">Email</h4>
                                <form action="">
                                    <input type="email" style="border-color: #EC7335; width: 400px" placeholder="Masukkan alamat email" class="form-control fst-italic br-10" id="" aria-describedby="">
                                </form>
                                <center>
                                    <button type="button" class=" ms-3 btn btn-white3 mt-4 br-15"  data-bs-toggle="modal" data-bs-target="#myModal">Kirim</button>
                                </center>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <center>
        <footer class=" " style="margin-top: 100px">
            <h6>©2022 Jatis Mobile. All rights reserved</h6>
        </footer>
    </center>

</body>

</html>