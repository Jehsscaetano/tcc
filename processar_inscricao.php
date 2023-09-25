<html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição no Evento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
			background-image: url('https://live.staticflickr.com/65535/53211199056_472dba93ee_o.png');
			background-attachment: fixed;
			background-size: 100% 100%;
			background-repeat: no-repeat;
			margin: 0;
            padding 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
		
		
		
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 25px;
            width: 500px;
			
        }
		
        .form-group {
            margin-bottom: 5px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }
		
    </style>
</head>
<body>
    <div class="container">
        <h1>Inscrição do EDF 2023</h1>
        <form action="processar_inscricao.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="data-nascimento">Data de Nascimento:</label>
                <input type="text" id="data-nascimento" name="data-nascimento" required>
            </div>
            <div class="form-group">
                <label for="telefone"> Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
           
		
	<div class="form-group">
	<label for="selgrupo">Qual seu grupo de Oração?</label>
	<select  id =" grupo " nome =" grupo " >
	<option value="selecione" > Selecione </option >
    <option value="g1" > A Boa Semente </option >
    <option value="g2" > Adoradores do Rei </option >
    <option value="g3" > Àgape </option >
    <option value="g4" > Alegria dos Anjos </option >
    <option value="g5" > Amigos do Rei </ option >
    <option value="g6" > Bom Pastor - Saturnino Braga </option>
    <option value="g7" > Cristo Redentor </option>
    <option value="g8" > Emanuel </option>
    <option value="g9" > Filhos de Maria </option>
    <option value="g10" > Fogo Abrasador </option>
    <option value="g11" > Fonte de Água Viva </option>
    <option value="g12" > Gou Halan </option>
    <option value="g13" > Guiados Pelas Mãos de Maria </option>
    <option value="g14" > Jesus Misericórdia </option>
    <option value="g15" > Jesus Príncipe da Paz </option>
    <option value="g16" > Jesus Redentor </option>
    <option value="g17" > Jovem Ruah </option>
    <option value="g18" > Mãe da Divina Misericórdia </option>
    <option value="g19" > Mãe do Infinito Amor </option>
    <option value="g20" > Maranatha </option>
    <option value="g21" > Maria Imaculada </option>
    <option value="g22" > Medalha Milagrosa </option>
    <option value="g23" > Nossa Senhora da Conceição </option>
    <option value="g24" > Nossa Senhora da Paz </option>
    <option value="g25" > Nossa Senhora da Penha </option>
    <option value="g26" > Nossa Senhora de Pentecostes </option>
    <option value="g27" > Nossa Senhora do Perpétuo Socorro </option>
    <option value="g28" > Orai Sem Cessar </option>
    <option value="g29" > Projeto de Paz </option>
    <option value="g30" > Rainha dos Apóstolos </option>
    <option value="g31" > Resgate </option>
	<option value="g32" > Rhema </option>
    <option value="g33" > Sagrada Família </option>
    <option value="g34" > Salve Rainha </option>
    <option value="g35" > Santa Ana </option>
    <option value="g36" > Santa Helena </option>
	<option value="g37" > Santa Rita </option>
	<option value="g38" > Santa Teresinha </option>
	<option value="g39" > Santos Anjos </option>
	<option value="g40" > São Benedito - Lagoa de Cima </option>
	<option value="g41" > São João Batista - Roças Velhas </option>
	<option value="g42" > São José Operário </option>
	<option value="g43" > São José Operário - São Francisco </option>
	<option value="g44" > São Miguel Arcanjo - Capão </option>
	<option value="g45" > São Miguel Arcanjo - Travessão </option>
	<option value="g46" > São Rafael Arcanjo </option>
	<option value="g47" > São Tarcísio </option>
	<option value="g48" > São Bento </option>
	<option value="g49" > Seguidores de Cristo </option>
	<option value="g50" > Sopro do Espírito Santo </option>
	<option value="g51" > Unção do Espírito Santo </option>
    </select >
	</div>
	 
	<div class="form-group">
	<label for="selministerio">Qual o ministério que serve em seu Grupo de Oração?</label>
	<select id="ministerio" nome="ministerio">
	<option value="selecione" > Selecione </option >
    <option value="intercessao" > Ministério de Intercessão </option >
    <option value="cura" > Ministério de Oração Cura e Libertação </option >
    <option value="pregacao" > Ministério de Pregação </option >
    <option value="formacao" > Ministério de Formação </option >
    <option value="humana" > Ministério de Promoção Humana </option >
    <option value="arte" > Ministério Música e Artes </option>
    <option value="familia" > Ministério Para as Famílias </option>
    <option value="comunicacao" > Ministério de Comunicação Social </option>
    <option value="univercidade" > Ministério Universidades Renovadas </option>
    <option value="jovem" > Ministério Jovem </option>
    <option value="crianca" > Ministério Crianças e Adolescentes </option>   
    </select >
	</div>
	
	<div class="form-group">
	<label for="selworkshop">Deseja fazer qual Workshop?</label>
	<select id="workshop" nome="workshop">
	<option value="selecione" > Selecione </option >
    <option value="wintercessao" > Workshop Ministério de Intercessão </option >
    <option value="wcura" > Workshop Ministério de Oração Cura e Libertação </option >
    <option value="wpregacao" > Workshop Ministério de Pregação </option >
    <option value="wformacao" > Workshop Ministério de Formação </option >
    <option value="whumana" > Workshop Ministério de Promoção Humana </option >
    <option value="warte" > Workshop Ministério Música e Artes </option>
    <option value="wfamilia" > Workshop Ministério Para as Famílias </option>
    <option value="wcomunicacao" > Workshop Ministério de Comunicação Social </option>
    <option value="wunivercidade" > Workshop Ministério Universidades Renovadas </option>
    <option value="wjovem" > Workshop Ministério Jovem </option>
    <option value="wcrianca" > Workshop Ministério Crianças e Adolescentes </option>
      
    </select >
	</div>
	
	
	<button type="submit"> <a href=pagina3.php>Enviar Inscrição</a></button>		
        </form>
    </div>
	<script>
        document.getElementById("data-nascimento").addEventListener("input", function (e) {
            let input = e.target;
            if (input.value.length === 2 || input.value.length === 5) {
                input.value += "/";
            }
        });
    </script>
		
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $dataNascimento = $_POST["data-nascimento"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $grupo = $_POST["grupo"];
    $ministerio = $_POST["ministerio"];
    $workshop = $_POST["workshop"];

    if (empty($nome) || empty($cpf) || empty($dataNascimento) || empty($telefone) || empty($email) || $grupo === "selecione" || $ministerio === "selecione" || $workshop === "selecione") {
        echo "Por favor, preencha todos os campos obrigatórios.";
    } else {
        echo "Inscrição realizada com sucesso!";

        // Você pode redirecionar o usuário para uma página de confirmação, se desejar
        // header("Location: pagina_de_confirmacao.html");
    }
} else {
      header("Location: formulario_de_inscricao.html");
}
?>
