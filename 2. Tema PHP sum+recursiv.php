<?php

echo "FUNCTIA SUM NON_RECURSIVA".PHP_EOL;

function sumNonRec($n) {
    $sum=0;
    if (is_int($n)) 
    {
      for (;$n>0;$n--) 
      {
      $sum+=$n;                           // sau ($n($n-1))/2
      }
    echo "Varianta 1->n simpla = $sum";
    }
    else 
    {
      echo "Invalid input formatting. Try again!";
    }
}

sumNonRec(15); // 120

echo PHP_EOL;

function sumNonRec2($n) {
    $sum=0; 
    $k=$n/2;
    
    if (!is_int($n)){echo "Invalid input formatting. Try again!".PHP_EOL;}
    
    if ($n%2==1 && $n!=2)   // stiu ca funtioneaza si fara "&& $n!=2" 
                            // din cauza procesarii lui $k
    {
        for (;$k>0;$k--)
        {
            $n=2*$k;
            $sum+=$n;
        } 
    }
    else 
    {
        echo "I can process only odd numbers".PHP_EOL;
        return;
    }
    
    echo "Varianta 1->n doar numere impare = $sum".PHP_EOL;
}

sumNonRec2(15); //64

echo PHP_EOL;

echo "FUNCTIA SUM RECURSIVA".PHP_EOL;

function sumRec($n)
{
	if($n<0) 
	{
      return "Is < 0";
   }
	if ($n>=1)
	{
      return ($n + sumRec($n-1));
	}
}

echo "Varianta 1->n simpla recursiva = ".sumRec(15).PHP_EOL; // 120


function sumRec2($n)
{
	if(!is_int($n) || $n<0) 
	{
      return "Is < 0 or invalid formatting";
   }
	if ($n>=1)
	{
      return ($n + sumRec2($n-1));
	}
}

echo "Varianta 1->n recursiva cu verificare = ".sumRec2(16).PHP_EOL; // 143


function sumRec3($n)
{
    $k=$n/2;
	if(!is_int($n) || $n<0 || $k<0) 
	{
      return "Is <= 0 or invalid formatting";
   }
	if ($n>=0)
	{
	    for(;$k>0;$k--)
	    {
	        $n=2*$k;
	    
      return $n+ sumRec3($n-2);}
	}
}

echo "Varianta 1->n doar numere pare recursiva = ".sumRec3(16).PHP_EOL; // 72
