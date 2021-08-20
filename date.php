function dateDiff($date_create)
		{
		    $date_cur = strtotime(date('d.m.Y'));
		    $datediff = abs(floor(($date_create - $date_cur) / (60 * 60 * 24)));
		    if ($datediff == 0) $date = date('H:i', $date_create);
		    else {
		        $daySec = 60 * 60 * 24;
		        $sec = time() - $date_create;
		        if ($datediff > 30) {
		            $date = floor($datediff / 30) . 'м';
		        } elseif ($datediff > 7) {
		            $date = floor($datediff / 7) . 'н';
		        } elseif ($datediff > 0) {
		            $date = $datediff . 'д';
		        } /*else {
		            $date = 'Вчера';
		        }*/
		    }
		    //$date .= ' - '.$datediff;
		    return $date;
		}
