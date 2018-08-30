<?php
    require_once __DIR__ . "/includes/menu.php";
?>

<div class="row">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="container">
                    <div id="relatorio">
                        <div class="row mb-4">
                            <div class="col-md-12 col-sm-12">
                                <h3 class="text-center" style="align: center;">Relatório de E-Mail Marketing</h3>
                                <p class="text-center">Periodo de: <?=$_POST['periodoDe'];?>  Até: <?=$_POST['AteDe'];?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Cadastro</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($this->view->email > 0) :?>
                                            <?php foreach ($this->view->email as $emails) :?>
                                                <tr>
                                                    <td><?=$emails['nome'];?></td>
                                                    <td><?=$emails['email'];?></td>
                                                    <td><?=$emails['cadastro'];?></td>
                                                    <td><?=$emails['status'] == '1'?'Ativo':'Inativo';?></td>
                                                </tr>
                                            <?php endforeach;?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="4" rowspan="4" class="text-center font-weight-bold">Nenhum Registro encontrado!</td>
                                            </tr>
                                        <?php endif;?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Cadastro</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4 mb-5">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <button type="button" class="btn btn-outline-primary" id="imprime" onclick="printJS('relatorio', 'html');return false;">Imprimir</button>
        </div>
    </div>
</div>

<?php
    require_once __DIR__ . "/includes/footer.php";
?>
