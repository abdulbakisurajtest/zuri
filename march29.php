<?php
echo "<h1>Basic Operations In PHP</h1>";

// if form has been submitted
if(isset($_POST['result']))
{
	// variable to store error messages
	$errorMessage = "";

	if(empty($_POST['number_one'])) 	// if input one is empty, add error message to error
	{
		$errorMessage .= "<li>Please enter a value for the first number</li>";
	}
	if(empty($_POST['number_two']))		// if input two is empty, add error message to error
	{
		$errorMessage .= "<li>Please enter a value for the second number</li>";
	}
	
	$num_one = $_POST['number_one'];
	$num_two = $_POST['number_two'];
	$operation = $_POST['operation'];
	$result = '';

	// if there are error messages
	if(!empty($errorMessage))
	{
		// display errors
		echo $errorMessage;
	}

	// if there are no error messages
	else
	{
		echo "<h2>RESULT</h2>";

		// check which operation is to be performed
		switch($operation)
		{
			// addition
			case 'add':
				$result = "<p>$num_one + $num_two = ".($num_one + $num_two)."</p>";
				break;

			// subtraction
			case 'subtract':
				$result = "<p>$num_one - $num_two = ".($num_one - $num_two)."</p>";
				break;

			// division
			case 'divide':
				$result = "<p>$num_one / $num_two = ".($num_one / $num_two)."</p>";
				break;

			// multiplication
			case 'multiply':
				$result = "<p>$num_one * $num_two = ".($num_one * $num_two)."</p>";
				break;

			// modulus
			case 'modulus':
				$result = "<p>$num_one mod $num_two = ".($num_one % $num_two)."</p>";
				break;

			// default
				default:
				$result = "<p>This operation is not valid</p>"; 
		}
		// display the new result
		echo $result;
	}
}
?>

<!-- form to collect user input -->
<form action="march29.php" method="post" autocomplete="off">
	<!-- Get first number -->
	<p>
		Enter the first number:
		<input type="number" name="number_one">
	</p>

	<!-- Select operation -->
	<p>
		Select operation: 
		<select name="operation">
			<option value="add" selected>Addition</option>
			<option value="subtract">Subtraction</option>
			<option value="divide">Division</option>
			<option value="multiply">Multiply</option>
			<option value="modulus">Modulus</option>
		</select>
	</p>

	<!-- Get second number -->
	<p>
		Enter the second number:
		<input type="number" name="number_two">
	</p>

	<!-- Submit operation -->
	<input type="submit" name="result" value="Show Result">
</form>