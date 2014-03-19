<?php

class Reservation
{
	/**
	 * @var Restaurant
	 */
	protected $restaurant;

	/**
	 * @var Customer
	 */
	protected $customer;

	/**
	 * @var DateTime
	 */
	protected $date;

	protected $nbCouvert;

	public function __construct(Customer $customer, Restaurant $restaurant, DateTime $date, $nbCouvert)
	{
		$this->customer = $customer;
		$this->restaurant = $restaurant;
		$this->date = $date;
		$this->nbCouvert = $nbCouvert;
	}

}