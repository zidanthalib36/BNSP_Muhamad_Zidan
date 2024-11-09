<!DOCTYPE html>
<html>
  <head>
    <title>Perhitungan Kredit mobil</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <style>
    
      .carousel-inner img {
        width: 100%;
        height: auto;
        object-fit: contain;
      }
    </style>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container sticky-top">
        <img
          src="../Assets/Tesla_Thalib_logo.png"
          width="5%"
          height="5%"
          alt=""
        />
        <a class="navbar-brand" href="#">Thalib Automotive</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://wa.me/6282139067636?text=Halo,%20saya%20ingin%20memesan%20produk%20anda">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#credit">Credit Mobil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Slider -->
    <div
      id="carouselExampleCaptions"
      class="carousel slide pt-5"
      data-bs-ride="carousel"
      data-bs-interval="3000"    
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner px-5">
        <div class="carousel-item active">
          <img
            src="../Assets/cyber.jpg"
            class="d-block w-100"
            alt="carousel-img"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Thalib Cyber Truck</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../Assets/ModelS.jpg"
            class="d-block w-100"
            alt="carousel-img"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Thalib Model S</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../Assets/Model3.jpg"
            class="d-block w-100"
            alt="carousel-img"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Thalib Model 3</p>
          </div>
        </div>
      </div>
    </div>
    <br>
      <!-- Input data -->
    <div class="container mt-5">
      <h4 class="mb-5 text-center" id="credit">Perhitungan Kredit Mobil</h4>
      <b>Silahkan input data di bawah:</b>
      
      <br /><br />
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        <b>Harga Mobil</b>
        <div class="input-group mb-3">
          <span class="input-group-text">Rp.</span>
          <input type="Number" name="hargamobil" placeholder="Masukkan harga mobil" required class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">.00</span>
        </div>
        <b>DP</b>
        <div class="input-group mb-3">
          <input type="Number" name="dp" placeholder="Masukkan DP (uang muka)" required class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">%</span>
        </div>
        <b>Tenor</b>
        <div class="input-group mb-3">
          <input type="Number" name="tenor" placeholder="Masukkan Lama tenor" required class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">Tahun</span>
        </div>
        <input
          type="submit"
          name="kirim"
          value="Hitung"
          class="btn btn-primary"
        />
      </form>
      <!-- Proses perhitungan   -->
      <?php
		if(isset($_POST['kirim'])) {
      $hargamobil = $_POST['hargamobil'];
			$dp = $_POST['dp'];
			$tenor = $_POST['tenor' ];

			$nominalbunga = 0.2 * $hargamobil;
			$nominaldp = ($dp / 100) * $hargamobil;
			$jumlahtenor = $tenor * 12;

			$hargajual = $hargamobil + $nominalbunga;
			$angsuranperbulan = ($hargajual - $nominaldp) / $jumlahtenor;
			?>
      <!-- Menampilkan hasil dari perhitungan di atas -->
      <table class="table mt-4">
        <tr>
          <td>Harga mobil</td>
          <td>:</td>
          <td>
            Rp.
            <?php echo number_format($hargamobil, 2, ",", ".");?>
          </td>
        </tr>
        <tr>
          <td>Bunga</td>
          <td>:</td>
          <td>
            20% (Rp.
            <?php echo number_format($nominalbunga, 2, ",", ".");?>)
          </td>
        </tr>
        <tr>
          <td>DP</td>
          <td>:</td>
          <td>
            <?php echo $dp;?>
            % (Rp.
            <?php echo number_format($nominaldp, 2, ",", ".");?>)
          </td>
        </tr>
        <tr>
          <td>Tenor</td>
          <td>:</td>
          <td>
            <?php echo $tenor;?>
            Tahun (<?php echo $jumlahtenor;?>
            Bulan)
          </td>
        </tr>
        <tr>
          <td>Angsuran Per Bulan</td>
          <td>:</td>
          <td>
            Rp.
            <?php echo number_format($angsuranperbulan, 2, ",", ".");?>
            / Bulan
          </td>
        </tr>
      </table>
      <?php
		}
		?>
    <br>
    <br>

      <footer>
        <div class="text-center">
          <hr>
          <p>
            Tesla © 2024 Privacy & Legal Vehicle Recalls Contact News Get
            Updates Locations
          </p>
        </div>
      </footer>
    </div>
  </body>
</html>
