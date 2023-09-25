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


//------------------------------三個亂數------------------------------------

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
        }
        $_SESSION['arr']=$rand;3
//------------------------------計算次數-----------------------------------

            if (!isset($_SESSION['time']))
            {
                $_SESSION['time'] = 0;
            }

            if (isset($_POST['submit']))
            {
                $_SESSION['time']+=1;
            }
//-------------------------------計算相等-----------------------------------------------------------------------
        $result = abs($_SESSION['arr'][1] - $_SESSION['arr'][0]) ==  abs($_SESSION['arr'][2] - $_SESSION['arr'][1]);
    }
//------------------------------確認是第幾次--------------------------------------------------------------------

if(!isset($_SESSION['check']))
{
    $_SESSION['check']=0;
}
else
{
    $_SESSION['check']=1;
}
?>
</form>
</body>
</html>




