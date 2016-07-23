<?php

require 'vendor/autoload.php';

use Person;
use Acme\Business;

use Acme\Staff;

	$mahmood = new Person("Mahmood Ibrahim");

	$staff = new Staff([$mahmood]);

	$laracast = new Business($staff);

	$laracast->hire(new Person('Jane Doe'));

	var_dump($laracast->getStaffMembers());