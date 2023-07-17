<?php

$email = new Email('Mario Rossi', 'Giuseppe Neri', 'Appunti','Ciao, ti invio ciò che abbiamo fatto a lezione', true);
$allegato= new Allegato('pdf', '52mb');
$email->setAllegato($allegato);

$email2 = new Email('Mario Rossi', 'Giuseppe Macrì', 'Saluto','Ciao, sono',false);

$email3 = new Email('Mario Rossi', 'Paolo Rossi', 'Invito','Ciao, sei invitato', true);

$email4 = new Email('Mario Rossi', 'Antonio Bianchi', 'Consiglio','Ciao, ti sarà utile',false);
$allegato= new Allegato('jpg', '3mb');
$email4->setAllegato($allegato);

$email5 = new Email('Mario Rossi', 'Fabrizio Gullace', 'Gioca a questo gioco','Prova questo nuovo gioco',false);
$allegato= new Allegato('jpg', '1mb');
$email5->setAllegato($allegato);

$email6 = new Email('Mario Rossi', 'Salvatore Macrì', 'Torneo di pallavolo','Ciao, ci manca un giocatore per comporre la squadra',false);


$systems = 
[
    $email,
    $email2,
    $email3,
    $email4,
    $email5,
    $email6
];

$message = new Sms('Mario Rossi', 'Antonio Binachi', 'Richiesta', 'Potresti prestarmi un casco per andare in moto?', 'Letto',  true);

$message1 = new Sms('Mario Rossi', 'Marco Trani', 'Saluto', 'Ciao, come va la vita?', 'Non Letto',  false);


$messages = 
[
    $message,
    $message1
];

$notification = new Notification('Antonio Nicolosi', 'Marco Trani', 'Consegna', 'Il tuo pacco è stato consegnato', false, 'Icona');

$notification1 = new Notification('Salvo Ganci', 'Antonio Bianchi', 'Salute', 'Oggi hai percorso 10000 passi', true, 'Icona');

$notifications = 
[
    $notification,
    $notification1
]
    
?>
