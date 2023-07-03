<script> 
    function mudaDisplay(div){
        document.getElementById(div).style.display = 'block';
    }
</script>

<?php
    
    function gerakey($t){ 
        global $key;
        $car = "1234567890abcdefghijklmnopqrstuvwxyz";
        for ($i = 0; $i < $t; $i++) {
            $key .= $car{rand(0, strlen($car) - 1)};
        } 
        return $key;
    }
?>

<?php
    function criaimagem(){
        $key = gerakey(4);
        $img = ImageCreate(130,20);
        $fundo = ImageColorAllocate($img,0,0,0);
        $texto = ImageColorAllocate($img,200,200,200);
        ImageString($img,5,23,2,$key,$texto); 
        ImageJpeg($img,"captcha.jpg");
    }
    criaimagem();
?>

<script>
    function ValidaForm()
    {
        captcha = "<?php echo $key; ?>";
        if (document.forms['formFaleConosco'].captcha.value != captcha) {
            alert("Código de verificação incorreto, favor tentar novamente");
            return false;
        }
    }
</script>

<div class="single">
    <div class="container">
        <div class="single-page-artical">
            <div class="artical-content col-md-12">
                <div class="fale-form">
                    <h3>Fale conosco</h3>
                    <p>Utilize o formulário abaixo para entra em contrato com o SINPROESEMMA - Barra do Corda, ou envie um e-mail para <b>sinproesemmabdc@gmail.com .</b></p>
                    <span class="msg" id="msg">Obrigado por entrar em contato conosco. Em breve responderemos a sua menságem.</span>
                    <?php
                        $msg = "";
                        if(isset($_GET["msg"])){
                            $msg = $_GET['msg'];
                            if(!strcmp($msg, "ok")){
                                echo "<script> mudaDisplay('msg'); </script>";
                            }
                        }
                    ?>
                    <form action="insere_faleconosco.php" method="POST" onsubmit="return ValidaForm()" id="formFaleConosco">
                        <span><label for="nome">Seu nome</label><input type="text" name="nome" size="88" required ></span>
                        <span><label for="email">Seu e-mail</label><input type="text" name="email" size="88" required ></span>
                        <span><label for="email">Menságem</label><br><textarea name="texto" rows="8" required ></textarea></span>
                        <div id="captcha">
                            <label for="captcha">Digite o código ao lado: </label>
                            <input type="text" name="captcha">
                            <img src="captcha.jpg" border=0 />
                        </div>

                        <span ><input type="submit" id="botao" value="Enviar"></span>
                    </form>
                </div>
                </div>
            </div>             
        </div>
    </div>
</div>