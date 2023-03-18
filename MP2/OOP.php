<html>
	<head>
		<title>OOP Concepts - Summative Assessment 2.0</title>
	</head>
	<body>
		<?php

		if(isset($_POST['submit'])){
			$textbox1 = $_POST['textbox1'];
			$textbox2 = $_POST['textbox2'];
			$textbox3 = $_POST['textbox3'];

			class PrimaryClass {
				private $firstVar;		
				private $secondVar;
				private $thirdVar;	//int var

				public function setFirstVar($n) {
	    			$this->firstVar = $n;
	  			}

				public function getFirstVar() {
				    return $this->firstVar;
				}

				public function setSecondVar($n) {
					$this->secondVar = $n;
				}

				public function getSecondVar() {
					return $this->secondVar;
				}

				public function setThirdVar($n) {
					$this->thirdVar = $n;
				}

				public function getThirdVar() {
					return $this->thirdVar;
				}

				public function displayInfo() {
					echo 'firstVar: '. $this->getFirstVar() .'<br>secondVar: '. $this->getSecondVar() .'<br>thirdVar: '. 
					$this->getThirdVar();
				}
			}


			class SecondClass extends PrimaryClass {
				private $fourthVar;

				public function __construct($n) {
	   				$this->setFourthVar($n);
	  			}

	  			public function setFourthVar($n) {
	  				$this->fourthVar = $n;
	  			}

	  			public function getFourthVar() {
	    			return $this->fourthVar;
	  			}

	  			public function printInfo() {
	  				echo '<br><br>';
					parent::displayInfo();
					echo '<br>fourthVar: '. $this->getFourthVar();
				} 
			}

			class ThirdClass extends SecondClass {
				private $fifthVar;

				public function __construct($n) {
	   				$this->fifthVar = $n;
	  			}

	  			public function getFifthVar() {
	    			return $this->fifthVar;
	  			}

	  			public function displayInfo() {
	  				echo 'firstVar: '. $this->getFirstVar() .'<br>secondVar: '. $this->getSecondVar() .'<br>thirdVar: '. 
					$this->getThirdVar() . '<br>fourthVar: '. $this->getFourthVar() . '<br>fifthVar: '. $this->getFifthVar();
	  			}

	  			public function printInfo() {
	  				echo '<br><br> ThirdClass - printInfo():<br>';
					$this->displayInfo();
				} 
			}

			class BranchClass extends PrimaryClass {
				public function __construct($n) {
	   				$this->branchVar = $n;
	  			}

	  			public function getBranchVar() {
	    			return $this->branchVar*50;
	  			}

	  			public function displayInfo() {
	  				echo 'firstVar: '. $this->getFirstVar() .'<br>secondVar: '. $this->getSecondVar() .'<br>thirdVar: '. 
					$this->getThirdVar() . '<br>branchVar: '. $this->getBranchVar();
	  			}

	  			public function printInfo($n) {
	  				echo '<br><br> BranchClass - printInfo():';
					$this->displayInfo();
				} 
			}



			$primaryClassVar = new PrimaryClass();
			$primaryClassVar->setFirstVar($textbox1);
			$primaryClassVar->setSecondVar($textbox2);
			$primaryClassVar->setThirdVar($textbox3);
			$primaryClassVar->displayInfo();


			$thirdClassVar = new ThirdClass($textbox1*5);
			$thirdClassVar->setFirstVar($textbox1+10);
			$thirdClassVar->setSecondVar($textbox2.$textbox3);
			$thirdClassVar->setThirdVar($textbox3.$textbox2);
			$thirdClassVar->setFourthVar($textbox3.$textbox3);
			$thirdClassVar->printInfo();

			$branchClassVar = new BranchClass($textbox1);
			$branchClassVar->setFirstVar($textbox1+20);
			$branchClassVar->setSecondVar($textbox2.$textbox3);
			$branchClassVar->setThirdVar($textbox3.$textbox2);
			$branchClassVar->printInfo($textbox1);
		}
		


		?>

		<br><br>
		<form method="post" action="">
			<label for="textbox1">Textbox 1 (Number):</label>
			<input type="number" name="textbox1" id="textbox1"><br><br>
			
			<label for="textbox2">Textbox 2 (Text):</label>
			<input type="text" name="textbox2" id="textbox2"><br><br>

			<label for="textbox3">Textbox 3 (Text):</label>
			<input type="text" name="textbox3" id="textbox3"><br><br>

			<input type="submit" name="submit" value="Submit">
	</form>
	</body>
</html>