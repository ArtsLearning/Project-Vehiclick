<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden; /* Prevents scrolling */
        }
        
        .background-container {
            position: relative;
            overflow: hidden;
            height: 100vh; /* Full viewport height */
            width: 100vw; /* Full viewport width */
        }
        
        .background-image {
            position: absolute;
            width: 110%;
            height: 110%;
            top: -5%;
            left: -5%;
            background-image: url('https://img.freepik.com/free-vector/sports-style-halftone-memphis-black-background_1017-33619.jpg?semt=ais_hybrid&w=740');
            background-size: cover;
            background-position: center;
            transition: transform 0.2s ease-out;
        }

        .login-container {
            backdrop-filter: blur(2px);
            background-color: rgba(255, 255, 255, 0.8);
            max-height: calc(100vh - 180px); /* Adjust height to fit within viewport */
            overflow-y: auto; /* Add scrolling just to the container if needed */
            width: 100%; /* Make the container take full width */
        }
        
        .content-area {
            height: calc(100vh - 58px); /* Subtract header height */
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="background-container">
        <div id="moving-bg" class="background-image"></div>
        
        <!-- Navbar -->
        <header class="relative z-10 flex justify-between items-center px-6 py-3 bg-black bg-opacity-90">
            <div class="logo">
                <h1 class="text-orange-500 font-bold text-xl">[LOGO]</h1>
            </div>
            <nav class="hidden md:flex space-x-8 text-white">
                <a href="#" class="hover:text-orange-300">Beranda</a>
                <a href="#" class="hover:text-orange-300">Produk</a>
                <a href="#" class="hover:text-orange-300">Tentang</a>
            </nav>
            <div class="flex space-x-4">
                <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-1.5 rounded text-sm">Masuk</button>
                <button class="bg-orange-300 hover:bg-orange-400 text-white px-4 py-1.5 rounded text-sm">Daftar</button>
                <a href="#" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </a>
            </div>
        </header>
        
        <!-- Main Content -->
        <div class="content-area relative z-10">
            <div class="w-full max-w-2xl px-4"> <!-- Changed from max-w-md to max-w-2xl for wider login box -->
                <h2 class="text-center text-2xl font-bold mb-4 text-white">Selamat Datang di <span class="text-orange-500">VehiClick</span></h2>
                
                <div class="login-container rounded-lg p-6">
                    <p class="text-center text-gray-800 font-medium mb-4">Daftar Untuk Memulai</p>
                    
                    <form>
                        <div class="mb-4 flex gap-4">
                            <input type="text" placeholder="Nama Depan" class="w-1/2 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500 text-sm">
                            <input type="text" placeholder="Nama Belakang" class="w-1/2 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500 text-sm">
                        </div>

                        <div class="mb-4">
                            <input type="email" placeholder="Masukkan Email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500 text-sm">
                        </div>

                        <div class="mb-4">
                            <input type="password" placeholder="Masukkan Kata Sandi" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500 text-sm">
                        </div>

                        <div class="mb-4">
                            <input type="password" placeholder="Konfirmasi Kata Sandi" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500 text-sm">
                        </div>

                        <div class="mb-4">
                            <input type="text" placeholder="Masukkan No Telepon" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500 text-sm">
                        </div>

                        <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded font-medium transition duration-300 text-sm uppercase">DAFTAR</button>

                        <div class="mt-4 text-center text-gray-600 text-sm">
                            <p>Sudah punya akun? <a href="#" class="text-blue-500 hover:underline">Ayo Masuk</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        // Script untuk membuat background bergerak saat mouse digerakkan
        const movingBg = document.getElementById('moving-bg');
        const container = document.querySelector('.background-container');
        
        container.addEventListener('mousemove', (e) => {
            const xPos = (e.clientX / window.innerWidth) * 15; // Menggerakkan 15px maksimum
            const yPos = (e.clientY / window.innerHeight) * 15;
            
            movingBg.style.transform = translate(${-xPos}px, ${-yPos}px);
        });
        
        // Reset posisi saat mouse keluar dari area
        container.addEventListener('mouseleave', () => {
            movingBg.style.transform = 'translate(0, 0)';
        });
    </script>
</body>
</html>
