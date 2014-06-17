<? require '_header.php' ?>

<?php
date_default_timezone_set('Europe/London');

$TALKS = array(
	array(
    'number' => 1,
    'date' => mktime(0, 0, 0, 5, 27, 2014),
		'name' => 'Alisdair McDiarmid',
		'twitter' => 'alisdair',
		'paper' => 'Principal type-schemes for functional programs (Damas, Milner 82)',
		'slides' => 'https://speakerdeck.com/alisdair/deadcoders-number-1-damas-milner-82'
	)
);
?>

<div id='header'>
  <h1>Previous Talks</h1>
</div>

<ul class='previous-talks'>
	<? foreach ($TALKS as $talk) { ?>
    <li>
      <time> <?= date('j F Y', $talk['date']) ?></time>
      <h3>#<?= $talk['number'] ?>: <?= $talk['paper'] ?></h3>
      Presenter: <?= $talk['name'] ?> (<a href='http://twitter.com/<?= $talk['twitter'] ?>'>@<?= $talk['twitter'] ?></a>)
      <? if ($talk['slides']) { ?>
        <a href='<?= $talk['slides'] ?>'>View Slides</a>
      <? } ?>
    </li>
  <? } ?>
  </ul>

<? require '_footer.php' ?>