
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Liceu Brasil">
    <meta name="author" content="Dirceu Silva">
    <meta name="theme-color" content="#0d6efd">
    <!-- Title-->
    <title>Liceu Brasil</title>
    <!-- Favicon-->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
  </head>
  <style>	
table {
    margin: 20px 0 40px;
}

thead {
    background-color: #00721B;
   color: white;
   font-weight: bold;
}

td, th {
    border: 1px solid black;
    padding: 15px 8px;
}

.fcc-btn {
  background-color: #c9e5d0;
  color: white;
  padding: 15px 25px;
  text-decoration: none;
  cursor: pointer;
  border: none;
}

</style>

<?php
/* ini_set('display_errors', 1);
error_reporting(E_ALL);  */

require_once('./env.php');
if(!empty($_GET["ref"])){
$id_site=$_GET["ref"];
$id_agendamento=$_GET["hora"];//É ISSO MESMO
//$id_curso=$_GET["id_curso"];
//$curso=$_GET["curso"];

$select_inscrito="SELECT * FROM tb_site where id='$id_site' ";
$result_inscrito=mysqli_query($CONNECTION_SITE,$select_inscrito);
$row_inscrito=mysqli_fetch_assoc($result_inscrito);

$nome=$row_inscrito["nome"];
$telefone=$row_inscrito["telefone"];
$id_unidade=$row_inscrito["id_unidade"];

$select_ag="SELECT id,vaga_preenchida,data,hora FROM tb_agenda where id='$id_agendamento'  ";
$result_ag=mysqli_query($CONNECTION_SITE,$select_ag);
$row_ag=mysqli_fetch_assoc($result_ag);

$id=$row_ag["id"];
$data_agendado=$row_ag["data"];
$hora_agendado=$row_ag["hora"];
$qtd=$row_ag["vaga_preenchida"]+1;


if(empty($_GET["q"])){

  $select_a="SELECT * FROM tb_site_agendado where id_site='$id_site' and id_agenda='$id' ";
  $result_a=mysqli_query($CONNECTION_SITE,$select_a);
  $row_a=mysqli_fetch_assoc($result_a);
  $total_rows=mysqli_num_rows($result_a);

if($total_rows<=0){
$insert = "insert into tb_site_agendado (id_site,id_agenda) values('$id_site','$id')";
mysqli_query($CONNECTION_SITE,$insert);

$update = "update tb_agenda set vaga_preenchida='$qtd'  where id='$id'";
$r_update  = mysqli_query($CONNECTION_SITE,$update);
}

header("Location:  ?ref=$id_site&hora=$id_agendamento&id_curso=$id_curso&curso=$curso&q=1");

}
 
}

?>
  <body>
    <!-- Preloader-->
    <div id="preloader">
      <div class="apland-load"></div>
    </div>
    <!-- Night Mode Area-->
    <div class="night-mode-wrapper position-fixed shadow-lg d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="right" title="View dark/default mode">
      <div class="form-check p-0 m-0">
        <input class="form-check-input p-0 m-0" id="darkSwitch" type="checkbox" value="">
        <label class="form-check-label" for="darkSwitch"></label>
      </div>
      <div class="night-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
        </svg>
      </div>
      <div class="default-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
        </svg>
      </div>
    </div>
    <!-- Register Area-->
    <div class="register-area d-flex">
      <div class="register-content-wrapper d-flex align-items-center">
        <div class="register-content">
          <!-- Logo--><a class="logo" href="#"><img src="img/core-img/logo_liceus.png" alt=""></a>
          <input type="hidden" id="ref" value="<?php echo $_GET['ref']; ?>">
          <h1>PARABÉNS! 🥳🙏</h1>
          <p> seu agendamento foi realizado com sucesso! </p>
            <p>Esperamos por você! <br> <br>
          
              <br>
              <br> Abraços, Lucas do Liceu<br>
          </p>

  <!--         <p>Para garantir seu curso EAD 100% GRATUITO envie uma mensagem para nosso whatsapp.</p>
          <div class="signin-via-others">
            <a class="btn btn-success w-100 mt-3 " href="#"> Enviar mensagem </a> 
          </div>
 -->

    
          
          
          <!-- Footer Copwrite Area-->
          <div class="footer-bottom">
            <p>Todos direitos reservados <i class="lni-heart"> </i> by  <a href="https://liceubrasil.com.br">Liceu Brasil</a></p>
          </div>
        </div>
      </div>
      <!-- Register Side Content-->
    <div class="register-side-content bg-img" style="background-image: url(img/bg-img/hero-6.jpg);"></div>
    </div>
    <!-- jQuery(necessary for all JavaScript plugins without bootstrap js)-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/one-page-nav.js"></script>
    <!-- All plugins activation code-->
    <script src="js/active.js"></script>
    <script src="js/dark-mode-switch.js"></script>
    <!-- <script src="adm/assets/js/agendamentos-datay.js"></script> -->
    <!-- <script src="adm/assets/js/agendamentos-datasabliceu.js"></script> --> 

    
  </body>
</html>