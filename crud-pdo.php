<?php

    //Criando a conexão com o banco de dados usando o PDO
    //Para montar a conexão, passamos: DBNAME, HOST, USUÁRIO E SENHA

    try{
        $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
    }
    catch(PDOException $e){
        echo "Erro com o banco de dados: ".$e->getMessage();
    }
    catch(Exception $e){
        echo "Erro genérico: ".$e->getMessage();
    }  

// ---------------- CRIANDO O INSERT -------------------------------------------

    // Primeira forma: Usando o prepare, eu devo passar um parametro que depois devemos substituir
            //$res = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email) VALUES (:n, :t, :e)");
            //Método bindParam não aceita valor diretamente, somente variáveis, devo tratar antes
            //$nome = "Miriam";
            //$res->bindParam(":n",$nome);
            
            //Método bindValue aceita parametro e valor 
            //$res->bindValue(":n","Joana");
            //$res->bindValue(":t","99999999");
            //$res->bindValue(":e","joana@gmail.com");
            //$res->execute();

    // Segunda forma: Usando o query, não há necessidade de mudança alguma, apenas a execução
            //$pdo->query("INSERT INTO pessoa (nome, telefone, email) VALUES ('Jenifer', '11111111', 'jen@hotmail.com')");

// ---------------- CRIANDO O DELETE -----------------------------------------

    // Primeira forma: Usando o prepare, eu devo passar um parametro que depois devemos substituir
            //$cmd = $pdo->prepare("DELETE FROM pessoa WHERE id= :id");
            //$id = 2;
            //$cmd->bindValue(":id",$id);
            //$cmd->execute();


    // Segunda forma: Usando o query, não há necessidade de mudança alguma, apenas a execução
            //$cmd = $pdo->query("DELETE FROM pessoa WHERE id= '3'");

// ---------------- CRIANDO O UPDATE -----------------------------------------

    // Primeira forma: Usando o prepare, eu devo passar um parametro que depois devemos substituir
            //$cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");
            //$cmd->bindValue(":e","paulo.leme@gmail.com");
            //$cmd->bindvalue(":id",1);
            //$cmd->execute();

    // Segunda forma: Usando o query, não há necessidade de mudança alguma, apenas a execução
            //$cmd = $pdo->query("UPDATE pessoa SET email = 'jenifer_jen@gmail.com' WHERE id = '4'");

// ---------------- CRIANDO O SELECT -----------------------------------------
            
            //$cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
            //$cmd->bindValue(":id", 4);
            //$cmd->execute();
            // Usando uma função para transformar essa informação do banco de dados em array
            //$resultado = $cmd->fetch(PDO::FETCH_ASSOC); // apenas para uma linha
            //$cmd->fetchAll(); // Mais de um registro do banco de dados
            //foreach($resultado as $key =>$value){
            //    echo $key." : ".$value."<br>";
            //}

?>