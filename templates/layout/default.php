<?php
$cakeDescription = 'MHS';
?>
<!DOCTYPE html>
<html>
<style>
    .nav-link:hover {
        color: red !important;
    }

    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .content {
        flex: 1;
    }

    .main-footer {
        background-color: #f8f9fa;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('favicon.ico', 'img/icon.ico', array('type' => 'icon')) ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">


    <?= $this->Html->css([
        'bootstrap.min',
        'adminlte'
    ])
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <div class="row">
        <div class="col-md-2">
            <?= $this->element('aside') ?>
        </div>
        <div class="col-md-10">
            <?= $this->element('navbar') ?>
            <br>
            <div class="container shadow rounded">
                <br>
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
                <br>
                <br>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <strong>Copyright © 2023 Desenvolvido por: Jonatan Ismael</strong>
    </footer>
    <script src="https://kit.fontawesome.com/821b65200f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>

</html>