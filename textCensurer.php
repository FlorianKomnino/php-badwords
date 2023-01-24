<?php
$userTextVariable = $_POST['userText'];
$wordToCensureVariable = $_POST['wordToCensure'];
?>


<h1>
    Il testo inserito è il seguente:
</h1>

<p>
    <?php
    echo $userTextVariable;
    ?>
</p>

<p>
    La lunghezza del testo è di <?php echo strlen($userTextVariable); ?> caratteri.
</p>

<h1>
    Il testo inserito, dopo aver verificato la sua decenza, è il seguente:
</h1>

<p>
    <?php
    echo str_ireplace($wordToCensureVariable, '***', $userTextVariable);
    ?>
</p>
<p>
    La lunghezza del testo censurato è di <?php echo strlen(str_ireplace($wordToCensureVariable, '***', $userTextVariable)); ?> caratteri.
</p>