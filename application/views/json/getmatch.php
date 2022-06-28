<?php 
	header('Access-Control-Allow-Origin: http://admin.cardam.co.kr ');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
     
?>
{"dealers":[<?php foreach ($results as $result): ?>{"name":"<?php echo $result['name']?>","phone":"<?php echo $result['phone']?>"}<?php if ($result !== end($results)) echo ','; ?><?php endforeach ?>]}
