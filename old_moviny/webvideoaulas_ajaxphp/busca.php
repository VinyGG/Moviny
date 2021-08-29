<?php header('Content-Type: text/html; charset=iso-8859-1');?>
<?php
$conecta = mysql_connect("localhost", "root", "")or die("Erro ao conectar!");
$banco = mysql_select_db("aula_ajaxphp")or die("Erro ao selecionar BD!");
//fim da conexão com o banco de dados

$palavra = $_POST['palavra'];

$sql = "SELECT * FROM pessoas WHERE nome LIKE '%$palavra%'";
echo $sql;
echo "<br />";
echo "<br />";
$query = mysql_query($sql);
print_r($query);
echo "<br />";
echo "<br />";
$qtd = mysql_num_rows($query);
print_r($qtd);
echo "<br />";
echo "<br />";
?>
<section class="panel col-lg-9">

    <header class="panel-heading">
        Dados da busca:
    </header>
    <?php
    if($qtd>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Id</th>
                <th><i class="icon_profile"></i> Nome</th>
                <th><i class="icon_mail_alt"></i> Ano</th>
            </tr>
            <?php 
            while($linha = mysql_fetch_assoc($query)){
            ?>
            <tr>
                <td><?=$linha['id'];?></td>
                <td><?=$linha['nome'];?></td>
                <td><?=$linha['email'];?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }else{?>
    <h4>Nao foram encontrados registros com esta palavra.</h4>
    <?php }?>
</section>