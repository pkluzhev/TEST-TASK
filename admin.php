<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test task</title>
    <link rel="stylesheet" href="styles/admin_styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Euclid Circular B&amp;family=Montserrat&amp;family=Herr Von Muellerhoff&amp;display=swap" rel="stylesheet">
    <script src="/js/admin-script.js" defer></script>
</head>

<body>
    <form id="form" action="#" method="POST">
        <div class="form container">
            <p class="form__title">Enter the email</p>
            <input class="form-field__input" type="text" id="email" maxlength="255" placeholder="Email">
            <input class="form-field__button" type="submit" name="button" id="button" value="Request">
            <p class="alert" id="empty-email-message">Empty email field!</p>
            <p class="alert" id="incorrect-email-message">Incorrect email format!</p>
            <p class="alert" id="not-found-message">There are no clients with specified email!</p>
        </div>
        <div class="table container" id="table"></div>
    </form>

</body>

</html>