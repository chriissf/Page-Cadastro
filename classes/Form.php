<?php
class Form
{
    public static function alert($tipo, $mensagem)
    {
        if ($tipo == 'erro') {
            echo '<div style="background: rgba(0, 0, 255, 0.1); color:red; font-size:25px;display: flex; justify-content: center; align-items: center;margin-top: 1rem;">' . $mensagem . '</div>';
            return false;
        } elseif ($tipo == 'sucesso') {
            echo "<div style=background: rgba(0, 0, 255, 0.1); color: green; font-size: 25px; display: flex; justify-content: center; align-items: center; height: 100vh;" . $mensagem . '</div>';
            return true;
        }
    }

    public static function cadastrar($nome, $sobrenome, $email, $senha)
    {
        $pdo = Mysql::conectar();
        $sql = $pdo->prepare("INSERT INTO `formulario` VALUES (null,?,?,?,?)");
        $sql->execute(array($nome, $sobrenome, $email, $senha));
    }
}
