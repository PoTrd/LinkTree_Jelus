<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit_contact</title>
    <link rel="stylesheet" href="Linktree_jelus.css" />
</head>
<body>
    <?php include_once("menu.php")?>
    <div class="info_sent"> 
    <h5 class="info_title">Rappel de vos informations</h5>
        <p class="info_mail"><b>Email</b> : <?php echo $_GET["user_mail"]; ?></p>
        <p class="info_msg"><b>Message</b> : <?php echo $_GET["user_message"]; ?></p>
    </di>
</body>
</html>