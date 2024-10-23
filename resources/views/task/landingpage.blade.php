<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="landing.css" />
    <title>InstaMoment</title>
  </head>
  <body>
    <header>
      <div class="navbar">
        <div class="container">
          <div class="box-navbar">
            <div class="logo">
              <h1>InstaMoment</h1>
            </div>
            <ul class="menu">
              <li><a href="#home">Home</a></li>
              <li><a href="#services">Koleksi</a></li>
              <li><a href="#pantai">Menu</a></li>
              <li class="active"><a href="#Contact">Contact Us</a></li>
            </ul>
            <i class="fa-solid fa-bars menu-bar"></i>
          </div>
        </div>
      </div>

      <div class="hero">
        <div class="container">
          <div class="box-hero">
            <div class="box">
              <h1>
                Jasa Foto <br />
                dan Cetak Foto
              </h1>
              <p>Tuangkan moment-moment indah dalam bentuk polaroid, jangan sampai kita lewatkan momen berharga ini</p>
              <button>Selengkapnya</button>
            </div>
            <div class="box">
            <img src="{{ asset('img/IMGawal.png') }}">
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="services" id="services">
      <div class="container">
        <div class="box-services">
          <div class="box">
            <i class="fa-solid fa-coins"></i>
            <h4>Harga Terjangkau</h4>
            <h5>Murah Mulai dari 13 ribu sudah bisa cetak polaroid</h5>
          </div>
          <div class="box">
            <i class="fa-solid fa-certificate"></i>
            <h4>Sudah Tersertifikasi</h4>
            <h5>Sudah Tersertifikasi, jadi jangan ragu</h5>
          </div>
          <div class="box">
            <i class="fa-solid fa-people-roof"></i>
            <h4>Aman dan Ramah</h4>
            <h5>Terjamin Aman dan sudah pasti Ramah</h5>
          </div>
        </div>
      </div>
    </div>
    

    <div class="foto" id="foto">
      <div class="container">
        <div class="box-foto">
          <div class="box">
          <img src="{{ asset('img/IMGfoto1.jpg') }}">
            
            <h3>Cetak Foto</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
          <img src="{{ asset('img/IMGfoto2.jpg') }}">
            <h3>Edit Foto</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
          <img src="{{ asset('img/IMGfoto3.jpg') }}">
            <h3>Cetak + edit</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
          <img src="{{ asset('img/IMGfoto4.jpg') }}">
            <h3>Contoh Foto</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
          <img src="{{ asset('img/IMGfoto5.jpg') }}">
            <h3>Contoh Foto</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
          <img src="{{ asset('img/IMGfoto6.jpg') }}">
            <h3>Contoh foto</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
        </div>
      </div>
    </div>
    

    <div class="Contact" id="Contact">
        <div class="container">
          <div class="box-Contact">
            <h1>
              ada Moment Berharga? <br />
              Segera Cetak Polaroid!
            </h1>
            <h3>Klik Link di Bawah Ini!</h3>
      
            
            <a href="https://api.whatsapp.com/qr/EF4JHP345SBOO1?autoload=1&app_absent=0" target="_blank">
              <button><i class="fa-brands fa-whatsapp"></i> Whatsapp</button>
            </a>
      
            
            <a href="">
              <button><i class="fa-regular fa-envelope"></i> Gmail</button>
            </a>
      
            
            <a href="https://www.instagram.com/instax_moment.id?igsh=MXhncWY1ajB4ZDVjdw==" target="_blank">
              <button><i class="fa-brands fa-instagram"></i> Instagram</button>
            </a>
            
          </div>
        </div>
      </div>
      

    <div class="footer">
      <div class="container">
        <div class="box-footer">
          <div class="box">
            <h2>InstaMoment</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eius rerum quisquam perspiciatis obcaecati, quasi temporibus aperiam iusto aliquam doloremque.</p>
          </div>
          <div class="box">
            <h3>Menu</h3>
            <a href="#home">Home</a>
            <a href="#services">Koleksi</a>
            <a href="#pantai">Menu</a>
            <a href="#Contact">Contact Us</a>
          </div>
          <div class="box">
            <p>&copy; Copyright by <span>InstaMoment</span> All Rights Reserved 2024, Indonesia</p>
          </div>
        </div>
      </div>
    </div>
    

    <script src="{{ asset('js/landing.js') }}" defer></script>
  </body>
</html>