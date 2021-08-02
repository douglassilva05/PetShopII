<?php
try {
 
    $stmt = $conexao->prepare("SELECT * FROM animais");
 
        if ($stmt->execute()) {
            while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>".$rs->nomeA."</td><td>".$rs->nomeD."</td><td>".$rs->Contato
                           ."</td><td><center><a href=\"?act=upd&id=" .$rs ->id."\">[Alterar]</a>"
                           ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                           ."<a href=\"?act=del&id=" . $rs->id . "\">[Excluir]</a></center></td>";
                echo "</tr>";
                
            }
        } else {
            echo "Erro: Não foi possível recuperar os dados do banco de dados";
        }
} catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}
include('delete.php');
?>