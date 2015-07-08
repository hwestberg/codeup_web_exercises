(function(){
	"use strict";

	var app = angular.module("controllerTest", []);

	app.controller("CartController", function(){

		this.store = {
			"pork": {
				"quantity": 0,
				"price": .11
				},
			"bacon": {
				"quantity": 0,
				"price": .12
				},
			"salt beef": {
				"quantity": 0,
				"price": .085
				},

			"fresh beef" : {
				"quantity": 0,
				"price": .045
				},
			"flour": {
				"quantity": 0,
				"price": .045
				},

			"hard bread": {
					"quantity": 0,
					"price": .10
				},
			"beans": {
					"quantity": 0,
					"price": .10
				},
			"rice": {
					"quantity": 0,
					"price": .08
				},
			"coffee": {
					"quantity": 0,
					"price": .125
				},
			"sugar": {
					"quantity": 0,
					"price": .08
				}	
			}

		this.itemKey = '';

		this.items = [];

		this.newItem = {
			"quantity": 0,
		};

		this.setItem = function() {
			this.newItem = this.store[this.itemKey];
			this.newItem.quantity = 1;
		};

		this.addItem = function(cartForm){
			this.items.push(this.newItem);
			this.newItem = [];

			console.log(this.items);
		};

		this.getSubtotal = function() {
			var subTotal = 0;
			for (var i = 0; i < this.items.length; i++) {
				subTotal += (this.items[i].price * this.items[i].quantity);		
			}
			console.log(subTotal);
			return subTotal;
		}


		this.getSalesTax = function(){
			var salesTax = 0;
			salesTax = this.getSubtotal() * .08125;
			return salesTax;
		}

		this.getShipping = function(){
			var shipping = 0;
			shipping = this.items.length * 1.25;
			return shipping;
		}
		
		this.getTotal = function(){
			var total = 0;
			total =	this.getSubtotal() + this.getSalesTax() +
			this.getShipping();
			console.log(total);
			return total;

		}

	});
})();