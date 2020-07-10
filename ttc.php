<?php
$winner='n';
$box = array('','','','','','','','','');
if (isset($_POST['submitbtn'])){
$box[0] = $_POST["box0"];
$box[1] = $_POST["box1"];
$box[2] = $_POST["box2"];
$box[3] = $_POST["box3"];
$box[4] = $_POST["box4"];
$box[5] = $_POST["box5"];
$box[6] = $_POST["box6"];
$box[7] = $_POST["box7"];
$box[8] = $_POST["box8"];
//print_r($box);

if(($box[0]=='x' && $box[1]=='x' && $box[2]=='x')
    || ($box[3]=='x' && $box[4]=='x' && $box[5]=='x')
    ||($box[6]=='x' && $box[7]=='x' && $box[8]=='x')
    || ($box[0]=='x' && $box[3]=='x' && $box[6]=='x')
    || ($box[2]=='x' && $box[6]=='x' && $box[8]=='x')
    || ($box[2]=='x' && $box[4]=='x' && $box[6]=='x')
    || ($box[1]=='x' && $box[4]=='x' && $box[7]=='x')
    || ($box[2]=='x' && $box[5]=='x' && $box[8]=='x')
    || ($box[0]=='x' && $box[4]=='x' && $box[8]=='x')){
        $winner='x';
        echo "<h1> X win the game</h1>";
    }
    $blank=0;
    for ($i=0;$i<=8;$i++){
        if ($box[$i]==''){
            $blank=1;
        }
    }


    if ($blank==1 && $winner='n'){
        $i = rand() % 8;
        while($box[$i]!= ''){
            $i =rand()  %8;
        }
        $box[$i] = 'O';
        if(($box[0]=='O' && $box[1]=='O' && $box[2]=='O')
            || ($box[3]=='O' && $box[4]=='O' && $box[5]=='O')
            || ($box[6]=='O' && $box[7]=='O' && $box[8]=='O')
            || ($box[0]=='O' && $box[3]=='O' && $box[6]=='O')
            || ($box[2]=='O' && $box[6]=='O' && $box[8]=='O')
            || ($box[2]=='O' && $box[4]=='O' && $box[6]=='O')
            || ($box[1]=='O' && $box[4]=='O' && $box[7]=='O')
            || ($box[2]=='O' && $box[5]=='O' && $box[8]=='O')
            || ($box[0]=='O' && $box[4]=='O' && $box[8]=='O')){
            $winner='O';
            echo "<h1> O win the game</h1>";
        }}
    else if($winner=='n'){
        $winner=='t';
        echo "<h1> Tied game</h1>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>tictoc</title>
	<style type="text/css">
    #box{
    background-color: #c3ccb5;
			border: 3px solid #008000;
			width: 100px;
			height: 100px;
			font-size: 70px;
			text-align: center;	}
			#go{
				width: 150px;
			height: 50px;
			font-size: 20px;
		background-color:#cddc39;
			}
			#again{
				width: 200px;
			height: 50px;
			font-size: 20px;
		background-color:#cddc39;
        }
        #res{
            width: 150px;
            height: 50px;
            font-size: 20px;
        background-color:#cddc39;
	</style>
</head>
<h1 style="color: blueviolet; font-family: 'Bauhaus 93';font-style: oblique;font: 5px">TIC TOE TAC GAME BUILD BY LALWANI</h1>
<body bgcolor="green"; align="center";>
<form name="tictoc" action="ttc.php" method="post" id="form" onchange="this.form.submit()">

	<?php
	for ($i=0;$i<=8;$i++){
        printf('<input type="text" name="box%s" value="%s" id="box">',$i,$box[$i]);
	if($i==2 || $i==5 ||$i==8){
        echo " <br>";
    }
}
if($winner=='n'){

    printf('<br><input type="submit" name="submitbtn" value="PLAY" id="go">');
}
else{
   printf('<br><input type="button" name="newgamebtn" value="PLAY AGAIN" id="again" onclick="window.location.href=\'ttc.php\'">');
}
?>
   <input type="submit" name="button" value="Reset" id="res"> 
</form>
<script type="text/javascript">
    var form=document.querySelector('#form');
    document.querySelector('button').addEventListner('click'.function(e){
        form.reset();
        alert('reset');
    },false);
</script>
</body>
</html>
