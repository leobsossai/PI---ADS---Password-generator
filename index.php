<!DOCTYPE html>
<html>
<head>
    <title>Gerador de Senha</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
       body {
    font-family: Arial, sans-serif;
    background:url(https://gifs.eco.br/wp-content/uploads/2022/06/gifs-de-hacker-4.gif)
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
}

.copy-button {
    font-size: 14px;
    padding: 6px 12px;
    background-color: #555;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.copy-button:hover {
    background-color: #333;
}

@keyframes pulse {
    0% {
        transform: scale(1);
        box-shadow: 0 0 0 rgba(0, 255, 0, 0.7);
    }
    50% {
        transform: scale(1.1);
        box-shadow: 0 0 10px rgba(0, 255, 0, 0.7);
    }
    100% {
        transform: scale(1);
        box-shadow: 0 0 0 rgba(0, 255, 0, 0.7);
    }
}

.animate {
    animation-duration: 1s;
    animation-fill-mode: both;
    animation-iteration-count: infinite;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    background-color: transparent;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

h1 {
    font-size: 28px;
    margin-bottom: 20px;
    animation-name: pulse;
    color: #0f0;
}

label {
    display: block;
    margin-bottom: 10px;
    color: #ccc;
    font-weight: bold;
    animation-name: pulse;
}

.import-button {
    font-size: 18px;
    padding: 10px 20px;
    background-color: #0f0;
    color: #111;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    animation: pulse 1s infinite;
}

.result {
    margin-top: 20px;
    padding: 10px;
    background-color: transparent;
    border: 1px solid;
    border-radius: 4px;
    opacity: 0;
    animation: fade-in 3s forwards;
}

@keyframes fade-in {
    0% {
        opacity: 0;
    }
    100% {
        color: green;
        opacity: 1;
    }
}
.result h2 {
    animation-name: pulse;
    color: #fff;
    margin-bottom: 10px;
    color: #555;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
    animation: fade-in 1s forwards;
}

.copy-button {
    font-size: 14px;
    padding: 6px 12px;
    background-color: #555;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.copy-button:hover {
    background-color: #333;
}


    </style>
<!DOCTYPE html>
<html>
<head>
    <title>Gerador de Senha</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="animate">Gerador de Senha</h1>
        <form action="gerador.php" method="post">
            <label class="animate" for="length">Comprimento da Senha:</label>
            <input type="number" id="length" name="length" min="4" max="20" required>
            <br>
            <br>
            <button class="import-button" onclick="startAnimation()">Importar</button>
        </form>
        <?php if(isset($_GET['password'])): ?>
            <div class="result">
                <h2 class="animate">Sua Senha Gerada:</h2>
                <input type="text" value="<?php echo $_GET['password']; ?>" readonly>
                <button class="copy-button" onclick="copyToClipboard()">Copiar</button>
            </div>
        <?php endif; ?>
    </div>
    <script src="script.js"></script>
</body>
</html>
