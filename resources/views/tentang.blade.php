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
                <a href="/index" class="hover:text-orange-300">Beranda</a>
                <a href="/produk" class="hover:text-orange-300">Produk</a>
                <a href="/tentang" class="hover:text-orange-300">Tentang</a>
            </nav>
            <div class="flex space-x-4">
                <a href="/login" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-1.5 rounded text-sm">Masuk</a>
                <a href="/register" class="bg-orange-300 hover:bg-orange-400 text-white px-4 py-1.5 rounded text-sm">Daftar</a>
                <a href="/profil" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </a>
            </div>
        </header>
</body>
</html>
