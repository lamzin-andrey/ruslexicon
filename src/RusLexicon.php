<?php
namespace Landlib;
class RusLexicon {
	/**
	 * Возвращает форму единицы измерения в зависимости от величины числа n
	 * @param n - число
	 * @param one окончание в ед. числе (один день)
	 * @param less4 окончание при величине числа от 1 до 4 (два дня)
	 * @param more19 окончание при величине числа более 19 (двадцать дней)
	 * @return string
	*/
	static public function getMeasureWordMorph($n, $one, $less4, $more19)
	{
		$m = strval($n);
		if (strlen($m) > 1) {
			$m =  intval( $m[ strlen($m) - 2 ] . $m[ strlen($m) - 1 ] );
		}
		$lex = $less4;
		 if ($m > 20) {
			$r = strval($n);
			$i = intval( $r[ strlen($r) - 1 ] );
			if ($i == 1) {
				$lex = $one;
			} else {
				if ($i == 0 || $i > 4) {
					$lex = $more19;
				}
			}
		} else if ($m > 4 || $m == '00') {
			$lex = $more19;
		} else if ($m == 1) {
			$lex = $one;
		}
		return $lex;
	}
}
