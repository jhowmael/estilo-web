<?php
$cakeDescription = 'MHS';
?>
<!DOCTYPE html>
<html>
<style>
    th a,
    td a,
    a {
        text-decoration: none;
    }

    .navbar-nav a.nav-link {
        color: black;
    }

    .navbar-nav a.nav-link:hover {
        color: blue;
    }

    .navbar-nav a.nav-link.active {
        color: blue;
    }

    td a {
        text-decoration: none;
    }

    .align-right {
        text-align: right;
    }

    .align-left {
        text-align: left;
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZwT" crossorigin="anonymous">

    <?= $this->Html->css([
        'bootstrap.min',
    ])
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <?= $this->element('navbar') ?>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>