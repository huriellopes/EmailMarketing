<?php
    require_once __DIR__ . "/includes/menu.php";
?>

<div class="row">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <h1>Relatório</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <form action="/gera" method="POST">
                <div class="form-row">
                    <div class="col form-group">
                        <label>Período de: </label>
                        <input type="text" name="periodoDe" id="inicio" maxlength="10" class="form-control" autofocus required />
                    </div>

                    <div class="col form-group">
                        <label>Até de: </label>
                        <input type="text" name="AteDe" id="final" maxlength="10" class="form-control" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="col form-group">
                        <button type="submit" class="btn btn-outline-success">Gerar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    require_once __DIR__ . "/includes/footer.php";
?>
