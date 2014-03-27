<?php

require_once 'GestionnaireDeRestaurant.php';

class GestionnaireDeRestaurantTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var GestionnaireDeReservation
     */
    protected $gestionnaire;

    protected  $customer;

    protected function setUp()
    {
        $this->gestionnaire = new GestionnaireDeRestaurant();
    }

    public function testCheckEligibilityWithRestaurantClosedNameThrowsException()
    {
        $this->setExpectedException('LogicException');

        $restaurant = new Restaurant();
        $restaurant->setClosed(true);

        $this->gestionnaire->checkEligibility($restaurant);
    }


    public function testCheckEligibilityWithRestaurantEmptyNameThrowsException()
    {
        $this->setExpectedException('LogicException');

        $restaurant = new Restaurant();
        $restaurant->setClosed(false);

        $this->gestionnaire->checkEligibility($restaurant);
    }
    public function testCreateReservationWithInValidRestaurantName()
    {
        $this->setExpectedException('LogicException');

        $reservation = $this->gestionnaire->create($this->customer, new Restaurant(), New DateTime(), 1);
        $this->assertInstanceOf('Reservation', $reservation);
    }
}