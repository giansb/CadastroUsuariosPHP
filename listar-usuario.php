<?php

    $sql = "SELECT * FROM usuario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd>0){
        print "<table class='table table-striped table-white'>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>" . $row->cod . "</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nascimento."</td>";
            print "<td> <button onclick=\"location.href='?page=editar&id=" . $row->cod . "';\" class='btn btn-success'>Editar</button> 
            
            <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->cod . "';}else{false;}\">Excluir</button> </td>";
            print "</tr>";
        }
        print "</table>";
    } else{
        print "<p class='alert alert-danger'>Você não encontrou nenhum resultado</p>";
    }