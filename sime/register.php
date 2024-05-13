<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        padding: 0 20px; /* Menambahkan padding agar konten tidak terlalu dekat dengan tepi layar */
        margin-top: 8%;
    }
    .login-container {
        background-color: #FFF455;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        width: 90%; /* Mengubah lebar container agar responsif */
        max-width: 500px; /* Batasi lebar maksimum agar tidak terlalu lebar pada layar besar */
    }
    .form-container {
        background-color: #FFC700;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px; /* Menambahkan margin atas agar tidak terlalu dekat dengan container di atasnya */
    }

    /* Responsif */
    @media (max-width: 576px) {
        .login-container {
            width: 100%; /* Mengubah lebar container menjadi 100% pada layar yang lebih kecil dari 576px */
            max-width: none; /* Menghapus batasan lebar maksimum */
        }
    }
</style>

</head>
<body>

<div class="container">
    <h3 class="">Register</h3>
    <div class="login-container px-6">
        <div class="form-container mx-8">
            <form action="/login" method="post">
                <div class="form-label mb-2" style="color: black;">
                    Nama Lengkap
                    <input type="text" placeholder="Masukan nama lengkap" class="form-control py-2"  id="namalengkap" name="namalengkap" required>
                </div>
                <div class="form-label mb-2" style="color: black;">
                    Email
                    <input type="email" placeholder="Masukan email" class="form-control py-2"  id="email" name="email" required>
                </div>
                <div class="form-label mb-2" style="color: black;">
                    Password
                    <input type="password" placeholder="Masukan password" class="form-control py-2" id="password" name="password" required>
                </div>
                <div class="form-label mb-2" style="color: black;">
                    Ketik Ulang Password
                    <input type="password" placeholder="Ketik ulang password" class="form-control py-2" id="ulangpassword" name="ulangpassword" required>
                </div>
                <div class="mb-2" style="color: black;">
                    Pilih Level
                    <div class="dropdown">
                        <a class="btn btn-secondary border-0 py-2" type="submit" style="background-color: white; color: black" id="levelButton">Level</a>
                        <button class="btn btn-secondary dropdown-toggle py-2" type="button" id="dropdownMenuButtonLevel" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu dropdown-menu-level" aria-labelledby="dropdownMenuButtonLevel">
                            <li><a class="dropdown-item level" href="#" data-value="admin">Admin</a></li>
                            <li><a class="dropdown-item level" href="#" data-value="anggota">Anggota</a></li>
                            <li><a class="dropdown-item level" href="#" data-value="pembina">Pembina</a></li>
                            <li><a class="dropdown-item level" href="#" data-value="kepala_sekolah">Kepala Sekolah</a></li>
                        </ul>
                        <input type="hidden" name="level" id="selectedLevel">
                    </div>
                </div>
                <div class="mb-2" style="color: black;">
                    Pilih Ekstrakulikuler
                    <div class="dropdown">
                        <a class="btn btn-secondary border-0 py-2" type="submit" style="background-color: white; color: black" id="ekstrakulikulerButton">Ekstrakulikuler</a>
                        <button class="btn btn-secondary dropdown-toggle py-2" type="button" id="dropdownMenuButtonEkstrakulikuler" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu dropdown-menu-ekskul" aria-labelledby="dropdownMenuButtonEkstrakulikuler">
                            <li><a class="dropdown-item ekskul" href="#" data-value="pramuka">Pramuka</a></li>
                            <li><a class="dropdown-item ekskul" href="#" data-value="paskibra">Paskibra</a></li>
                            <li><a class="dropdown-item ekskul" href="#" data-value="pmr">PMR</a></li>
                        </ul>
                        <input type="hidden" name="ekstrakulikuler" id="selectedEkstrakulikuler">
                    </div>
                </div>
                <div class="d-flex justify-content-end"> <!-- Menggunakan justify-content-between untuk memindahkan elemen ke kanan -->
                        <a href="login.php" class="btn btn-danger border-0 me-3"">Kembali</a>
                        <button class="btn btn-secondary border-0 mx-3" type="submit" style="background-color: #007F73;"" id="registerButton">Register</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript untuk mengatur pilihan level -->
<script>
    const dropdownItemsLevel = document.querySelectorAll('.level');
    const selectedLevelInput = document.getElementById('selectedLevel');
    const dropdownItemsEkstrakulikuler = document.querySelectorAll('.ekskul');
    const selectedEkstrakulikulerInput = document.getElementById('selectedEkstrakulikuler');
    const registerButton = document.getElementById('registerButton');

    dropdownItemsLevel.forEach(item => {
        item.addEventListener('click', function() {
            const selectedValue = this.getAttribute('data-value');
            selectedLevelInput.value = selectedValue;
            document.getElementById('dropdownMenuButtonLevel').textContent = this.textContent;
        });
    });

    dropdownItemsEkstrakulikuler.forEach(item => {
        item.addEventListener('click', function() {
            const selectedValue = this.getAttribute('data-value');
            selectedEkstrakulikulerInput.value = selectedValue;
            document.getElementById('dropdownMenuButtonEkstrakulikuler').textContent = this.textContent;
        });
    });

    // Menambahkan event listener untuk tombol register
    registerButton.addEventListener('click', function() {
        // Menonaktifkan tombol register
        registerButton.disabled = true;

        // Menambahkan animasi loading
        registerButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Loading...';
        setTimeout(function() {
            // Mengganti URL dengan halaman tujuan
            window.location.href = 'registerselesai.php';
        }, 2000);
    });
</script>
</body>
</html>
