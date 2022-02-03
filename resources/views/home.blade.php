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
                <a href="sobre">Sobre Alex</a>
            </li>
        </ul>
    </div>   
</head>
<body>
    <div>
        <h1>Olá Mundo</h1>
    </div>
    <form name="calculo" method="post" action="">
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
                <!-- <input type="date" class="from-control" id="data" name="data" value=""/> -->
                <input type="number" min = "1"max = "31" class="from-control" placeholder="Dia "id="dia_nascimento" name="dia_nascimento" value=""/> / <input type="number" min = "1"max="12" class="from-control" placeholder="Mês "id="mes_nascimento" name="mes_nascimento" value=""/> / <input type="number" min = "1900"max="2999" class="from-control" placeholder="Ano "id="ano_nascimento" name="ano_nascimento" value=""/>
            </div>
            <p>
                <input type="text" class="from-control" readonly="readonly" id="resultado" name="resultado" value=""/>
            </p>
        </div>         
    </form>
    <div>
        <button>Resultado</button>                  
    </div>
    
</body>
</html>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript">

    jQuery(function ($) {
        $("button").click(function () {
            var nome = "", dia_nascimento = 0, mes_nascimento = 0, ano_nascimento = 0, idade = 0; 
            var a = new Date,
            ano_atual = a.getFullYear(),
            mes_atual = a.getMonth(),
            dia_atual = a.getDate();

            nome = $("input[name=nome]").val();
            dia_nascimento = $("input[name=dia_nascimento]").val();
            mes_nascimento = $("input[name=mes_nascimento]").val();
            ano_nascimento = $("input[name=ano_nascimento]").val();
            
            idade = ano_atual - ano_nascimento;
            if (mes_atual < mes_nascimento || mes_atual == mes_nascimento && dia_atual < dia_nascimento)
                idade -= 1;
            $("input[name=resultado]").val("Meu nome é " +nome+", nasci em "+dia_nascimento+"/"+mes_nascimento+"/"+ano_nascimento+" e minha idade é "+idade+" anos.");
            return false;
        });
    });
</script>
