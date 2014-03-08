<?php
/**
 * Opine\Order
 *
 * Copyright (c)2013, 2014 Ryan Mahoney, https://github.com/Opine-Org <ryan@virtuecenter.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace Opine;

class Order {
	private $db;
	private $financial;
	private $current = false;

	public function __construct ($db, $financial) {
		$this->db = $db;
		$this->financial = $financial;
	}

	public function findOrCreate ($orderId=false, $locationId=false, $customerId=false, $operatorId=false) {
		$order = [
			'items' => [],
			'summary' => [
				'tax' => 0,
				'shipping' => 0,
				'discount' => 0,
				'subtotal' => 0,
				'total' => 0,
				'refunded' => 0,
				'revenue' => 0
			],
			'taxes' => [],
			'shipping' => [],
			'financial_transactions' => [],
			'status' => 'open',
			'customer_id' => $customerId,
			'location_id' => $locationId,
			'operator_id' => $operatorId
		];
	}

	public function itemAdd ($dbURI, $description, $quantity=1) {

	}

	public function itemRemove ($itemId) {

	}

	public function itemRefund ($itemId, $amount) {

	}

	public function taxSet (Array $taxes) {

	}

	public function shippingSet () {

	}

	public function paymentMethodAdd ($method) {

	}

	public function paymentMethodRemove ($method) {

	}

	public function payment () {

	}

	public function finalize () {

	}

	public function discountAdd ($amount) {

	}
}