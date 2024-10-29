<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    

    <title>InstaMoment</title>
</head>
<body class="bg-black font-poppins scroll-smooth">
<header>
    <nav class="navbar fixed w-full z-50 transition-all bg-transparent py-5">
        <div class="container mx-auto px-5 flex justify-between items-center">
            <div class="text-white text-xl font-semibold">InstaMoment</div>
            <ul class="hidden md:flex space-x-8 text-white">
                <li><a href="#home" class="hover:bg-green-700 py-2 px-4 rounded">Home</a></li>
                <li><a href="#services" class="hover:bg-green-700 py-2 px-4 rounded">Koleksi</a></li>
                <li><a href="#pantai" class="hover:bg-green-700 py-2 px-4 rounded">Menu</a></li>
                <li class="bg-green-500 rounded"><a href="#Contact" class="py-2 px-4">Contact Us</a></li>
            </ul>
            <i class="fa-solid fa-bars text-white text-2xl md:hidden"></i>
        </div>
    </nav>

    <div class="hero min-h-screen bg-cover bg-center bg-fixed bg-black/80 flex items-center text-center md:text-left"
         style="background-image: url('{{ asset('img/Background.jpg') }}'); padding-top: 5rem;">
        <div class="container mx-auto px-5 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-white text-4xl md:text-6xl font-bold mb-4">Jasa Foto <br> dan Cetak Foto</h1>
                <p class="text-white text-lg mb-6">Tuangkan moment-moment indah dalam bentuk polaroid, jangan sampai kita lewatkan momen berharga ini</p>
                <button class="bg-green-500 hover:bg-green-900 text-white font-bold py-3 px-6 rounded">Selengkapnya</button>
            </div>
            <div>
                <img src="{{ asset('img/IMGawal.png') }}" alt="Foto" class="w-full opacity-0 animate-fadeIn delay-500">
            </div>
        </div>
    </div>
</header>

<section id="services" class="bg-white py-16">
    <div class="container mx-auto px-5 text-center">
        <div class="flex flex-wrap justify-center gap-10">
            <div class="text-black w-80 text-center">
                <i class="fa-solid fa-coins text-green-500 text-4xl mb-4"></i>
                <h4 class="font-semibold text-xl">Harga Terjangkau</h4>
                <p class="font-light">Murah Mulai dari 13 ribu sudah bisa cetak polaroid</p>
            </div>
            <div class="text-black w-80 text-center">
                <i class="fa-solid fa-certificate text-green-500 text-4xl mb-4"></i>
                <h4 class="font-semibold text-xl">Sudah Tersertifikasi</h4>
                <p class="font-light">Sudah Tersertifikasi, jadi jangan ragu</p>
            </div>
            <div class="text-black w-80 text-center">
                <i class="fa-solid fa-people-roof text-green-500 text-4xl mb-4"></i>
                <h4 class="font-semibold text-xl">Aman dan Ramah</h4>
                <p class="font-light">Terjamin Aman dan sudah pasti Ramah</p>
            </div>
        </div>
    </div>
</section>

<section id="foto" class="py-16">
    <div class="container mx-auto px-5">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white text-center p-5 rounded-lg shadow-lg transition hover:-translate-y-2">
                <img src="{{ asset('img/IMGfoto1.jpg') }}" class="w-full h-48 rounded mb-4" alt="Foto">
                <h3 class="font-semibold text-xl mb-2">Cetak Foto</h3>
                <p class="font-light mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
                <button class="bg-green-500 hover:bg-green-900 text-white font-bold py-2 px-5 rounded">Detail</button>
            </div>
            <!-- Ulangi struktur ini untuk setiap gambar yang diinginkan, dengan mengganti src dan detailnya sesuai kebutuhan -->
        </div>
    </div>
</section>

<section id="Contact" class="py-16 bg-gray-800 text-white text-center">
    <div class="container mx-auto px-5">
        <h1 class="text-4xl font-bold mb-6">Ada Moment Berharga? <br> Segera Cetak Polaroid!</h1>
        <h3 class="text-lg font-light mb-10 animate-pulse">Klik Link di Bawah Ini!</h3>
        <div class="flex justify-center space-x-6">
            <a href="https://api.whatsapp.com/qr/EF4JHP345SBOO1?autoload=1&app_absent=0" target="_blank">
                <button class="bg-green-500 hover:bg-green-900 py-2 px-6 rounded text-white font-bold"><i class="fa-brands fa-whatsapp"></i> Whatsapp</button>
            </a>
            <a href="#">
                <button class="bg-green-500 hover:bg-green-900 py-2 px-6 rounded text-white font-bold"><i class="fa-regular fa-envelope"></i> Gmail</button>
            </a>
            <a href="https://www.instagram.com/instax_moment.id?igsh=MXhncWY1ajB4ZDVjdw==" target="_blank">
                <button class="bg-green-500 hover:bg-green-900 py-2 px-6 rounded text-white font-bold"><i class="fa-brands fa-instagram"></i> Instagram</button>
            </a>
        </div>
    </div>
</section>

<footer class="bg-green-500 py-10">
    <div class="container mx-auto px-5 grid md:grid-cols-3 gap-8 text-white text-center md:text-left">
        <div>
            <h2 class="text-2xl font-bold">InstaMoment</h2>
            <p class="text-sm mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eius rerum quisquam perspiciatis obcaecati.</p>
        </div>
        <div>
            <h3 class="text-xl font-semibold">Menu</h3>
            <div class="flex flex-col space-y-2 mt-4">
                <a href="#home" class="hover:text-gray-300">Home</a>
                <a href="#services" class="hover:text-gray-300">Koleksi</a>
                <a href="#pantai" class="hover:text-gray-300">Menu</a>
                <a href="#Contact" class="hover:text-gray-300">Contact Us</a>
            </div>
        </div>
        <div class="text-sm">
            <p>&copy; 2024 InstaMoment. All Rights Reserved, Indonesia</p>
        </div>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
