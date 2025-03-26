// Copyright (c) 2020 Mr. Coxall All rights reserved
//
// Created by: Mr. Coxall
// Created on: Sep 2020
// This file contains the JS functions for index.html
function enterClicked () {
  // this function gets user's first name and age and displays it back to user
  // get first name from text field
  let streetName = document.getElementById("street-name").value
	// get age from text field and cast it to integer
  let streetNumber = parseInt(document.getElementById("number-entered").value)

  // display name and age back to user
  document.getElementById('user-info').innerHTML = "Your street name is " + streetName + " and your street number is " + streetNumber + " is"
}