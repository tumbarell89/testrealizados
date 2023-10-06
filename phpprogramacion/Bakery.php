<?php

namespace App;

class Bakery
{
    /**
     * Calculate the output of cakes for a giver recipe
     *
     * @param array $recipe      Contains the necessary ingredients to make one cake
     * @param array $ingredients Contains the amount of ingredients you have available to bake
     *
     * @return int The number of cakes you can bake
	 
	 example A=[a,d,c]
			 B1=[a=>2,b=>2,c=>3]
			 salida 2
     */
    public static function calculateOutput(array $recipe, array $ingredients): int
    {
        $numberOfCakes = 0;
		$cake = false;
		if(count($recipe)<=count($ingredients)){
			$cake=true;
		}		
		while($cake == true){
			$cake=true;
			foreach($recipe as $ing=>$cant){
				if($ingredients[$ing]){
					if($ingredients[$ing]>=$cant){
						$cake=true;
						$ingredients[$ing]-=$cant;	
					}else{
						$cake=false;
						break;
					}
				}else{
					$cake=false;
					break;
				}
			}
			if($cake==true){
				$numberOfCakes++;
			}		
		}

        return $numberOfCakes;
    }
}