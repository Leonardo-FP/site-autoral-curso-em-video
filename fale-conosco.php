<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>O básico do LOL</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="form.css"/>
    <script language="javascript" src="_javascript/funcoes.js"></script>
    <script>
        <?php
        if (isset($_GET["cadastrado"])) {
            echo "alert('cadastrado com sucesso');";
        }
        ?>
        function calc_total(){
            var qtd = parseInt(document.getElementById('cQtd').value);
            tot = qtd * 1500;
            document.getElementById('cTot').value = tot;
        }
    </script>
</head>
<script language="javascript" src="_javascript/funcoes.js"></script>

<body>

<div id="interface">
    <header id="cabecalho">
    <hgroup class="posicao">
    <br><br>
    <h1>O básico do LOL</h1>
    <h2>Conhecimentos que todo player deveria ter em</h2>
    
    </hgroup>
    
    <img id="icone" src="_imagens/ping.png" alt="">
    <nav id="menu">
    <h1>Menu Principal</h1>
        <ul>
        <li onmouseover="mudaFoto ('_imagens/imagem-principal.png')" onmouseout="mudaFoto ('_imagens/ping.png')"><a href="index.html">Home</a></li>
        <li onmouseover="mudaFoto ('_imagens/runas-lol.png')" onmouseout="mudaFoto ('_imagens/ping.png')"><a href="runas.html">Runas</a></li>
        <li onmouseover="mudaFoto ('_imagens/atributos.png')" onmouseout="mudaFoto ('_imagens/ping.png')"><a href="atributos.html">Atributos</a></li>
        <li onmouseover="mudaFoto ('_imagens/itens.png')" onmouseout="mudaFoto ('_imagens/ping.png')"><a href="itens.html">Itens</a></li>
        <li onmouseover="mudaFoto ('_imagens/rotas-no-lol-fundo.png')" onmouseout="mudaFoto ('_imagens/ping.png')"><a href="rotas.html">Guia de Rotas</a></li>
        <li onmouseover="mudaFoto ('_imagens/ping.png')" onmouseout="mudaFoto ('_imagens/ping.png')"><a href="fale-conosco.php">Fale Conosco</a></li>
        </ul>
    </nav>
    </header>

    <section id="corpo-full">
        <article id="noticia-principal">
        <hgroup>
            <header id="cabecalho-artigo">
                <h2>O básico do LOL > Fale Conosco</h2>
            </header>
        </hgroup>

    <form method="post" id="fContato" action="gravarDados.php" oninput="calc_total();">
        <fieldset id="usuario"><legend>Identificação do Usuário</legend>
            <p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"></p>
            <p><label for="cSenha">Senha:</label> <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="Senha"></p>
            <p><label for="cMail">E-mail:</label> <input type="email" name="tMail" id="cMail" size="20" maxlength="40"></p>
            <fieldset id="sexo"><legend>Sexo</legend>
                <input type="radio" value="M" name="tSexo" id="cMasc" checked> <label for="cMasc">Masculino</label><br>
                <input type="radio" value="F" name="tSexo" id="cFem"> <label for="cFem">Feminino</label>
            </fieldset>
            <p>Data de Nascimento: <input type="date" name="tNasc"></p>
        </fieldset>
        
        <fieldset id="endereco"><legend>Endereço do Usuário</legend>
            <p><label for="cRua">Logradouro:</label> <input type="text" name="tRua" id="cRua" size="13" maxlength="80" placeholder="Rua"></p>
            <p><label for="cNum">Número:</label> <input type="number" name="tNum" id="cNum" min="0" max="99999"></p>
            <p><label for="cEst">Estado:</label>
            <select name="tEst" id="cEst"> 
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP" selected>São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Rio Grande do Sul</option>
            </select></p>
            <p><label for="cCid"></label>Cidade:</label>
            <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade"></p>
        </fieldset>
        
        <fieldset id="mensagem"><legend>Mensagem do Usuário</legend>
            <p><label for="cUrg">Satisfação: </label>
                Mín<input type="range" name="tUrg" id="cUrg" min="0" max="10" step="2">Max</p>
            <p><label for="cMsg"><legends>Mensagem:</legends></label>
                <textarea name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
        </fieldset>
        <input type="image" name="tEnviar" src="_imagens/botao-enviar.png">
        </form>

    <footer id="rodape">
        <p>Copyright 2021 - by Leonardo Paulelli <br>
            <a href="https://www.facebook.com/leonardo.francapaulelli" target="blank">Facebook</a> | 
            <a href="https://www.instagram.com/leo0_fp/" target="blank">Instagram</a></p>
    </footer>
</div>
</body>
        
        
</html>