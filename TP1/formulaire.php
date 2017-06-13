<!DOCTYPE html>

<html>
    <head>
        <title>Formulaire</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        <div>
            <form id="newNote" name="formulaire" action="secret.php" method="post">
                <p>
                    <label for="code">Code :</label> 
                    <input name="code" id="code" type="password" />
                </p>
                <p>
                    <input type="submit" name="submit" value="Go !" />
                </p>
            </form>
        </div>
    </body>
</html>