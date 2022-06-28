<?php header('Content-Type: application/json; charset=utf-8'); ?>
{"funerals":[<?php foreach ($funerals as $funeral): ?>{"id":"<?php echo $funeral['id']?>","name":"<?php echo $funeral['name']?>","address":"<?php echo getAddress($funeral['address1'],$funeral['address2'])?>","lat":"<?php echo $funeral['lat']?>","lng":"<?php echo $funeral['lng']?>","post":"<?php echo $funeral['post']?>","phone":"<?php echo $funeral['phone']?>","address_id":"<?php echo $funeral['address_id'] ?>"}<?php if ($funeral !== end($funerals)) echo ','; ?><?php endforeach ?>]}



<?php
	function getAddress($address1,$address2){
		
	$address = '';
	if (empty($aadress2)){
	$address = $address1.$address2;		
	}else{
		$address = $address1;
	}
	
	return $address;
	}
	?>
