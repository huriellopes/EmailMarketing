<?php
    require_once __DIR__ . "/includes/menu.php";
?>

<div class="row">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <h1>Lista de E-Mails</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <table class="table table-hover" id="emails">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-Mail</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($this->view->email > 0) : ?>
                        <?php foreach ($this->view->email as $email) : ?>
                            <tr>
                                <td><?=$email['nome'];?></td>
                                <td><?=$email['email'];?></td>
                                <td><?=$email['ativo']=='1' ? 'Ativo' : 'Inativo';?></td>
                            </tr>
                        <?php endforeach;?>
                    <?php endif;?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>E-Mail</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<?php
    require_once __DIR__ . "/includes/footer.php";
?>
