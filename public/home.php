<?php
include "templates/header.php";
?>
    <div class="frontpage-jumbotron">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1>SmileyCheck</h1>
                    <h4>Super simpelt API til opslag i smiley-ordningen</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 py-5-t">
                    <form method="post">
                        <div class="input-group input-group-lg">
                            <input name="search" type="text" id="vat" class="form-control" placeholder="Skriv navne-løbenummer eller firmanavn" autofocus>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="container py-5-t">
        <div class="row">
            <div class="alert alert-danger" role="alert">
                Kontroler navne-løbenummer eller firmanavn, der blev ikke fundet nogen resultater for det indtastede!
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col bg-dark text-light api-display">
                <p>
                    $ wget https://smileyapi.dk/api?search=
                </p>
                <p>
                <pre>
{
    "message": "No smiley found!"
}
                        </pre>
                </p>
            </div>
        </div>
    </div>

<?php
include "templates/footer.php";
?>