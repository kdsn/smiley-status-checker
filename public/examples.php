<?php
$title = " - Eksempler";
$uri = "eksempler";

include "templates/header.php";
?>

    <div class="frontpage-jumbotron">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1>Eksempler</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row spacer-top">
            <div class="col">
                <h2>Se eksempler på hvordan du kan lave opslag i Smiley registret</h2>
                <hr>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                PHP og cURL
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

<pre><code>
&lt;?php
function smileyapi($lbnr){
    code
}

</code></pre>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php
include "templates/footer.php";