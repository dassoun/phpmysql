<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=phpmysql;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST["btnPoste"])) {
    $sql = "INSERT INTO minichat (pseudo, message) VALUES (:pseudo, :message)";
    $req = $bdd->prepare($sql);
    $req->bindValue(':pseudo', $_POST["pseudo"], PDO::PARAM_STR);
    $req->bindValue(':message', $_POST["message"], PDO::PARAM_STR);
    $req->execute();
}

$req = $bdd->prepare("SELECT * FROM minichat ORDER BY id DESC LIMIT 0, 9");
$req->execute();
$datas = $req->fetchAll();

?>

<div>
    <form name="frmMessage" method="post" action="index.php">
        <label for="pseudo">pseudo :</label>
        <input type="text" name="pseudo" id="pseudo" />
        <br />
        <label for="message">message :</label>
        <input type="text" name="message" id="message" />
        <br />
        <input type="submit" value="poster" name="btnPoste" />
    </form>
</div>
<div>
    <table>
        <?php
        foreach($datas as $row) {
            ?>
        <tr><td><b><?= $row["pseudo"] ?> : </b></td><td><?= $row["message"] ?></td></tr>
            <?php
        }
        ?>
    </table>
</div>