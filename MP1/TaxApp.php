<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Taxxy</title>
	<link rel="stylesheet" href="TaxApp.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- bootstrap 5.3-->
</head>
<!--CSS behaving differently with Chrome compared to Edge-->
<body>
	<div class="container">
		<div class="row">	
			<div class="form-container" id="bgcolor">
				<h1> Taxxy: A Tax Calculator</h1>
				<h4> Submitted by: Miguel Adrian Torrejos </h4>
				<form class="form" method="get" action="">
					<input type="number" name="salary" value="" placeholder="Salary">
					<label for="salaryType"> Salary Type: </label>
					<select name="salaryType">
						<option name="weekly">Weekly</option>
						<option name="monthly">Monthly</option>
						<option name="anually">Anually</option>
					</select>
					<input type="submit" name="submit" value="Submit" class="btn btn-outline-dark">
				</form>
			</div>
		</div>

		<?php
			if(isset($_REQUEST['salary']) && isset($_REQUEST['salaryType'])){
				$salaryType = stripslashes($_REQUEST['salaryType']);
				$salary = stripslashes($_REQUEST['salary']);

				/*monthly salary calc*/
				if($salary != '') {
					if($salaryType == 'Weekly') {
						$salary = $salary*4;
					}
					else if($salaryType == 'Anually') {
						$salary = $salary/12;
					}
				}

				/*in case of no salary input*/
				else {
					echo '<script>alert("Error: Invalid salary.")</script>';
					echo '<div id="bgcolor"> <label> Annual Salary: <br>Est. Annual Tax: <br>Est. Monthly Tax: </label> 
					</div>';
					exit();
				}


				/*tax calc*/
				if($salary > 250000 && $salary <= 400000) { $tax = ($salary - 250000) * 0.2; }
				else if($salary > 400000 && $salary <= 800000) { $tax = 30000 + ($salary - 400000)*0.25; }
				else if($salary > 400000 && $salary <= 800000) { $tax = 30000 + ($salary - 400000)*0.25; }
				else if($salary > 800000 && $salary <= 2000000) { $tax = 130000 + ($salary - 800000)*0.3; }
				else if($salary > 2000000 && $salary <= 8000000) { $tax = 490000 + ($salary - 2000000)*0.32; }
				else if($salary > 8000000) { $tax = 2410000 + ($salary - 8000000)*0.35; }
				else { $tax = 0; } /*if less than 250000*/

				/*display relevant data*/
				echo '<div id="bgcolor"> <label> Annual Salary: PHP';
				/*number_format("number", "decimals", "decimal string", "thousands string")*/
				echo number_format($salary*12,2,".",","); 
				echo '<br>Est. Annual Tax: PHP';
				echo number_format($tax*12,2,".",",");
				echo '<br>Est. Monthly Tax: PHP';
				echo number_format($tax,2,".",",");
				echo '</label> </div>';
			}

			else {
				echo '<div id="bgcolor"> <label> Annual Salary: <br>Est. Annual Tax: <br>Est. Monthly Tax: </label> 
				</div>';
			}
		?>
	</div>
</body>
</html>