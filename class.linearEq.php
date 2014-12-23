<?php
 include_once('class.matrics.php');

 class linearEq extends matrics
 {
 	public function resultLinearEq($coff_metrix,$const_metrix)
 	{
 		$result=array(); $multi=0;
 		$inverseMet=parent::inverseMetrix($coff_metrix);
 		if ($inverseMet!="IRREVERSIBLE") 
 		{
 			for ($i=0; $i < 3; $i++) 
 			{ 
 				for ($j=0; $j < 3; $j++) 
 				{ 
 					$multi+=$inverseMet[$i][$j]*$const_metrix[$j];
 				}
 				array_push($result, $multi);
 				
 			}return $result;
 		}
 		else
 		{
 			return "IRREVERSIBLE";
 		}

 	}
 }
 /*//testing 

 $var=new linearEq();
 $coff_metrix=array(array(2,2,3),array(4,5,6),array(7,8,9));
 $const_metrix=array(1,2,3);
 $res=$var->resultLinearEq($coff_metrix,$const_metrix);
 var_dump($res);
 */