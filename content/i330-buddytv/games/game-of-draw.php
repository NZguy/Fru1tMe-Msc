<?php
require_once PHP_ROOT . '/fmmsc/Setup.php';

$body = <<<HTML
<div class="container">
	<div class="game-flash">
		<img src="http://i.imgur.com/JYMOZWd.gif" />
	</div>
</div>
HTML;

\fmmsc\template\i330\BuddyTvTemplate::createContent()
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_TITLE, "Games")
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_SUB_TITLE, "GAME OF DRAW")
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_BODY, $body)
		->with(\fmmsc\template\i330\BuddyTvTemplate::OPTION_TAB, 4)
		->render();
