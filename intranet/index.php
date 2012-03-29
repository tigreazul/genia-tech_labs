<?php 
 
    session_start();
    include_once "conexion.php";
 
    import_request_variables("GP", "");
    function verificar_login($user,$password,&$result)
    {
        $sql = "SELECT * FROM usuario WHERE usuario = '$user' and clave = '$password'";
        $rec = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_object($rec))
        {
            $count++;
            $result = $row;
        }
        if($count == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    if(!isset($_SESSION['userid']))
    {
        if(isset($_POST['login']))
        {
            if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
            {
                $_SESSION['userid'] = $result->idusuario;
                $_SESSION['username'] = $result->usuario;
                $_SESSION['name'] = $result->nombres;
                $_SESSION['type'] = $result->type;
                    header("location:index.php");
            }
            else
            {
                echo 'Su usuario es incorrecto, intente nuevamente.';
            }
        }
 
        ?>
            <form action="" method="post">
            Username <input name="user" type="text" class="textbox1" value="<? echo $user; ?>"><br/>
            Password <input name="password" type="password" class="textbox1"><br/>
 
            <input name="login" type="submit" value="login">
            </form>
        <?
    }
    else
    {
        echo 'Su usuario ingreso correctamente.';
        echo '<a href="logout.php">Logout</a>';
    }
?>