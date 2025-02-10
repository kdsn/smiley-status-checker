<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>SmileyCheck <?=$title;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://smileycheck.dk/public/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient">
    <div class="container">
        <a class="navbar-brand" href="/">SmileyCheck</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($uri == '' ? 'active' : ' ');?>" aria-current="page" href="/">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($uri == 'dokumentation' ? 'active' : ' ');?>" href="/dokumentation">Dokumentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($uri == 'eksempler' ? 'active' : ' ');?>" href="/eksempler">Eksempler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($uri == 'kontakt' ? 'active' : ' ');?>" href="/kontakt">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>