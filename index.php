
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Liceu Brasil">

    <meta name="theme-color" content="#0d6efd">
    <!-- Title-->
    <title>Liceu Brasil</title>
    <!-- Favicon-->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
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


  <body>
    <!-- Preloader-->
    <div id="preloader">
      <div class="apland-load"></div>
    </div>
   
    <!-- Register Area-->
    <div class="register-area d-flex">
      <div class="register-content-wrapper d-flex align-items-center">
        <div class="register-content">
          <!-- Logo--><a class="logo" href="#"><img class="logo-img" src="img/core-img/logo-azul.png" alt=""></a>
       
          <p class="paragrafo-parabens">PARABÉNS! 🥳🙏 Você GANHOU uma <b style="color:rgb(4, 24, 92)">BOLSA DE ESTUDO 100% GRÁTIS</b> no 
      
            LICEU BRASIL 
        
          . Agora o próximo passo é agendar sua visita para realizar a matrícula. </p>
          
          <h5 class="nome-exibicao">Samuel</h5>
       
          <!-- Form-->
          <div class="register-form">

            <form method="get" action="parabens.php">
         
            <div class="form-group mb-3"><i class="lni-calendar"></i>
                <select class="form-control form-control-sm" id="data" name="data" aria-label="Grupo" onchange="getValor(this.value, <?php echo $id_unidade;?> )" required>
         
                      <option value="0" >Selecione a data</option>
                    
                     <option value="18/12/2000">03/07 (quinta)</option>
                    
                </select>
              </div>
              <div class="form-group mb-3"><i class="lni-alarm-clock"></i>
                <select class="form-control form-control-sm" id="hora" name="hora" aria-label="Grupo" required>
                  
                    <option value="" >Selecione o horário</option>
                    <option value="" >09:00</option>
                    <option value="" >10:00</option>
                    
                </select>
              </div>   
           
          </div>
          <!-- Sign in via others-->
          <div class="signin-via-others">
      
            <input class="botao-agenda w-100 mt-3" type="submit" value="AGENDAR DATA" />
          </div>
          </form>
          <p style="margin-top: 20px">
 

  
          • Compareça no dia e hora marcados com 15 minutos de antecedência.<br><br>
          • Leve o RG, CPF, comprovante de endereço e protocolo de inscrição (recebido por whatsapp logo após a inscrição) do contemplado com a bolsa.<br><br>

          <b>OBS: caso seja menor de idade, o aluno deve comparecer com o responsável.</b></p>

   
          
          
          <!-- Footer Copwrite Area-->
          <div class="footer-bottom">
            <p>Todos direitos reservados <i class="lni-heart"> </i> by  <a href="https://liceubrasil.com.br">Liceu Brasil</a></p>
          </div>
        </div>
      </div>
      <!-- Register Side Content-->
    <div class="register-side-content bg-img" style="background-image: url(img/bg-img/fundo.png);"></div>
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
