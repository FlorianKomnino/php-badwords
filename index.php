<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <main>
        <h1>
            Ciao
        </h1>
        <h1>
            Benvenut* al censuratore automatico!
        </h1>
        <h1>
            Inserisci una frase, inserisci una parola che non vuoi che appaia, e lascia che avvenga la magia cliccando il bottone
        </h1>
        <form action="./textCensurer.php" method="POST">
            <label for="wordToCensure">Frase:</label>
            <input type="text" class="textInput" name="userText" id="userText">
            <label for="sentence">Parola inaccettabile:</label>
            <input type="text" class="textInput" name="wordToCensure" id="wordToCensure">
            <button type="submit">Push me</button>
        </form>
    </main>
</body>

</html>