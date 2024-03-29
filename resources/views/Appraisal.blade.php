@extends('Dashboard')
@section('content')
	<div class="container">
		<form id="appForm" action="{{ url('/saveInfo')}}">
			@csrf
			<h1>APPRAISAL FORM:</h1><br><br>
			<!-- One "tab" for each step in the form: -->
			<!-- step one -->
			<div class="tab"><h4>Employee information:</h4>
			  <p><b>Name</b><input placeholder="Name..." oninput="this.className = ''">{{$employees->Name}}</p>
			  <p><b>Department</b><input placeholder="Department..." oninput="this.className = ''">{{$employees->Department}}</p>
			</div>

			<!--step two  -->
			<div class="tab"><h4>Performance rating:</h4>
			    <p><b>Level of execution</b></p>
			    <select class="form-control" name="LevelOfExecution">
			        <option>--Select--</option>
			        <option value="Excellent">Excellent</option>
			        <option value="Good">Good</option>
			        <option value="Satisfactory">Satisfactory</option>
			        <option value="Fair">Fair</option>
			        <option value="Not Good">Not Good</option>
			    </select></br>
			    <p><b>Quality of work</b></p>
			    <select class="form-control" name="QualityOfWork">
			        <option>--Select--</option>
			        <option value="Excellent">Excellent</option>
			        <option value="Good">Good</option>
			        <option value="Satisfactory">Satisfactory</option>
			        <option value="Fair">Fair</option>
			        <option value="Not Good">Not Good</option>
			    </select></br>
			</div>


			<!--step three  -->
			<div class="tab"><h4>Performance rating:</h4>
			    <p><b>Consistency in improvement</b></p>
			    <select class="form-control" name="ConsistencyInImprovement">
			        <option>--Select--</option>
			        <option value="Excellent">Excellent</option>
			        <option value="Good">Good</option>
			        <option value="Satisfactory">Satisfactory</option>
			        <option value="Fair">Fair</option>
			        <option value="Not Good">Not Good</option>
			    </select></br>
			    <p><b>Client and peer feedback</b></p>
			    <select class="form-control" name="ClientAndPeerFeedback">
			        <option>--Select--</option>
			        <option value="Excellent">Excellent</option>
			        <option value="Good">Good</option>
			        <option value="Satisfactory">Satisfactory</option>
			        <option value="Fair">Fair</option>
			        <option value="Not Good">Not Good</option>
			    </select></br>
			</div>

			<!--step four  -->
			<div class="tab"><h4>Performance rating:</h4>
			    <p><b>Sales revenue generated</b></p>
			    <select class="form-control" name="SalesRevenueGenerated">
			        <option>--Select--</option>
			        <option value="Excellent">Excellent</option>
			        <option value="Good">Good</option>
			        <option value="Satisfactory">Satisfactory</option>
			        <option value="Fair">Fair</option>
			        <option value="Not Good">Not Good</option>
			    </select></br>
			    <p><b>Responsiveness to feedback</b></p>
			    <select class="form-control" name="ResponsivenessToFeedback">
			        <option>--Select--</option>
			        <option value="Excellent">Excellent</option>
			        <option value="Good">Good</option>
			        <option value="Satisfactory">Satisfactory</option>
			        <option value="Fair">Fair</option>
			        <option value="Not Good">Not Good</option>
			    </select></br>
			</div>

			<!--step five  -->
			<div class="tab"><h4>Performance rating:</h4>
			    <p><b>Ability to take ownwership</b></p>
			    <select class="form-control" name="AbilityToTakeOwnership">
			        <option>--Select--</option>
			        <option value="Excellent">Excellent</option>
			        <option value="Good">Good</option>
			        <option value="Satisfactory">Satisfactory</option>
			        <option value="Fair">Fair</option>
			        <option value="Not Good">Not Good</option>
			    </select></br>
			    <p><b>Rate of completion</b></p>
			    <select class="form-control" name="RateOfCompletion">
			        <option>--Select--</option>
			        <option value="Excellent">Excellent</option>
			        <option value="Good">Good</option>
			        <option value="Satisfactory">Satisfactory</option>
			        <option value="Fair">Fair</option>
			        <option value="Not Good">Not Good</option>
			    </select></br>
			</div>

			<div style="overflow:auto;">
			  <div style="float:right;">
			    <button type="button" class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
			    <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
			  </div>
			</div>

			<!-- Circles which indicates the steps of the form: -->
			<div style="text-align:center;margin-top:40px;">
			  <span class="step"></span>
			  <span class="step"></span>
			  <span class="step"></span>
			  <span class="step"></span>
			</div>

			</form>

			<script type="text/javascript">
				var currentTab = 0; // Current tab is set to be the first tab (0)
			showTab(currentTab); // Display the current tab

			function showTab(n) {
			  // This function will display the specified tab of the form ...
			  var x = document.getElementsByClassName("tab");
			  x[n].style.display = "block";
			  // ... and fix the Previous/Next buttons:
			  if (n == 0) {
			    document.getElementById("prevBtn").style.display = "none";
			  } else {
			    document.getElementById("prevBtn").style.display = "inline";
			  }
			  if (n == (x.length - 1)) {
			    document.getElementById("nextBtn").innerHTML = "Submit";
			  } else {
			    document.getElementById("nextBtn").innerHTML = "Next";
			  }
			  // ... and run a function that displays the correct step indicator:
			  fixStepIndicator(n)
			}

			function nextPrev(n) {
			  // This function will figure out which tab to display
			  var x = document.getElementsByClassName("tab");
			  // Exit the function if any field in the current tab is invalid:
			  if (n == 1 && !validateForm()) return false;
			  // Hide the current tab:
			  x[currentTab].style.display = "none";
			  // Increase or decrease the current tab by 1:
			  currentTab = currentTab + n;
			  // if you have reached the end of the form... :
			  if (currentTab >= x.length) {
			    //...the form gets submitted:
			  $('#appForm').submit();
    		return false;
			    
			  }
			  // Otherwise, display the correct tab:
			  showTab(currentTab);
			}

			function validateForm() {
			  // This function deals with validation of the form fields
			  var x, y, i, valid = true;
			  x = document.getElementsByClassName("tab");
			  y = x[currentTab].getElementsByTagName("input");
			  // A loop that checks every input field in the current tab:
			  for (i = 0; i < y.length; i++) {
			    // If a field is empty...
			    if (y[i].value == "") {
			      // add an "invalid" class to the field:
			      y[i].className += " invalid";
			      // and set the current valid status to false:
			      valid = false;
			    }
			  }
			  // If the valid status is true, mark the step as finished and valid:
			  if (valid) {
			    document.getElementsByClassName("step")[currentTab].className += " finish";
			  }
			  return valid; // return the valid status
			}

			function fixStepIndicator(n) {
			  // This function removes the "active" class of all steps...
			  var i, x = document.getElementsByClassName("step");
			  for (i = 0; i < x.length; i++) {
			    x[i].className = x[i].className.replace(" active", "");
			  }
			  //... and adds the "active" class to the current step:
			  x[n].className += " active";
			}
			</script>

			@endsection
