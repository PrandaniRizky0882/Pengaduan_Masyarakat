<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
    <link rel="stylesheet" href="../../assets/css/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/1_style.css">
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Nik</label>
                  <input type="text" id="nik" name="nik" class="form-control form-control-lg" placeholder="Nik" required/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Nama</label>
                  <input type="text" id="nama" name="nama" class="form-control form-control-lg" placeholder="Nama" required/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Username</label>
                  <input type="email" id="username" id="username" class="form-control form-control-lg" placeholder="Example@gmail.com" required/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="***************" required/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Ulangi Password</label>
                  <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-lg" placeholder="***************" required/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Telephone</label>
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" placeholder="0xxxxxxxxxxxx"/>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="../masyarakat/login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>






<!-- <form action="../../MasyarakatController.php" method="POST">
        <label for="nik">NIK</label><br>
        <input type="text" name="nik" id="nik" required></br>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" required></br>
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" required></br>
        <label for="telp">Telepon</label><br>
        <input type="text" name="telp" id="telp" required></br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required></br>
        <label for="confirm_password">Konfirmasi Password</label><br>
        <input type="password" name="confirm_password" id="confirm_password" required></br>
        <button type="submit" name="register">Register</button>
        </form>
    </div> -->