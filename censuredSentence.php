<h1>
    La frase inserita, dopo aver verificato la sua decenza, è la seguente:
</h1>

<p>
    <?php
    echo str_ireplace($_POST['wordToCensure'], '***', $_POST['sentence']);
    ?>
</p>