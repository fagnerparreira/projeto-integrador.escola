<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Controle de atividades acadêmicas</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <h1>Turma: <?php echo $tarefa['nome']; ?></h1>
            <p>
                <a href="tarefas.php">
                    Voltar para a lista de Turmas
                </a>
            </p>
<p>
                <strong>Concluída:</strong>
                <?php echo traduz_concluida($tarefa['concluida']); ?>
            </p>
            <p>
                <strong>Descrição:</strong>
                <?php echo exibe_descricao($tarefa['descricao']); ?>
            </p>
            <p>
                <strong>Prazo:</strong>
                <?php echo traduz_data_para_exibir($tarefa['prazo']); ?>
            </p>
            <p>
                <strong>Prioridade:</strong>
                <?php echo traduz_prioridade($tarefa['prioridade']); ?>
            </p>
            <h2>Anexos</h2>
            <?php if (count($anexos)>0) : ?>
            
            <table>
            <tr><th>Arquivo</th><th>Opções</th></tr>
            <?php foreach($anexos as $anexo) : ?>
            <tr>
                <td><?php echo $anexo ['nome']; ?>]</td>
            </tr>
            </table>
            <form method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Novo Anexo</legend>
                <input type="hidden" name="tarefa_id" value="<?php echo $tarefa ['id']; ?>"
                <label>
                    <?php if($tem_erros && array_key_exists('anexo', $erros_validacao)) : ?>
                        <span class='erro'>
                            <?php echo $erros_validacao['anexo']; ?>
                        </span>
                        <?php endif; ?>
                        <input type="file" name="anexo">
                </label>
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
       </div>
    </body>
</html>