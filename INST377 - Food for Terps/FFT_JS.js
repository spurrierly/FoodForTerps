document.getElementById("vege").onmouseover = function() {mouseOver()};
	document.getElementById("vege").onmouseout = function() {mouseOut()};

		function mouseOver() {
		  document.getElementById("vege").style.backgroundColor = "green";
		}

		function mouseOut() {
		  document.getElementById("vege").style.backgroundColor = "white";
		}
	document.getElementById("vegan").onmouseover = function() {mouseOverVegan()};
	document.getElementById("vegan").onmouseout = function() {mouseOutVegan()};

		function mouseOverVegan() {
		  document.getElementById("vegan").style.backgroundColor = "lightgreen";
		}

		function mouseOutVegan() {
		  document.getElementById("vegan").style.backgroundColor = "white";
		}
	document.getElementById("kosher").onmouseover = function() {mouseOverKosher()};
	document.getElementById("kosher").onmouseout = function() {mouseOutKosher()};

		function mouseOverKosher() {
		  document.getElementById("kosher").style.backgroundColor = "lightblue";
		}

		function mouseOutKosher() {
		  document.getElementById("kosher").style.backgroundColor = "white";
		}
	document.getElementById("halal").onmouseover = function() {mouseOverHalal()};
	document.getElementById("halal").onmouseout = function() {mouseOutHalal()};

		function mouseOverHalal() {
		  document.getElementById("halal").style.backgroundColor = "red";
		}

		function mouseOutHalal() {
		  document.getElementById("halal").style.backgroundColor = "white";
		}
	document.getElementById("none").onmouseover = function() {mouseOverNone()};
	document.getElementById("none").onmouseout = function() {mouseOutNone()};

		function mouseOverNone() {
		  document.getElementById("none").style.backgroundColor = "pink";
		}

		function mouseOutNone() {
		  document.getElementById("none").style.backgroundColor = "white";
		}