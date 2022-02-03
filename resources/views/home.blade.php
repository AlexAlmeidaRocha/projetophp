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
                <a href="https://www.linkedin.com/in/alex-almeida-24049a213/"target="_blank">Sobre Alex</a>
            </li>
        </ul>
    </div>   
</head>
<body>
    <div>
        <h1>Formulario de Aniversario</h1>
    </div>
    <form name="calculo" method="POST" action="">
        <div>
            <div>                
                <label for="title">Informe seu nome:</label>
            </div>
            <div>
                <input type="text" class="from-control" id="nome" name="nome" placeholder="Seu Nome" value=""/>
            </div>
        </div> 
        <div>
            <div>                
                <label for="title">Informe a data do seu nascimento:</label>
            </div>
            <div>
                <input type="number" min = "1"max = "31" class="from-control" placeholder="Dia "id="dia_nascimento" name="dia_nascimento" value=""/> / <input type="number" min = "1"max="12" class="from-control" placeholder="Mês "id="mes_nascimento" name="mes_nascimento" value=""/> / <input type="number" min = "1900"max="2999" class="from-control" placeholder="Ano "id="ano_nascimento" name="ano_nascimento" value=""/>
            </div>
            <p>
                <input type="text" class="from-control" readonly="readonly" id="resultado" name="resultado" value="" style="width: 35%;" />
            </p>
        </div>         
    </form>
    <div>
        <button id='btn_form' >Resultado</button>                  
    </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript">

    jQuery(function ($) {
        $("#btn_form").click(function () {
            
            var a = new Date,
            ano_atual = a.getFullYear(),
            mes_atual = a.getMonth(),
            dia_atual = a.getDate();

            var nome = $("#nome").val();
            var dia_nascimento = $("#dia_nascimento").val();
            var mes_nascimento = $("#mes_nascimento").val();
            var ano_nascimento = $("#ano_nascimento").val();
            
            var idade = ano_atual - ano_nascimento;

            if (mes_atual < mes_nascimento || mes_atual == mes_nascimento && dia_atual < dia_nascimento)
                idade -= 1;

            $("#resultado").val("Meu nome é " + nome +", nasci em " + dia_nascimento + "/" + mes_nascimento + "/" + ano_nascimento + " e minha idade é " + idade + " anos.");

            alert("Meu nome é " + nome +", nasci em " + dia_nascimento + "/" + mes_nascimento + "/" + ano_nascimento + " e minha idade é " + idade + " anos.");
        });
    });
</script>