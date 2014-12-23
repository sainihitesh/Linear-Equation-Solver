<title>linear Equation of 3 variables sol. Finder</title>
<link rel="stylesheet" href="jquery/jquery-ui.css">
<script src='jquery/jquery.js' type="text/javascript"></script>

<script src='jquery/jquery-ui.js' type="text/javascript"></script>
<script type="text/javascript">
	$.fx.speeds._default = 1000;
	$(function() {
		$( "#about" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode"
		});
         $( "#tabs" ).tabs();
		$( "#jh" ).click(function() {
			$( "#about" ).dialog( "open" );
			return false;
		});
	});
</script>
<style type="text/css">
	#hksk{
		margin-left: 40%;
	}
	#jh{
		width:150px; height: 34px; background: green;
		font-size: 25px;border-radius: 4px;transition:all 0.3s ease-in-out;
	}#jh:hover{
        background: cyan;cursor: hand;
	}input.ele{
		width: 40px;
	}


</style>
<div id="hksk">
<h1>I'm created by <a href='http://hiteshs.netai.net/'>HS</a></h1>
<ul>
<li style="display:inline"><div id='jh'>Open Explorer</div></li>

</ul>	
</div>

<div id='about' title="Equation Solver">
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method='POST'>
<input class='ele' type="number" name="hs[]" />X+<input class='ele' type="number" name="hs[]" />Y+<input class='ele' type="number" name="hs[]" />Z=<input class='ele' type="number" name="const[]" />
<br>
<input class='ele' type="number" name="hs[]" />X+<input class='ele' type="number" name="hs[]" />Y+<input class='ele' type="number" name="hs[]" />Z=<input class='ele' type="number" name="const[]" />
<br><input class='ele' type="number" name="hs[]" />X+<input class='ele' type="number" name="hs[]" />Y+<input class='ele' type="number" name="hs[]" />Z=<input class='ele' type="number" name="const[]" />
<br>
<input type="submit" value="Find solution"/>
</form>
</div> <center>
<?php
 if (!empty($_POST)) 
 {
 	 
 	 include_once('class.linearEq.php');
     $k=0; $coff_metrix=array(); $const=array();
 	 $input_metrix=$_POST['hs'];
 	 
 	 for ($i=0; $i < 3; $i++)
 	  { 
 	 	for ($j=0; $j < 3; $j++) 
 	 	{ 
 	 		$coff_metrix[$i][$j]=$input_metrix[$k];
 	 		$const[$j]=floatval($_POST['const'][$j]);
 	 		$k++;
 	 	}
   	  }
	 $output=new linearEq();
	 
	 $result=$output->resultLinearEq($coff_metrix,$const);
	 
	 if($result!="IRREVERSIBLE")
	 {
     echo "X=".$result[0]."<br>"."Y=".$result[1]."<BR>"."Z=".$result[2];
      }	
     else{
     	echo"IRREVERSIBLE" ;
     	  }
            
 }
	

?></center>