<?php header('Content-Type: application/json; charset=utf-8'); ?>
{"comments":[<?php foreach ($comments as $comment): ?>{"content":"<?php echo $comment['content']?>","writer":"<?php echo $comment['name']?>","time":"<?php echo humanTiming($comment['writedate'])?>"}<?php if ($comment !== end($comments)) echo ','; ?><?php endforeach ?>]}


<?php

function humanTiming ($time)
{

    $time = (time() + 32400 ) - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => '년',
        2592000 => '달',
        604800 => '주',
        86400 => '일',
        3600 => '시간',
        60 => '분',
        1 => '초'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.$text.(($numberOfUnits>=1)?'전':'');
    }
}

?>