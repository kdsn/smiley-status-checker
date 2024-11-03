<?php
$title = " - Dokumentation";
$uri = "dokumentation";

include "templates/header.php";
?>

    <div class="frontpage-jumbotron">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1>Dokumentation</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row spacer-top">
            <div class="col">
                <h2>Få Smiley data ind i dit eget system</h2>
                <hr>

                <h3>Base URL</h3>
                GET / POST: https://smileycheck.dk/api

                <h3><span class="badge badge-secondary">Påkrævet</span> Søgeparametre</h3>
                Du kan kun vælge én søgemulighed <br>
                <br>
                <strong>løbenummer</strong><br>
                Søg specifikt på løbenummer.<br>
                <br>
                <strong>CVR nummer</strong><br>
                Søg specifikt på CVR nummer.<br>

                <hr>
                <h3>Versionsinformation</h3>

                <pre>
    1: 15/03 - 2024
    SmileyCheck.dk går live (domæne opdateret fra SmileyAPI.net).
                </pre>

            </div>
        </div>
    </div>

<?php
include "templates/footer.php";