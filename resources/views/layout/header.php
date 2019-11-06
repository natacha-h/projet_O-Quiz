<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Reset CSS -->
        <link href="<?= url('/assets/css/reset.css') ?>"  rel="stylesheet">

        
        <!-- Inclusion Bootsrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Really beautiful CSS -->
        <link rel="stylesheet" href="<?= url('assets/css/style.css') ?>"  >
        
        <title>O'Quiz</title>
    </head>
    <body>
        <main class="container">
        <div class="jumbotron jumbotron-fluid">
            <h1>O'Quiz</h1>
            <p class="lead">Le site qui va vous échauffer les neurones.</p>
        </div>
        
        <?php
include __DIR__.'/../partials/nav.php';
?>