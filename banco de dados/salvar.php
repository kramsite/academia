<?php
$DB = "alunos.txt";

// Função para pegar próximo ID
function proximoId($DB){
    if(!file_exists($DB)) return 1;
    $linhas = file($DB, FILE_IGNORE_NEW_LINES);
    $ultimoId = 0;
    foreach($linhas as $linha){
        $dados = explode("|", $linha);
        if((int)$dados[0] > $ultimoId){
            $ultimoId = (int)$dados[0];
        }
    }
    return $ultimoId + 1;
}


if(isset($_POST['nome']) && isset($_POST['modalidade'])){
    $nome = trim($_POST['nome']);
    $modalidade = trim($_POST['modalidade']);
    
    if($nome !== "" && $modalidade !== ""){
        $id = proximoId($DB);
        $linha = "$id|$nome|$modalidade\n";
        file_put_contents($DB, $linha, FILE_APPEND | LOCK_EX);
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Preencha todos os campos!";
    }
}
?>
