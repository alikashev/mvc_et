<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Form</title>
</head>
<body>

    <form action="index.php?controller=reservations&action=create" method="POST">

        <div class="form-container">
            <label for="Naam">Voor en Achternaam</label>
            <input type="text" name="naam">
            <label for="tel">Telefoon</label>
            <input type="text" name="tel">
            <label for="email">Email</label>
            <input type="text" name="email">
            <label for="tafel">Tafel</label>
            <input type="text" name="tafel">
            <label for="datum">Datum</label>
            <input type="date" name="datum">
            <input type="submit" value="Reserveer">
        </div>

    </form>
    
</body>
</html>