<?php
$title = " - Kontakt";
include "templates/header.php";
?>

    <div class="frontpage-jumbotron">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1>Hjælp</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row spacer-top">
            <div class="col">
                <h2>Hvorfor har i data om mig?</h2>
                <hr>
                SmileyCheck indsamler ikke data selv, men anvender data fra Fødevarestyrelsen. Hver sjette time opdaterer SmileyCheck sin database ved at hente en XML-fil fra https://www.findsmiley.dk. Disse data bliver derefter gjort tilgængelige gennem et API.

            </div>
        </div>
    </div>

<?php
include "templates/footer.php";