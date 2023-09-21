<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>test.php</title>
</head>
<body>
<form action="test.php" method="post">
<input type="submit" name="submit" id="submit" value="送出"> </br>
<?php
session_start();

if (!isset($_SESSION['time']))
{
    $_SESSION['time'] = 0;
}

if (isset($_POST['submit']))
{
    $_SESSION['time']+=1;
}
    echo "{$_SESSION['time']}"."</br>";

//------------------------------------------------------------------

if (isset($_POST['submit']))
    {
        $rand = array();

        for ($i = 0; $i < 10; $i++) 
        {
            while(count($rand)<3)
            {
                $randon = rand(0, 9);
                if(!in_array($randon,$rand))
                {
                    $rand[]=$randon;
                }
            }
            print_r($rand);
            echo "</br>";
            $rand=array();
        }
    }

?>
</form>
</body>
</html>




