<?php header('Content-Type: application/json; charset=utf-8'); ?>
"funerals":[{"id":"<?php echo $funerals_item['id']?>","name":"<?php echo $funerals_item['name']?>","picture":"<?php echo $funerals_item['picture']?>","lat":"<?php echo $funerals_item['lat']?>","lng":"<?php echo $funerals_item['lng']?>","funeral":"<?php echo $funerals_item['funeral']?>","address3":"<?php echo $funerals_item['address3']?>","city":"<?php echo $funerals_item['city']?>","address1":"<?php echo $funerals_item['address1']?>","address2":"<?php echo $funerals_item['address2']?>"}]