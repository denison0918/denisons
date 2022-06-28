<?php header('Content-Type: application/json; charset=utf-8'); ?>

{"deads":[<?php foreach ($deads_item as $dead): ?>{"id":"<?php echo $dead['id']?>","name":"<?php echo $dead['name']?>","deathday":"('<?php echo substr($dead['deathday'],2,2).".".substr($dead['deathday'],4,2).".".substr($dead['deathday'],6,2)?>)"}<?php if ($dead !== end($deads_item)) echo ','; ?><?php endforeach ?>]}




