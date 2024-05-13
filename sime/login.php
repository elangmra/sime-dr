<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Login</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    background-color: #007F73;
    font-family: 'Poppins', sans-serif;
    color: #fff;
    margin: 0; /* Menghilangkan margin default */
  }
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }
  .login-container {
    background-color: #FFF455;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    width: 500px;
  }
  .form-container {
    background-color: #FFC700;
    padding: 20px;
    border-radius: 10px;
    margin-left: 30px;
    margin-right: 30px;
  }

  /* Responsif */
  @media (max-width: 768px) {
    .container {
      margin-top: 20%;
    }
    .login-container {
      width: 90%;
      margin: 0 auto;
    }
  }

  @media (max-width: 576px) {
    .container {
      margin-top: 30%;
    }
    .login-container {
      width: 80%;
      margin: 0 auto;
    }
    .form-container {
      margin-left: 10px;
      margin-right: 10px;
    }
  }
</style>

</head>
<body>

<div class="container">
  <h2 class="mt-5 mb-2">WELCOME TO</h2>
  <h5 class="mb-4 text-center">SISTEM INFORMASI MANAJEMEN EKSTRAKULIKULER</h5>
  <div class="login-container px-5">
    <h2 class="mt-3 mb-4" style="color: #007F73; text-align: center;">LOGIN</h2>
    <div class="form-container mx-8">
      <form action="/login" method="post" id="loginForm">
        <div class="form-label mb-3" style="color: black;">
          Email
          <input type="email" placeholder="Masukan email" class="form-control py-2"  id="email" name="email" required>
        </div>
        <div class="form-label mb-3" style="color: black;">
          Password
          <input type="password" placeholder="Masukan password" class="form-control py-2" id="password" name="password" required>
        </div>
        <div class="mb-3" style=" color: black;">
          Pilih Level
          <div class="dropdown ">
            <a class="btn btn-secondary border-0 py-2" type="submit"  style="background-color: white; color: black" id="loginButton">Level</a>
            <button class="btn btn-secondary dropdown-toggle py-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#" data-value="admin">Admin</a></li>
              <li><a class="dropdown-item" href="#" data-value="anggota">Anggota</a></li>
              <li><a class="dropdown-item" href="#" data-value="pembina">Pembina</a></li>
              <li><a class="dropdown-item" href="#" data-value="kepala_sekolah">Kepala Sekolah</a></li>
            </ul>
            <input type="hidden" name="level" id="selectedLevel">
          </div>
        </div>
        <div class="card border-0 my-3">
          <button class="btn btn-secondary border-0" type="submit" style="background-color: #4CCD99;" id="loginButton">Login</button>
        </div>
        <div class="card border-0 my-3">
          <a href="register.php" class="btn btn-secondary border-0" style="background-color: white; color: #007F73;">Register</a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript untuk mengatur pilihan level -->
<script>
  const dropdownItems = document.querySelectorAll('.dropdown-item');
  const selectedLevelInput = document.getElementById('selectedLevel');
  const loginForm = document.getElementById('loginForm');

  dropdownItems.forEach(item => {
    item.addEventListener('click', function() {
      const selectedValue = this.getAttribute('data-value');
      selectedLevelInput.value = selectedValue;
      document.getElementById('dropdownMenuButton').textContent = this.textContent;
    });
  });

  // Menambahkan event listener untuk form login
  loginForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Menghentikan pengiriman form secara default

    // Menunda pengiriman form selama 2 detik untuk simulasi proses login
    setTimeout(function() {
      // Mengganti URL dengan halaman dashboard sesuai level yang dipilih
      const selectedLevel = selectedLevelInput.value;
      let redirectUrl = '';
      switch (selectedLevel) {
        case 'anggota':
          redirectUrl = 'Anggota/dashboard.php';
          break;
        case 'admin':
          redirectUrl = 'Admin/dashboard.php';
          break;
        case 'pembina':
          redirectUrl = 'Pembina/dashboard.php';
          break;
        case 'kepala_sekolah':
          redirectUrl = 'Kepala_Sekolah/dashboard.php';
          break;
        default:
          redirectUrl = 'dashboard.php';
          break;
      }
      window.location.href = redirectUrl;
    }, 2000);
  });
</script>
</body>
</html>
