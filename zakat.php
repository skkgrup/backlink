<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>HACKED BY MR SKK</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');

    html, body {
      margin: 0;
      padding: 0;
      background: black;
      font-family: 'Share Tech Mono', monospace;
      color: red;
      overflow: hidden;
    }

    canvas {
      position: fixed;
      top: 0;
      left: 0;
      z-index: -1;
    }

    .scanline {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background: red;
      box-shadow: 0 0 15px red;
      animation: scan 4s infinite linear;
      z-index: 2;
    }

    @keyframes scan {
      0% { top: 0; }
      100% { top: 100%; }
    }

    h1 {
      font-size: 60px;
      text-align: center;
      margin-top: 60px;
      color: red;
      animation: glitchText 1.5s infinite;
      position: relative;
      z-index: 3;
    }

    .typewriter {
      width: 26ch;
      animation: typing 4s steps(26) 1s 1 normal both, blink 1s step-end infinite;
      overflow: hidden;
      white-space: nowrap;
      border-right: 2px solid red;
      font-size: 20px;
      margin: 10px auto;
      text-align: center;
    }

    @keyframes typing {
      from { width: 0; }
      to { width: 26ch; }
    }

    @keyframes blink {
      50% { border-color: transparent; }
    }

    .glitch-text {
      text-align: center;
      font-size: 26px;
      margin-top: 10px;
      animation: glitchText 1.5s infinite;
      color: red;
      text-shadow: 0 0 5px red, 0 0 10px crimson;
    }

    @keyframes glitchText {
      0% {
        text-shadow: 2px 0 red, -2px 0 cyan;
      }
      20% {
        text-shadow: -2px 0 red, 2px 0 cyan;
      }
      40% {
        text-shadow: 2px 0 red, -2px 0 cyan;
      }
      60% {
        text-shadow: -2px 0 red, 2px 0 cyan;
      }
      80% {
        text-shadow: 2px 0 red, -2px 0 cyan;
      }
      100% {
        text-shadow: 0 0 20px crimson;
      }
    }

    img {
      display: block;
      margin: 40px auto;
      width: 300px;
      opacity: 0.9;
      border-radius: 50%;
      border: 4px solid red;
      box-shadow: 0 0 25px red;
      animation: spin 20s linear infinite;
      z-index: 2;
    }

    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    audio {
      display: none;
    }
  </style>
</head>
<body>

<canvas id="matrix"></canvas>
<div class="scanline"></div>

<h1>HACKED BY MR SKK</h1>
<div class="typewriter">⚠ SYSTEM BREACH DETECTED ⚠</div>
<p class="glitch-text">⚠ ELING ELING UMAT ⚠</p>
<p class="glitch-text">🔥 JANGAN LUPA BAYAR ZAKAT 🔥</p>
<img src="https://res.cloudinary.com/di1pwoapk/image/upload/v1741152887/skk_lq8ul0.png" alt="MR SKK Logo">

<audio autoplay loop>
  <source src="https://www.myinstants.com/media/sounds/horror.mp3" type="audio/mpeg">
</audio>
<audio autoplay loop>
  <source src="https://www.myinstants.com/media/sounds/keyboard_typing.mp3" type="audio/mpeg">
</audio>

<script>
  // Matrix rain effect
  const canvas = document.getElementById('matrix');
  const ctx = canvas.getContext('2d');

  canvas.height = window.innerHeight;
  canvas.width = window.innerWidth;

  const letters = "01";
  const fontSize = 16;
  const columns = canvas.width / fontSize;
  const drops = Array(Math.floor(columns)).fill(1);

  function draw() {
    ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = "#0F0";
    ctx.font = fontSize + "px monospace";

    for (let i = 0; i < drops.length; i++) {
      const text = letters.charAt(Math.floor(Math.random() * letters.length));
      ctx.fillText(text, i * fontSize, drops[i] * fontSize);

      if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
        drops[i] = 0;
      }

      drops[i]++;
    }
  }

  setInterval(draw, 33);

  window.addEventListener('resize', () => {
    canvas.height = window.innerHeight;
    canvas.width = window.innerWidth;
  });
</script>

</body>
</html>
