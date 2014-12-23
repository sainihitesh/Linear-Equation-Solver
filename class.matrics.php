<?php
//class for matrics calculations
class matrics
{
	public function inverseMetrix($matrix)
 {
   $det=$matrix[0][0]*$this->minor(0,0,$matrix)+$matrix[0][1]*$this->minor(0,1,$matrix)+$matrix[0][2]*$this->minor(0,2,$matrix);
   
   if ($det==0) 
    {
   	return "IRREVERSIBLE";
   }
   else
   {
   $adj=array(array());

  for ($i=0; $i < 3 ; $i++) 
  { 
  	for ($j=0; $j < 3; $j++) 
  	{ 
  		$adj[$j][$i]=$this->minor($i,$j,$matrix)/$det;

  	}
  }
  return $adj;
 }
}
private function minor($l,$m,$metrix)
 {
   $minor=array();

  for ($i=0; $i < 3 ; $i++) 
  { 
  	if ($l!=$i)
  {
  	for ($j=0; $j < 3; $j++) 
  	{ 
  		if ($j!=$m) 
  		{
  			array_push($minor, $metrix[$i][$j]);
  		}
  			
  		
  	}
  }	
  }
  $cofactor=pow(-1,$l+$m)*($minor[0]*$minor[3]-$minor[2]*$minor[1]);
  return $cofactor;
 }
}
