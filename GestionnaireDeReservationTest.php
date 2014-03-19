<?php

require_once 'GestionnaireDeReservation.php';

class GestionnaireDeReservationTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var GestionnaireDeReservation
	 */
	protected $gestionnaire;

	protected function setUp()
	{
		$this->gestionnaire = new GestionnaireDeReservation();
	}
	
	public function testCreateWithInvalidCustomerThrowsException()
	{		

	}
}