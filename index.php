<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créez Votre QR Code Gratuit</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(45deg, #ea3b15, #ff6347, #ea3b15);
            color: #fff;
            overflow: hidden;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            text-align: center;
            transform: perspective(1000px) rotateX(5deg);
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: perspective(1000px) rotateX(0deg);
        }
        h1 {
            color: #fff;
            font-size: 2.5em;
            margin-bottom: 1.5rem;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
            font-weight: 700;
        }
        #url-input {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1.5rem;
            border: none;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            transition: all 0.3s ease;
            font-family: 'Roboto', sans-serif;
        }
        #url-input:focus {
            outline: none;
            box-shadow: 0 0 15px rgba(255,255,255,0.5);
        }
        #generate-btn {
            background: #ea3b15;
            color: #fff;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-family: 'Roboto', sans-serif;
        }
        #generate-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(234,59,21,0.7);
        }
        #qrcode {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 256px;
        }
        #qrcode img {
            animation: fadeIn 1s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .glow {
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            pointer-events: none;
            z-index: -1;
        }
        h6 {
            margin-top: 2rem;
            font-size: 0.8em;
            opacity: 0.7;
            font-weight: 300;
        }
    </style>
</head>
<body>
    <div class="glow"></div>
    <div class="container">
        <h1>Créez Votre QR Code Gratuit</h1>
        <input type="text" id="url-input" placeholder="Entrez l'URL du futur">
        <button id="generate-btn">Générer QR Code</button>
        <div id="qrcode"></div>
        <h6>Developed by Mr.FANNAH</h6>
    </div>
    <script>
        document.getElementById('generate-btn').addEventListener('click', function() {
            var url = document.getElementById('url-input').value;
            if (url) {
                document.getElementById('qrcode').innerHTML = '';
                new QRCode(document.getElementById('qrcode'), {
                    text: url,
                    width: 256,
                    height: 256,
                    colorDark : "#000000",
                    colorLight : "#ffffff"
                });
            }
        });

        // Add subtle movement to the glow effect
        document.addEventListener('mousemove', function(e) {
            const glow = document.querySelector('.glow');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            glow.style.background = `radial-gradient(circle at ${x*100}% ${y*100}%, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%)`;
        });
    </script>
</body>
</html>