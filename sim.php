<html>
    <head>
        <title> Site de Doações</title>
        <link href="estilo.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body>
        <div id="logo">

        </div>
        <div id="menu">
            <center>
                <ul>
                    <li><a href="sobre.html">Sobre nós </a> </li>
                    <li> <a href="quem.html">Quem recebe</a></li>
                    <li><a href="contato.html">Contato</a> </li>
                </ul>
            </center>
         
        </div>
        <div id="principal">
            <table>
                <tr>
                    <td> <img src="doar.png"> </td>
                    <td> 
                        
                            <p> 

Parabéns por sua iniciativa!
</p>
<form action="gravar.php" method="post">
Escolha o que deseja doar?
 
 <select name="item">
    <option> Brinquedos</option>
    <option> Dinheiro</option>
    <option> Roupas/Cobertores</option>
    <option> Alimentos/Mercadorias</option>
 </select>
</p>
<p> Qual o seu contato (tel/email): <input type="text" id="contato" name="contato"></p>
<p> Observações: <br><textarea rows="10" cols="60" id="observações" name="obs"></textarea></p>
 <input type="submit" value="Enviar Dados">
<p> Iremos entrar em contato para receber as doações e repassar para quem precisa!</p>
</form>
Agradecemos de coração por sua solidariedade.
                            </p>
                        
                        </form>
                        <form action="ver.php" method="post">
                           <h2> Veja quem passou por aqui e contribuiu!</h2>
                            <br>
                            <input type="submit" class="btver" value="Ver doações" style="padding: 10px;background-color:yellow;">
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <div id="rodape">
            <center>
                     <marquee> Site desenvolvido pela turma CY3 Segunda 14h</marquee>
            </center>
    
        </div>

    </body>
</html>
