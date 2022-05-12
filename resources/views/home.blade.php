<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title> 
    <div>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>                
                <a href="https://www.linkedin.com/in/alex-almeida-rocha-24049a213/" target="blank">Sobre Alex</a>
            </li>
        </ul>
    </div> 
    <style>
        ul{
            list-style: none;
            text-transform: uppercase;
            position: absolute;  
            top: 0px; 
            left: 50%; 
            transform: translate(-50%,-50%);
        }
        li{
            display: inline-block;
            padding: 10px;
            border-radius: 10px;
            background-color: whitesmoke;
            margin: 3px;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: gray;
        }
        .tela{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        input{
            background-color: white;
            padding: 15px;
            border: none;
            border-radius: 10px;
            color: black;
            width: 100%;
        }
        button{
            border-radius: 10px;
            width: 107%;
            border: none;
            padding: 14px;
            background-color: white;
            color: black;                
        }
        button:hover{
            background-color: blue;
            cursor: pointer;
        }
    </style>  
</head>
<body>
    <div class="tela">       
        <div>
            <h1>Formulario de Aniversario</h1>
        </div>    
        <div>            
            <input type="text" class="from-control" id="nome" name="nome" placeholder="Seu Nome"/><br><br>            
        </div> 
        <div>               
            <label for="title">Data Nascimento:</label>            
        </div>
        <div>
            <input type="date" id="data_nasciemnto"/>                       
        </div> <br> 
        <div> 
            <button id='btn_buscaridade'>Resultado</button>   
        </div><br><br>
        <div>
            <label id="lb_resultado"></label> 
        </div>
    </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.1/moment.min.js"></script>
<script type="text/javascript">

    jQuery(function ($) {        
        $("#btn_buscaridade").click(function () {
            var nome = $("#nome").val();
            var data_nasciemnto = $("#data_nasciemnto").val();

            $.get("/buscaridade",{data: data_nasciemnto}, function(data) {
                $("#lb_resultado").html("Nome: " + nome + " - Nascido em: " +  moment(data_nasciemnto).format('DD/MM/YYYY') + " - Idade: " + data + "");
            });
        });
    });
</script>