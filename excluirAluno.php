<?php
include_once('conexao.php');

//isset verifica se foi setado algum valor para $_GET["idAluno"]
if (isset($_GET["idAluno"])) {
    $idAluno = $_GET["idAluno"];
    $sql = "DELETE FROM Aluno WHERE idAluno = $idAluno";

    try {
        $conn->query($sql);
?>
        <script>
            alert("EXCLUÍDO COM SUCESSO");
            window.location = "listaAluno.php"
        </script>
    <?php
    } catch (Exception $e) {
    ?>
        <script>
            alert("ERRO AO EXCLUIR");
            window.history.back();
        </script>
<?php
    }
}
?>