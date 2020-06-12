<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Modal WIndow</title>
</head>
<body>
    <div class="content">
        <div class="content__button">
            <button class="button_open" id="buttonOpenViewUsers">Список пользователей</button>
        </div>
        <div class="content__modal-window" id="viewUsers">
            <div class="window__content">
                <span class="button_close" id="buttonCloseViewUsers"></span>
                <div class="content__text">
                    <h2 class="text_title">Список пользователей</h2>
                    <?php
                        require_once 'viewUsers.php';
                    ?>
                    <p class="text_description">
                    </p>
                </div>
            </div>
        </div>
        <div class="content__button">
            <button class="button_open" id="buttonOpenAddUser">Добавить пользователя</button>
        </div>
        <div class="content__modal-window" id="addUser">
            <div class="window__content">
                <span class="button_close" id="buttonCloseAddUser"></span>
                <div class="content__text">
                    <h2 class="text_title">Добавить пользователя</h2>                    
                    <form action="addNewUser.php" method="post">
                        <input type="text" placeholder="Фамилия" name="secondName">
                        <input type="text" placeholder="Имя" name="firstName">
                        <input type="text" placeholder="Отчество" name="thirdName">
                        <input type="submit" value="Отправить" name="buttonSubmit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p class="footer__text">
            Моя GitHub страница, если Вам будет интересно :)
            <a href="https://github.com/K1nGsmaN-hub">K1nGsmaN-hub</a>
        </p>
        <p class="footer__text">
            В основном, там верстка лэндигов и немного JS
        </p>
        <p class="footer__text">Код полностью мой :-)</p>
    </footer>
    <script src="script/main.js"></script>
</body>
</html>