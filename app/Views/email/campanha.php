<?php
    require_once __DIR__ . "/includes/menu.php";
?>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <h1>Campanha de E-Mail Marketing</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <form action="/envia" method="POST">
            <div class="form-row">
                <div class="col form-group">
                    <label>Titulo do E-mail: </label>
                    <input type="text" name="assunto" id="textAssunto" class="form-control" required autofocus />
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label>Mensagem: </label>
                    <textarea name="mensagem" id="textMensagem" class="form-control" maxlength="500" rows="10" required></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <button type="submit" id="enviaEmail" class="btn btn-outline-success" onclick="confirm('Deseja disparar o e-mail?');">Disparar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    require_once __DIR__ . "/includes/footer.php";
?>
