<?php
require_once 'Customer.php';
require_once 'Restaurant.php';
require_once 'Reservation.php';

class GestionnaireDeReservation
{
	public function create(Customer $customer, Restaurant $restaurant, DateTime $date, $nbCouvert)
	{
		if (mb_strlen($customer->getName()) === 0 || !$restaurant->isOpen() || mb_strlen($restaurant->getName()) === 0) {
			throw New \LogicException();
		}

		return new Reservation($customer, $restaurant, $date, $nbCouvert);
	}
}
