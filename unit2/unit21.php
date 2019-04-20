<!DOCTYPE html>
<html>
<head>
  <title>Unit2-1 Basic PHP Programing - Tasks </title>
</head>

<body>
	<h1>Unit2-1 tasks</h1>

	<!-- Task 1: String-->
	<!-- write your solution to Task 1 here -->
	<div class="section">
		<h2>Task 1 : String</h2>
		<?php
		$var = "I love programming";
		echo "First letter is: " . $var[0] . "<br/>";
		echo "Length of string is: " . strlen($var) . "<br/>";
		echo "Last letter is: " . $var[strlen($var)-1] . "<br/>";
		echo "First 6 letters are: " . substr($var, 0, 6) . "<br/>";
		echo "In capital: " . strtoupper($var) . "<br/>";

		?>
		
	
	
	</div>

	<!-- Task 2: Array and image-->
	<!-- write your solution to Task 2 here -->
	<div class="section">
		<h2>Task 2 : Array and image</h2>
		<?php
		$images = array("earth.jpg", "flower.jpg", "plane.jpg", "tiger.jpg");
		$num=count($images);
		$randomnum= rand()%$num;
		$pic=$images[$randomnum];
		?>
		<img src="images/<?=$pic?>" alt="<?=$pic?>" width="20%"/>


		
	</div>	

	<!-- Task 3: Function definition dayinmonth  -->
	<!-- write your solution to Task 3 here -->
	<div class="section">
		<h2>Task 3 : Function definition</h2>
		<?php
			function daysInMonth($month) {
				switch ($month) { //this could be done with an if..elseif..else type statement
					case 1: 
					case 3:
					case 5:
					case 7:
					case 8:
					case 10:
					case 12:
						return 31; //because there is no break between these statements, this returns true for cases 1,3,5,7,8,10 and 12. 
						break;
					case 4:
					case 6:
					case 9:
					case 11:
						return 30;
					case 2:
						return 28;
					default:
						return -1;
				}
			}
			
			//print out the months from 1-12
			for ($x = 1; $x <= 12; $x++) {
				echo "<li> Month " . $x . " => " . daysInMonth($x) . "</li>";
			}
		?>
	
	
	</div>
	

	
	<!-- Task 4: Favorite Artists from a File (Files) -->
	<!-- write your solution to Task 4 here -->
	<div class="section">
		<h2>Task 4: My Favorite Artists from a file</h2>
		<?php
		$file = file("favorite.txt");
		foreach($file as $line){
			$strlower = strtolower($line);
			$strArray = explode(" ",$strlower); //explode function breaks string into array
			$webadd = implode("-",$strArray); //implode function joins the array with a string
			echo "<li> <a href=\"http://www.mtv.com/artist/" . $webadd . "\"/>" . $line . "</a> <br/>";
		}
		?>

		
	</div>
	
	<!-- Task 6: Directory operations -->
	<!-- write your solution to Task 6 here -->
	<div class="section">
		<h2>Task 6 : Directory operations</h2>
		<p>Files within a directory:</p>
		<ol>
		<?php
		foreach(scandir($_SERVER['DOCUMENT_ROOT']) as $filename){
			if (!is_dir($filename)){
				echo "<li>$filename </li> ";
			}
		}
	
		?>
		</ol>	


		
	</div>

	<!-- Task 6 optional: Directory operations -->
	<!-- write your solution to Task 6 optional here -->
	<div class="section">
		<h2>Task 6 optional: Directory operations optional</h2>
		<p>All files within a directory:</p>
		<ol>
		<?php
		function displayAll($dir) {

			# loop through files in $dir
			foreach (scandir($dir) as $filename) {
				# Skip current and parent folder
				if ($filename == '.')  continue;
				if ($filename == '..') continue;
				# Check if it's a file or a directory
				if (is_dir("$dir/$filename")) {
					# Check the sub-directory recursively
					displayAll("$dir/$filename");
				} else {
					# output filename to array
					echo "<li>". $filename."</li>";
				}
			}
	    }
		displayAll($_SERVER['DOCUMENT_ROOT']);
		?>
		</ol>	
	
	
	</div>
	</div


	
    <!-- Task 5: including external files -->
	<!-- write your solution to Task 5 here -->
	<div class="section">
		<h2>Task 5: including external files</h2>
		<?php include ('footer.php'); ?> 
			
			
	</div>

</body>
</html>
