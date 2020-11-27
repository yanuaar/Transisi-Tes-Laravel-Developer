<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dasar 2 - Nomor 4</title>
</head>
<body>
    <table width = 500>
        <?php
        
        $x=1;
        
        for ($i=0; $i < 8; $i++) {
            echo "<tr>";
            
            for ($j=0; $j < 8; $j++) {
                if($x==1||$x==2||$x==5||$x==7||$x==10||$x==11||$x==13||$x==14||$x==17||$x==19||$x==22||$x==23||$x==25||$x==26||$x==29||$x==31||$x==34||$x==35||$x==37||$x==38||$x==41||$x==43||$x==46||$x==46||$x==47||$x==49||$x==50||$x==53||$x==55||$x==58||$x==59||$x==61||$x==62){
                    echo "<td style='background-color:#000000;color: #fff;text-align: center;'>".$x."</td>";
                }
                else{
                    echo "<td style='text-align: center;'>".$x."</td>";
                }
                $x++;
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>