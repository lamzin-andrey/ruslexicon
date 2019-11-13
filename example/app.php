<?php
require __DIR__ . '/../src/RusLexicon.php';

use Landlib\RusLexicon;

function consoleLog($k, $v, $bIsVarDump = false) {
	echo "{$k}:\n";
	if ($bIsVarDump) {
		var_dump($v);
	} else {
		print_r($v);
	}
}

echo RusLexicon::getMeasureWordMorph(4, 'день', 'дня', 'дней') . "\n";
echo RusLexicon::getMeasureWordMorph(1, 'день', 'дня', 'дней') . "\n";
echo RusLexicon::getMeasureWordMorph(129, 'день', 'дня', 'дней') . "\n";
echo RusLexicon::getMeasureWordMorph(0, 'день', 'дня', 'дней') . "\n";

