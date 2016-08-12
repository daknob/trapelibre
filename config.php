<?php

	/*
		Copyright 2016 Antonios A. Chariton <daknob.mac@gmail.com>

		Licensed under the Apache License, Version 2.0 (the "License");
		you may not use this file except in compliance with the License.
		You may obtain a copy of the License at
		  
		   http://www.apache.org/licenses/LICENSE-2.0

		Unless required by applicable law or agreed to in writing, software
		distributed under the License is distributed on an "AS IS" BASIS,
		WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
		See the License for the specific language governing permissions and
		limitations under the License.
	*/

	/*
		Welcome to Trapelibre Configuration. In this file you can configure
		and alter the behavior of Trapelibre. Some changes are required in
		order to be able to use Trapelibre efficiently. Some other changes
		are more technical and can be left with their default value. For
		this reason, this file is split into three parts. The first part
		contains variables that SHOULD be changed and be different in every
		setup. The second part contains variables that COULD be changed if
		the owner wants to, but their default values are safe to be left as
		is. The third part contains variables that SHOULD NOT be changed
		and are used internally by the development team. Changing these
		values comes with absolutely no guarantee that the software will
		continue to work without issues.
	*/

	/*
		+-------------+
		|  SECTION I  |
		+-------------+
	*/

	/*
		This variable contains the name of the facility Trapelibre is
		used at. It does not alter functionality but simply displays
		the name in various positions around the user interface.
	*/
	$RestaurantName = "Example Restaurant";

	/*
		+--------------+
		|  SECTION II  |
		+--------------+
	*/
	$DBname = "trapelibre.db";
	/*
		+---------------+
		|  SECTION III  |
		+---------------+
	*/

	$ProjectName = "Trapelibre";
	$Version = "0.0.1";

?>
