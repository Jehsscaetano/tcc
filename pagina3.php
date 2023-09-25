<html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Inscrição</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            background-image: url('https://live.staticflickr.com/65535/53211493798_176b83393c_o.png');
            background-attachment: fixed;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            align-items: center;
        }

        .header {
            background-image: url('https://live.staticflickr.com/65535/53211470364_59690f230a_o.png');
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 180px;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px;
            width: 500px;
            text-align: center;
            margin-top: 40px;
            position: relative;
        }

        h1 {
            font-size: 24px;
        }

        p {
            font-size: 18px;
            margin-top: 10px;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }
		button-primary {
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
    <div class="header"></div>
    <div class="container">
        <h1>Sua inscrição para o EDF 2023 foi confirmada com sucesso!</h1>
        
            <p><b>Data: 09 de outubro</b><br></p>
            <b>Horários:</b> (sáb: das 13h às 21h – abertura dos portões às 12h) e (dom: das 8h às 17h - abertura dos portões às 7:30h)</b><br><br>
            <b>Local:</b> Colégio Eucarístico - Rua Tenente Coronel Cardoso, 595 - Campos dos Goytacazes <br><br>
       
			
        <p>Obrigado por se inscrever!</p>
		<button onclick="window.print()">Imprimir Confirmação</button><br><br>

		<button-primary><a href=pagina1.html> Voltar à Página Principal </a></button-primary>
	
    </div>
</body>
</html>
