<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form method="post" action="salvar-cliente.php">
        Nome:<input name="nome">
        <br>
        E-mail:<input name="email">
        <br>
        Telefone:<input name="telefone">
        <br>
        Rua:<input name="Rua">
        <br>
        Número:<input name="Número">
        <br>
        Bairro:<input name="Bairro">
        <br>
        Complemento:<input name="Complemento">
        <br>
        Cidade:<input name="Cidade">
        <br>
        <select name="estado">
        <option value="SP">AC</option>
        <option value="RJ">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="GO">GO</option>
        <option value="MS">MS</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="MG">RO</option>
        <option value="MG">RR</option>
        <option value="MG">SC</option>
        <option value="MG">SP</option>
        <option value="MG">SE</option>
        <option value="MG">TO</option>
        </select>
        Data de nascimento:<input name="Data de nascimento">
        <br>
        CPF:<input name="CPF">
        <br>
        RG:<input name="RG">
        <br>
        whatsapp:<input name="whatsapp">
        <br>
        fuma<input type="radio" name="fuma" value="sim">sim
        <input type="radio" name="fuma" value="não">Não
        <br>
        bebida(álcool)<input type="radio" name="bebida" value="sim">sim
        <input type="radio" name="bebida" value="não">Não
        <br>
        RG:<input name="RG">
        <br>
        <button type="submit">Salvar cadastro</button>  
    </form>
</body>
</html>