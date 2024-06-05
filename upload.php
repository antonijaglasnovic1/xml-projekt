<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xml = simplexml_load_file('celebrities.xml');
    $celebrity = $xml->addChild('celebrity');
    
    $lastId = 0;
    foreach ($xml->celebrity as $celebrity) {
        if ($celebrity['id'] > $lastId) {
            $lastId = $celebrity['id'];
        }
    }
    $celebrity->addAttribute('id', $lastId + 1);

    $celebrity->addChild('ime', ($_POST['ime']));
    $celebrity->addChild('prezime', ($_POST['prezime']));
    $celebrity->addChild('posao', ($_POST['posao']));
    $celebrity->addChild('godine', $_POST['godine']);

    $xml->asXML('celebrities.xml');

    header('Location: forma.php?success=1');
    exit();
}
?>
