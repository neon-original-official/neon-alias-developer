<?php
$token = "guid_token"."."."Authrize_token/Screet";
$fulltoken = $token;
$messagetutor=" This Is Token For Sample:5581.GhMaSiNcbJ";
if($fulltoken=="guid_token.Authrize_token/Screet"){
	echo "Token Must Be Fill";
	}else{
	$ref = rand(87,811);
		}
		$total = $ref .".".$token;
		?>
<p>Token:<?php
echo $fulltoken ." "."Ref:".$ref." "."Total Token:".$total ;
?>
</p>
<iframe src="https://neongame.neoncorp.eu.org/authtoken?token=<?php echo $fulltoken;?>" frameborder height="100%" width="100%" />
	
