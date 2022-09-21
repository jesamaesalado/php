<?php 
if(isset($_POST['gen'])){
    $result='';
   if(isset($_POST['chkone'])){
    PassGenerator(6);
   }else if(isset($_POST['chktwo'])){
    PassGenerator(10);
   }else if(isset($_POST['chkthree'])){
    PassGenerator(12);
   }else{
    PassGenerator(8);
   }

   
}
function PassGenerator($len){
    global $result;
    $ValidChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$!%&@';
    while (0<$len--) {
        $result.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
    }
}



?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PASSWORD</title>
</head>
<body>
    <table align="center">
        <tr>
            <td><h1>Password Generator</td>
</tr>
<tr>
    <td>
                <form class="" action="" method="post">
                    <input type="text" name="result" value="<?php echo(@$result);?>"><br>
                    <input type="checkbox" name="chkone" value="6">6 Character <br>
                    <input type="checkbox" name="chktwo" value="10">10 Character <br>
                    <input type="checkbox" name="chkthree" value="12">12 Character <br>
                    <input type="submit" name="gen" value="Generate">
</td>
</tr>
</table>