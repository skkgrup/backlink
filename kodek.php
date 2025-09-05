<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Tuan KODEK - Horor Page</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/dfx14z8lw/image/upload/v1755303588/ny.bushy_1755303537_musicaldown.com_owvezh.jpg">

    <!-- CSS Horor -->
    <style>
        /* ===== Reset ===== */
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Roboto Mono', monospace;
            color: #fff;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        /* Video background */
        #bg-video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            z-index: -1;
            filter: brightness(0.4) contrast(1.2); /* efek horor */
        }

        /* Judul efek horor */
        h1 {
            font-size: 6rem;
            color: #ff1c1c;
            text-shadow: 0 0 10px #ff0000, 0 0 20px #cc0000;
            animation: flicker 2s infinite;
        }

        h2 {
            font-size: 2rem;
            color: #f5deb3;
            margin: 10px 0 20px;
            letter-spacing: 2px;
        }

        @keyframes flicker {
            0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% { opacity: 1; }
            20%, 24%, 55% { opacity: 0.4; }
        }

        /* Info box melayang */
        .info {
            max-width: 600px;
            background: rgba(0,0,0,0.5);
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px #ff0000;
            animation: floatText 4s ease-in-out infinite;
        }

        @keyframes floatText {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        /* Tombol link */
        .info a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            color: #ff1c1c;
            border: 2px solid #ff1c1c;
            border-radius: 6px;
            text-decoration: none;
            transition: 0.3s;
        }
        .info a:hover {
            background: #ff1c1c;
            color: #fff;
            box-shadow: 0 0 15px #ff0000;
        }

        /* Partikel terbang horor */
        .particle {
            position: absolute;
            width: 6px;
            height: 6px;
            background: #ff0000;
            border-radius: 50%;
            opacity: 0.6;
            animation: fly 10s linear infinite;
        }

        @keyframes fly {
            0% { transform: translateY(0) translateX(0); opacity:0.6; }
            50% { opacity: 1; }
            100% { transform: translateY(-800px) translateX(500px); opacity:0; }
        }
    </style>
</head>

<body>
    <!-- Video Background -->
    <video id="bg-video" autoplay muted loop>
        <source src="https://c.top4top.io/m_35336bjti1.mp4" type="video/mp4">
    </video>

    <h1>MR P KODEK</h1>
    <h2>^-^</h2>
    <div class="info">
        <p>"Apa yang kamu dapatkan itulah yang kamu tanam. Jangan salahkan orang lain jika kamu selalu sial."</p>
        <a href="https://www.youtube.com/watch?v=Ym9hpCvt8tA">TONTON</a>
    </div>

    <!-- Musik MP3 Autoplay -->
    <audio autoplay loop>
        <source src="https://e.top4top.io/m_3530e64k21.mp3" type="audio/mpeg">
    </audio>

    <!-- Partikel terbang -->
    <script>
        for(let i=0;i<30;i++){
            let p=document.createElement('div');
            p.className='particle';
            p.style.left=Math.random()*window.innerWidth+'px';
            p.style.top=Math.random()*window.innerHeight+'px';
            p.style.width=Math.random()*6+2+'px';
            p.style.height=p.style.width;
            p.style.animationDuration=(5+Math.random()*5)+'s';
            document.body.appendChild(p);
        }
    </script>
</body>

</html>
