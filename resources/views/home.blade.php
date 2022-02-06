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
                <a href="https://www.linkedin.com/in/alex-almeida-24049a213/" target="blank">Sobre Alex</a>
            </li>
        </ul>
    </div>   
</head>
<body>
    <div>       
    <div>
        <h1>Formulario de Aniversario</h1>
    </div>
    <form>
        <div>
            <div>                
                <label for="title">Informe seu nome:</label>
            </div>
            <div>
                <input type="text" class="from-control" id="nome" name="nome" placeholder="Seu Nome"/>
            </div>
        </div> 
        <div>
            <div>                
                <label for="title">Informe a data do seu nascimento:</label>
            </div>
            <div>
                <input type="date" id="data_nasciemnto"/>
            </div>
            <div>
                <label id="resultado2"></label> 
            </div>
        </div>       
    </form>
    <div> 
        <button id='btn_form2'>Resultado</button>   
    </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.1/moment.min.js"></script>
<script type="text/javascript">

    jQuery(function ($) {        
        $("#btn_form2").click(function () {
            var nome = $("#nome").val();
            var data_nasciemnto = $("#data_nasciemnto").val();

            $.get("/resultado2",{data: data_nasciemnto}, function(data) {
                $("#resultado2").html("Meu nome é " + nome + ", nasci em " +  moment(data_nasciemnto).format('DD/MM/YYYY') + " e minha idade é " + data + " anos.");
            });
        });
    });
</script>