<?php header('Content-Type: application/json; charset=utf-8'); ?>
{"funerals":[<?php foreach ($funerals as $funeral): ?>{"id":"<?php echo $funeral['funeral_id']?>","name":"<?php echo $funeral['name']?>"}<?php if ($funeral !== end($funerals)) echo ','; ?><?php endforeach ?>]}
