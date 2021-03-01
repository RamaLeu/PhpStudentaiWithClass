<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
use MokiniaiApp\Mokiniai;

$mok1 = new Mokiniai("5b","Dovydas", "Brasas", [5, 7, 9]);
$mok2 = new Mokiniai("5b","Gustavas", "Pecetauskas", [5, 7, 9]);
$mok3 = new Mokiniai("5b","Rokas", "Eglinskis", [5, 9, 10]);
$mok4 = new Mokiniai("5b","Mindaugas", "Kuzma", [5, 7, 9]);
$mok5 = new Mokiniai("5b","Zilvinas", "Zvagulis", [5, 7, 9]);
$mok6 = new Mokiniai("5b","Ramunas", "Bagdonas", [10, 10, 10]);
$mok7 = new Mokiniai("5b","Paulius", "Startkus", [5, 7, 9]);
$mok8 = new Mokiniai("5b","Marius", "Gendalfas", [5, 7, 9]);
$mok9 = new Mokiniai("5b","Darius", "Dumbldoras", [5, 7, 9]);
$mok10 = new Mokiniai("5b","Karolis", "Shmita", [5, 9, 10]);

?>
<table>
    <tr>
        <th>Klase</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Kontroliniu darbu vdurkis</th>
        <th>Duomenu formatavimo data</th>
    </tr>
    <tr>
        <?php foreach($mok1->showStudents() as $data):?>
            <td><?=$data?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mok2->showStudents() as $data):?>
            <td><?=$data?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mok3->showStudents() as $data):?>
            <td><?=$data?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mok4->showStudents() as $data):?>
            <td><?=$data?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mok5->showStudents() as $data):?>
            <td><?=$data?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mok6->showStudents() as $data):?>
            <td><?=$data?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mok7->showStudents() as $data):?>
            <td><?=$data?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mok8->showStudents() as $data):?>
            <td><?=$data?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mok9->showStudents() as $data):?>
            <td><?=$data?></td>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($mok10->showStudents() as $data):?>
            <td><?=$data?></td>
        <?php endforeach;?>
    </tr>
</table>
</body>
</html>