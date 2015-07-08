(function(){
	"use strict";

	var app = angular.module("modelTest", []);

	app.filter('capitalize', function() {
  		return function(input, scope) {
    		if (input != null) {
	    		input = input.toLowerCase();
	    		return input.substring(0,1).toUpperCase() + input.substring(1);
			}
  		};
  	});

	app.controller("StoryController", function(){
		this.animals = {
			"Beaver" : "/img/madlib/beaver.png",
			"Cat" : "/img/madlib/cat.png",
			"Chicken" : "/img/madlib/chicken.png",
			"Cow" : "/img/madlib/cow.png",
			"Dog" : "img/madlib/dog.png",
			"Donkey" : "/img/madlib/donkey.png",
			"Duck" : "/img/madlib/duck.png",
			"Elephant" : "/img/madlib/elephant.png",
			"Lion": "/img/madlib/lion.png",
			"Monkey" : "/img/madlib/monkey.png",
			"Penguin" : "/img/madlib/penguin.png",
			"Pig" : "/img/madlib/pig.png",
			"Polar Bear" : "/img/madlib/polarbear.png",
			"Walrus" : "/img/madlib/walrus.png",
			"Zebra" : "/img/madlib/zebra.png"

		},
		
		this.animalPic = "",


		this.getAnimalPic = function(){
			this.animalPic = this.animals[this.animal];
		console.log(this.animalPic);
		}



	});

})();
