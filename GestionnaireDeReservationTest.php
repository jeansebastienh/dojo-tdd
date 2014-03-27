<?php

require_once 'GestionnaireDeReservation.php';

class GestionnaireDeReservationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var GestionnaireDeReservation
     */
    protected $gestionnaire;

    protected  $customer;

    protected function setUp()
    {
        $this->gestionnaire = new GestionnaireDeReservation();
        $this->customer = new Customer();
        $this->customer->setName('test');
        $this->restaurant = new Restaurant();
        $this->restaurant->setName('test');
    }

    public function testCreateWithInvalidCustomerThrowsException()
    {
        $this->setExpectedException('LogicException');
        $this->gestionnaire->create(neW Customer(), new Restaurant(), New DateTime(), 1);
    }

    public function testCreateReservationWithValidCustomer()
    {
        $reservation = $this->gestionnaire->create($this->customer, $this->restaurant, New DateTime(), 1);
        $this->assertInstanceOf('Reservation', $reservation);
    }

    public function testCreateReservationWithInValidRestaurant()
    {
        $this->setExpectedException('LogicException');

        $restaurant = new Restaurant();
        $restaurant->setClosed(true);

        $reservation = $this->gestionnaire->create($this->customer, $restaurant, New DateTime(), 1);
        $this->assertInstanceOf('Reservation', $reservation);
    }

    public function testCreateReservationWithInValidRestaurantName()
    {
        $this->setExpectedException('LogicException');

        $reservation = $this->gestionnaire->create($this->customer, new Restaurant(), New DateTime(), 1);
        $this->assertInstanceOf('Reservation', $reservation);
    }
}