<?php
try {
    $conexao = new PDO("mysql:host=localhost; dbname=pets", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}
// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
    $nomeA = (isset($_POST["nomeA"]) && $_POST["nomeA"] != null) ? $_POST["nomeA"] : "";
    $nomeD = (isset($_POST["nomeD"]) && $_POST["nomeD"] != null) ? $_POST["nomeD"] : "";
    $Contato = (isset($_POST["Contato"]) && $_POST["Contato"] != null) ? $_POST["Contato"] : NULL;
} else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $id
    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
    $nomeA = NULL;
    $nomeD = NULL;
    $Contato = NULL;
    
};
include ('editar.php');
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nomeA != "") { 
    try {
        if ($id != "") {
            $stmt = $conexao->prepare("UPDATE animais SET nomeA=?, nomeD=?, Contato=? WHERE id = ?");
            $stmt->bindParam(4, $id);
        } else {
            $stmt = $conexao->prepare("INSERT INTO animais (nomeA, nomeD, Contato) VALUES (?, ?, ?)");
        }
       
        $stmt->bindParam(1, $nomeA);
        $stmt->bindParam(2, $nomeD);
        $stmt->bindParam(3, $Contato);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo $msg =  "Dados cadastrados com sucesso!";
                echo "<script type='text/javascript'>alert('$msg');</script>";
                $id = null;
                $nomeA = null;
                $nomeD = null;
                $Contato = null;
            } 
            else {
                               
                echo "Erro ao tentar efetivar cadastro";
            }
        } else {
               throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }

    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    };
    
    include('delete.php');
}
?>