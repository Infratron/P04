<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grazie per averci contattato {{$name}}!</h1>
        <h2>Verrai ricontattato da qualcuno il prima possibile</h2>
        <small>se non sei stato tu a fare richiesta, ignora pure questa e-mail</small>
        <h3>Qui di seguito vedrai un riepilogo dei tuoi dati</h3>
        <ol>
            <li>
                Nominativo {{$name}}
            </li>
            <li>
                Indirizzo email {{$email}}
            </li>
            <li>
                il tuo messaggio {{$user_message}}
            </li>
    </ol>
</body>
</html>