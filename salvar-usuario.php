<?php
    switch($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_nasc = $_POST['data_nasc'];

            $sql = "INSERT INTO usuario (nome,email,senha, data_nascimento) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";


                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Cadastrado com sucesso')</script>";
                    print "<script>location.href= '?page=home' </script>";
                }else{
                    print "<script>alert('Não foi possivel cadastrar o usuario')</script>";
                    print "<script>location.href= '?page=listar' </script>";
                }

            break;
        case 'editar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data_nasc = $_POST['data_nasc'];

            $sql = "UPDATE usuario set
                nome='{$nome}',
                email='{$email}',
                senha='{$senha}',
                data_nascimento='{$data_nasc}'
            ";

                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Cadastrado com sucesso')</script>";
                    print "<script>location.href= '?page=listar' </script>";
                }else{
                    print "<script>alert('Não foi possivel cadastrar o usuario')</script>";
                    print "<script>location.href= '?page=listar' </script>";
                }

            break;
        case 'excluir':

            $sql = "DELETE FROM usuario WHERE cod = ". $_REQUEST['id'];

            $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('excluido com sucesso')</script>";
                    print "<script>location.href= '?page=listar' </script>";
                }else{
                    print "<script>alert('Não foi possivel excluir o usuario')</script>";
                    print "<script>location.href= '?page=listar' </script>";
                }

            break;
    }