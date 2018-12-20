<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ДЗ к лекции «Строки, массивы и объекты»</title>
	<style>
		body {
			font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;  
		}
		hr {
			margin: 15px 15px 0;
			width: 75%;
		}
		details {
			background-color: #D3D3D3;
			margin: 15px 15px 0;
			width: 75%;
		}
		.name {
			font-style: italic;
			font-size: 1.3em;			
		}
	</style>
</head>
<body>

	<h1>Жестокое обращение с животными</h1>
	<p class="name">1. Исходный массив:</p>
	<details>

	<?php


	         $continents = [
	         	'Eurasia' => [
	         		'Mesobuthus eupeus thersites' ,
	         		'Gulo gulo gulo' ,
	         		'Apodemus agrarius' 
	         	],
	         	'Africa' => [
	         		'Trematoda' ,
	         		'Meligethinae'
	         	],
	         	'North America' => [
	         		'Cassidini' ,
	         		'Pituophis catenifer'
	         	],
	         	'South America' => [
	         		'Leopardus geoffroyi'
	         	],
	         	'Australia' => [
	         		'Menura novaehollandiae' ,
	         		'Euophryinae'
	         	],
	         	'Antarctica' => [
	         		'Halobaena caerulea' ,
	         		'Lepus' 
	         	],
	         ];

	         echo "<pre>";
	         print_r($continents);
	         echo "</pre>"; 


	?>
		
	</details>
	<hr>

	<p class="name">2. Звери, название которых состоит из двух слов</p>

	<?php

	$result = [];
        foreach ($continents as $countinent) {
            $result = array_merge($result, array_filter($countinent, function ($item){ return count(explode(' ', $item)) === 2; }) );
}
    //echo "<pre>";
    //print_r($result);
    //echo "</pre>";

        foreach($result as $myarr)
{
    echo $myarr . " , ";
}

	?>

	<hr>

	<p class="name">3. Название фантазийного животного</p>

	<?php

	$name_two_words = [];   
    foreach($continents as $continent => $animals){
        foreach($animals as $animal){
            $all_animals= [];
            $anim = explode(' ', $animal);
            $all_animals[]=$anim;
     
            foreach($all_animals as $k){
                if(count($k) === 2){
                    $comma_separated = implode(",", $k);
                    $str = str_replace(',', ' ', $comma_separated);
                    $name_two_words[]=$str;
                }
            }
        }
    }

    foreach($name_two_words as $name){  
    $parts = explode(' ', $name);
    $first[] = $parts[0];
    $second[] = $parts[1];
    }

$random_second_word = [];
 
    while (count($random_second_word) < count($name_two_words)){ 
    $proverka = $second[rand(0, count($name_two_words)-1)];    
    if (!in_array($proverka, $random_second_word)) {
        array_push($random_second_word, $proverka);
    }
}

$final_result = [];
 
for($i = 0; $i < count($name_two_words); $i++){   
    $final_result[]= $first[$i] . ' ' . $random_second_word[$i];  
}

foreach($final_result as $myarr) 
{
  echo "<p>$myarr</p>"; 
}

	?>
	
</body>
</html>
