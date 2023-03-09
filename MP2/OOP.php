<html>
	<head>
		<title>OOP Concepts - Summative Assessment 2.0</title>
	</head>
	<body>
		<?php

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
				echo 'firstVar: '.getFirstVar().'<br>secondVar: '.getSecondVar().'<br>thirdVar: '.getThirdVar();
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
				echo '<br>fourthVar: '.getFourthVar();
			} 
		}

		$primaryClassVar = new PrimaryClass();
		$secondClassVar = new SecondClass();

	


		?>
	</body>
</html>