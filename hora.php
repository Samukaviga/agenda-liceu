<?php 
date_default_timezone_set('America/Sao_Paulo');

require_once('./env.php');



$id_unidade=$_POST["id_unidade"];

$hoje=date("Y-m-d");
$data_c=$_POST["data"];


if ($data_c==$hoje) {
  
 $select_c="   
   SELECT
   p.nome as periodo,a.hora as hora,a.id
   FROM
     tb_agenda a
   INNER JOIN
      tb_periodo p ON a.id_periodo = p.id
    where a.id_unidade='$id_unidade' and  a.data='$data_c' and a.hora > '$hora'  and a.qtd_vaga > a.vaga_preenchida   order by hora asc
   
   ";

}else{

$select_c="  
   SELECT
  p.nome as periodo,a.hora as hora,a.id
  FROM
    tb_agenda a
  INNER JOIN
     tb_periodo p ON a.id_periodo = p.id
   where a.id_unidade='$id_unidade' and  a.data='$data_c'  and a.qtd_vaga > a.vaga_preenchida   order by hora asc
   
   ";


}




$result_c=mysqli_query($CONNECTION_SITE,$select_c);
echo  '<option value="" >Selecione o horário...</option>';
 while($row_c = mysqli_fetch_assoc($result_c)){ 
//echo "<option value='".$row_c["id"]."'>".date('H:i', strtotime($row_c["hora"]))."</option>";
echo "<option value='".$row_c["id"]."'>". $row_c["periodo"]." - ".date('H:i', strtotime($row_c["hora"]))."</option>";
 } 



 ?>

