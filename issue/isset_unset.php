#!../sapi/cli/php
<?php

require_once('inc.tests.php');

class TimePeriod {
	
	public $Seconds;
	private $Private;

	public function __construct($Seconds) {
		$this->Seconds = $Seconds;
	}
	
	public $Hours {
		get {
			echo "Getting Hours\r\n";
			return $this->Seconds / 3600;
		}
		set { // The variable $value holds the incoming value to be "set"
			echo "Setting Hours to {$value}\r\n";
			$this->Seconds = $value * 3600;
			unset($x);
		}
		isset { return $this->Seconds != NULL; }
		unset { $this->Seconds = NULL; }
	}
}


$o = new TimePeriod(7200);

DumpClass($o);

$o->Milliseconds;

echo "------------------------------------------------------\r\n";
printf("%40.40s: %s\r\n", "via public property o->Seconds", $o->Seconds." seconds");
printf("%40.40s: %s\r\n", "via getter o->Hours", $o->Hours." hours");

echo "\r\n";
$o->Hours = 1;
echo "\r\n";

printf("%40.40s: %s\r\n", "via public property o->Seconds", $o->Seconds." seconds");
printf("%40.40s: %s\r\n", "via getter o->Hours", $o->Hours." hours");
echo "------------------------------------------------------\r\n";


?>
