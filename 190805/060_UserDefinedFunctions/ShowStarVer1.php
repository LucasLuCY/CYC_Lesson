<?php
function ShowStar()
{
	echo "*****";
}

ShowStar();

print_r("<br>");

function ShowStar1($count = 10, $what = "*"){
	$result = "";

	//count <= 0 && count > 20
	if($count <= 0){
		echo "Your count have to bigger than zero!!!($count)<br>";
	}elseif($count > 20){
		echo "Your count is too bigger!!!($count)<br>";
	}else{
		for($i = 1; $i <= $count; $i++){
			$result .= $what;
		}
	}

    return $result;
}

ShowStar1(96, "$");
ShowStar1(-2, "#");
print_r(ShowStar1());



?>