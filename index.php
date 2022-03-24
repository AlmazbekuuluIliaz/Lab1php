<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1php</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php $a = "Hello, World!";?>
    <header class="Header">
        <div class="Container">
            <img src="./logo.jpg" alt="logo">
            <p class="main__text">Лабораторная работа №1 Алмазбек уулу Ильяз</p>
        </div>
    </header>
    <main class="Main">
        <div class="Container">
            <p class="main__text">
                <?php echo $a;?>
            </p>
        </div>
    </main>
    <footer class="Footer">
        <div  class="Container">
            <p class="footer__text">Задание для самостоятельной работы! Создать динамический сайт.</p>
        </div>
    </footer>
</body>
</html>