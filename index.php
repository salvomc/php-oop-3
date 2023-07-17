<?php
    require_once __DIR__.'/models/system.php';
    require_once __DIR__.'/models/email.php';
    require_once __DIR__.'/models/sms.php';
    require_once __DIR__.'/models/notification.php';
    require_once __DIR__.'/models/allegato.php';
    require_once __DIR__.'/models/db.php';
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>php-oop-3</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">EMAIL</h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <?php foreach($systems as $system):?>
                            <div class="card col-4">
                                <h3>Mittente:
                                    <?php echo $system->getMittente() ?>
                                </h3>
                                <h3>Destinatario:
                                    <?php echo $system->getDestinatario() ?>
                                </h3>
                                <h4>Oggetto:
                                    <?php echo $system->getOggetto()?>
                                </h4>
                                <h4>Contenuto:
                                    <?php echo $system->getContenuto()?>
                                </h4>
                                <h4> Suono:
                                    <?php echo System::$suono ?>
                                </h4>
                                <div>
                                    Allegato:
                                    <?php if(!is_null($system->getAllegato())){ ?>
                                        <i class="fa-solid fa-paperclip" style="color: #000000;"></i><span><?php echo $system->getAllegato()->getNome() ?></span>
                                        <span><?php echo $system->getAllegato()->getDimensione() ?></span>
                                    <?php } ?>
                                </div>
                                <h4>
                                    <?php echo $system->getNotificaInvio() ? 'Email Consegnata' : 'Email Non Consegnata'?>
                                </h4>
                                <h4>
                                    <?php echo $system->getInoltro()?>
                                </h4>
                                <h4>
                                    <?php echo $system->getStampa()?>
                                </h4>
                                <h4>Colore:
                                    <?php echo Email::$led_color ?>
                                </h4>
                                <h4>
                                    <?php echo $system->invio() ?>
                                </h4>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h1 class="text-center">MESSAGI</h1>                  
                </div>
                <div class="col-12">
                    <div class="row">
                        <?php foreach($messages as $message): ?>
                            <div class="col-6 card">
                                <h3>Mittente:
                                    <?php echo $message->getMittente() ?>
                                </h3>
                                <h3>Destinatario:
                                    <?php echo $message->getDestinatario() ?>
                                </h3>
                                <h4>Oggetto:
                                    <?php echo $message->getOggetto()?>
                                </h4>
                                <h4>Contenuto:
                                    <?php echo $message->getContenuto()?>
                                </h4>
                                <h4> Suono:
                                    <?php echo System::$suono ?>
                                </h4>
                                <h4>Notifica Lettura:
                                    <?php echo $message->getLettura()?>
                                </h4>
                                <h4>Risposta:
                                    <?php echo $message->risposta()?>
                                </h4>
                                <h4> Colore:
                                    <?php echo Sms::$led_color ?>
                                </h4>
                                <h4>Risposta:
                                    <?php echo $message->getNotificaMessaggio() ? '<i class="fa-solid fa-check-double" style="color: #2495ff;"></i>' : '<i class="fa-solid fa-check-double" style="color: #000;"></i>'?>
                                </h4>
                                <h4>
                                    <?php echo $message->invio() ?>
                                </h4>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h1 class="text-center">NOTIFICHE</h1>                  
                </div>
                <div class="col-12">
                    <div class="row">
                        <?php foreach($notifications as $notification): ?>
                            <div class="col-6 card">
                                <h3>Mittente:
                                    <?php echo $notification->getMittente() ?>
                                </h3>
                                <h3>Destinatario:
                                    <?php echo $notification->getDestinatario() ?>
                                </h3>
                                <h4>Oggetto:
                                    <?php echo $notification->getOggetto()?>
                                </h4>
                                <h4>Contenuto:
                                    <?php echo $notification->getContenuto()?>
                                </h4>
                                <h4> Suono:
                                    <?php echo System::$suono ?>
                                </h4>
                                <h4>Visibile:
                                    <?php echo $notification->getVisibilita() ? 'Visibile' : 'Non Visibile'?>
                                </h4>
                                <h4>icona:
                                    <?php echo $notification->getIcona()?>
                                </h4>
                                <h4> Colore:
                                    <?php echo Notification::$led_color ?>
                                </h4>
                                <h4>
                                    <?php echo $notification->invio() ?>
                                </h4>
                                <h4>
                                    <?php echo $notification->onClick() ?>
                                </h4>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>