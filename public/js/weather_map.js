(function(){
	"use strict";

	var userCity = "";
	var userLongitude = "";
	var userLatitude = "";

	function getLocation(){
		if (navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition)
		} else {
			alert("geo not supported");
			
		}
	}

	function showPosition(position){
		userLatitude = position.coords.latitude;
		userLongitude = position.coords.longitude;
		console.log(userLatitude);
		console.log(userLongitude);
		getWeather();
	}

	getLocation();

	$("#enteredCity").keyup(function(){
		if(event.keyCode == 13){
			userCity = $("#enteredCity").val();
			console.log(userCity);
			$("#enteredCity").val("");
			$("#weatherTitle").html("What the heck is the weather in " + userCity + "?");
			userLongitude = "",
			userLongitude = ""
			getWeather();
		}
	});

	// AJAX request to OpenWeatherMap API to get forecast
	function getWeather(){

		$.get("http://api.openweathermap.org/data/2.5/forecast/daily",{
			APPID: "d7a25b9a69ca99f96c3556439a04a1a8", 
			lat: userLatitude,
			lon: userLongitude,
			q: userCity,
			cnt: 3,
			units: "imperial"
		}).done(function(data){
					// console.log(data)
					var weatherContents = "";
					var dayNumber = 0;
					$(data.list).each(function(i, day){	
						weatherContents += "<div class='column' class='one-third' id='day'" + dayNumber + ">";
						weatherContents += "<img src= http://openweathermap.org/img/w/" + 
							data.list[i].weather[0].icon + ".png>";
						weatherContents += "<p>" + Math.floor(data.list[i].temp.min) + "&deg" + "/" 
							+ Math.floor(data.list[i].temp.max) +  "&deg" + "</p>";
						weatherContents += "<p>" + data.list[i].weather[0].description + "</p>";
						weatherContents += "<p>" + data.list[i].humidity + "% humidity" + "</p>";
						weatherContents += "</div>";
						dayNumber++
					});	
					console.log(weatherContents);	
						$("#weather-container").html(weatherContents);
				});

	}

	getWeather();

})();


















