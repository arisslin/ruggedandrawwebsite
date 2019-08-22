<?php 
    var_dump($_POST);
    mail(
        "ruggedandraw@web.de", 
        "Es gibt eine neue Kontaktanfrage", 
        "Email {$_POST['email']}, Name: {$_POST['name']}, Nachricht: {$_POST['message']}");
        header("Location: ../../index.php?contacted=1#contact");
?>