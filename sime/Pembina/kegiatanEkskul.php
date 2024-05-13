<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <?php include 'header.php'; ?>

<!-- Start Content -->
<div class="content">
  <div class="container justify-content-center ">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="profile-card" style="background-color: #A6A6A6;">
          <div class="container" style="background-color: #D9D9D9;">
            <!-- Start Tabel prestasi -->
            <div class="container p-4" >
              <h2 class="modal-title justify-content-center fw-bold" >JADWAL KEGIATAN EKSTRAKULIKULER</h2>
              <p class="modal-title justify-content-center fw-bold mb-4" >PRAMUKA</p>
              <table class="table table-bordered" style="background-color: #FFFFFF; border: 2px;">
                <thead>
                  <tr style="background-color: #FFF455; text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Hadir</th>
                    <th scope="col">Deskripsi Kegiatan</th>
                    <th scope="col">Detail Absen</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>MINGGU Ke - 1</td>
                    <td>17/4/2024</td>
                    <td>17</td>
                    <td>Mengadakan workshop seni dan keterampilan, seperti melukis, membuat kerajinan tangan, atau memasak makanan khas pramuka.</td>
                    <td>
                      <div class="container d-flex justify-content-center align-items-center">           
                        <a href="absensi.php" type="button" class="btn btn-primary px-4 mx-3" style="background-color: #0094FF;">Detail</a> 
                      </div>
                    </td>
                    <td>
                      <div class="container d-flex justify-content-center align-items-center">           
                         <a href="#" class="btn" style="background-color: #FFC700; color: #ffffff; border-radius: 7px;" data-bs-toggle="modal" data-bs-target="#ubah">
                         <img src="../img/editPutih.png" alt="img-edit" width="18" height="20"></a>
                      </div>
                    </td>
                    <td>
                      <div class="container d-flex justify-content-center align-items-center">            
                         <a href="#" class="btn" style="background-color: #AF0B00; color: #ffffff; border-radius: 7px;">
                         <img src="../img/hapus.png" alt="img-edit" width="18" height="20"></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>MINGGU Ke - 2</td>
                    <td>24/4/2024</td>
                    <td>20</td>
                    <td>Menyelenggarakan acara pertunjukan bakat di antara anggota pramuka untuk memperlihatkan bakat-bakat yang dimiliki.</td>
                    <td>
                      <div class="container d-flex justify-content-center align-items-center">           
                        <a href="absensi.php" type="button" class="btn btn-primary px-4 mx-3" style="background-color: #0094FF;">Detail</a> 
                      </div>
                    </td>
                    <td>
                      <div class="container d-flex justify-content-center align-items-center">            
                         <a href="#" class="btn" style="background-color: #FFC700; color: #ffffff; border-radius: 7px;" data-bs-toggle="modal" data-bs-target="#ubah">
                         <img src="../img/editPutih.png" alt="img-edit" width="18" height="20"></a>
                      </div>
                    </td>
                    <td>
                      <div class="container d-flex justify-content-center align-items-center">            
                         <a href="#" class="btn" style="background-color: #AF0B00; color: #ffffff; border-radius: 7px;" >
                         <img src="../img/hapus.png" alt="img-edit" width="18" height="20"></a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>      
            </div>
            <!-- Finish Tabel prestasi -->
            <div class="modal-footer">
              <button class="btn btn-primary border-0 px-4 m-3" style="background-color: #009521; border-radius: 7px;" data-bs-toggle="modal" data-bs-target="#tambahkan">
                <b>Tambahkan</b>
              </button>
            </div> 
          </div>
          <div class="modal-footer">
            <a href="anggotaNilai.php" class="btn px-4 mt-4" style="background-color: #FFC700; color: #373737; border-radius: 7px;">
               <b>Laporkan</b>
            </a>
          </div>
        </div>
      </div>
    </div> 
  </div>      
</div>      
<!-- Finish Content -->

<!-- Start Popup 1 -->
<div id="tambahkan" class="modal fade" tabindex="-1" aria-labelledby="dataDisimpan" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content px-4">
      <div class="modal-header">
        <div class="col-md-3"></div>
        <h5 class="modal-title justify-content-between fw-bold col-lg-8 text-center">TAMBAHKAN KEGIATAN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="namaEkskul" class="form-label">Nama Kegiatan</label>
            <input type="text" class="form-control" id="namaEkskul">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Tanggal</label>
            <input type="nama" class="form-control" id="anggota">
          </div>
          <div class="mb-3">
            <label for="kelas" class="form-label">Deskripsi</label>
            <textarea class="form-control" placeholder="ketik deskripsi kegiatan disini" id="floatingTextarea2" style="height: 200px"></textarea>
          </div>
          <div class="modal-footer d-flex">
            <button type="button" class="btn btn-danger me-3" data-bs-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary px-4 mx-3" style="background-color: #007F73;" data-bs-toggle="modal" data-bs-target="#konfirmasiModal">Selanjutnya</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Finish Popup 1 -->

<!-- Start Popup 2 -->
<div id="ubah" class="modal fade" tabindex="-1" aria-labelledby="dataDisimpan" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content px-4">
      <div class="modal-header">
        <div class="col-md-3"></div>
        <h5 class="modal-title justify-content-between fw-bold col-lg-8 text-center">UBAH KEGIATAN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="namaEkskul" class="form-label">Nama Kegiatan</label>
            <input type="text" class="form-control" id="namaEkskul">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Tanggal</label>
            <input type="nama" class="form-control" id="anggota">
          </div>
          <div class="mb-3">
            <label for="kelas" class="form-label">Deskripsi</label>
            <textarea class="form-control" placeholder="ketik deskripsi kegiatan disini" id="floatingTextarea2" style="height: 200px"></textarea>
          </div>
          <div class="modal-footer d-flex">
            <button type="button" class="btn btn-danger me-3" data-bs-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary px-4 mx-3" style="background-color: #007F73;" data-bs-toggle="modal" data-bs-target="#konfirmasiModal2">Selanjutnya</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Finish Popup 2 -->

<!-- Start Popup 3 -->
<div id="konfirmasiModal" class="modal fade" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="konfirmasiModalLabel">Kirimkan Absensi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center my-5">
        <b>Selanjutnya kirimkan form absensi kepada Anggota</b><br>Apakah Anda yakin ingin mengirimkan form kegiatan ini kepada anggota?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
        <a href="kegiatanEkskul.php" type="submit" class="btn btn-primary px-4 mx-3" style="background-color: #007F73;">Ya</a>
      </div>
    </div>
  </div>
</div>
<!-- Finish Popup 3 -->

<!-- Start Popup 4 -->
<div id="konfirmasiModal2" class="modal fade" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="konfirmasiModalLabel">Konfirmasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center my-5">
        Apakah Anda yakin ingin mengubah kegiatan ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
        <a href="kegiatanEkskul.php" type="submit" class="btn btn-primary px-4 mx-3" style="background-color: #007F73;">Ya</a>
      </div>
    </div>
  </div>
</div>
<!-- Finish Popup 4 -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script -->
<script>
  // Ambil semua elemen dropdown item
  const dropdownItems = document.querySelectorAll('.dropdown-item');

  // Loop melalui setiap item dropdown
  dropdownItems.forEach(item => {
    // Tambahkan event listener ketika item dropdown diklik
    item.addEventListener('click', function() {
      // Ambil teks dari item dropdown yang dipilih
      const selectedText = this.textContent;
      
      // Ubah teks dropdown Ekstrakulikuler sesuai dengan teks yang dipilih
      document.querySelector('.dropdown-toggle').textContent = selectedText;
    });
  });
</script>

</body>
</html>
