<?php
function timeslots($duration, $cleanup, $start, $end){
	$start = new DateTime($start);
	$end = new DateTime($end);
	$interval = new DateInterval("PT".$duration."M");
	$cleanupInterval = new DateInterval("PT".$cleanup."M");
	$slots = array();
	for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
		$endPeriod = clone $intStart;
		$endPeriod -> add($interval);
		if ($endPeriod>$end) {
			break;
		}
		$slots[] = $intStart->format("h:i A");
	}
	return $slots;

}


?>