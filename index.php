<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Algorithms page</title>

</head>
<body>
<div id="wrapper">
<div class="col-md-8">
<h3 class="text-danger">Write a function to find out if the given number is a Prime number</h3>
<br>
<pre>function isPrime(n){
	var divisor = 2;
	while( n > divisor){
		if(n % divisor == 0){
			return false;
		}
		else
			divisor++;
	}
	return true;
}</pre>
</div>
<div class="col-md-4">
	<h3 class="text-danger">Start by writing a function called isPrime with the parameter n.</h3>
	<hr>
	<p class="text-success">While the given number is greater than divisor also if the divisor is not divisible by 2, return True. Otherwise, return False.</p>
</div>
<div class="col-md-12">
	<hr>
</div>
<div class="col-md-8">

<h3 class="text-danger">Find all the Prime Factors of a number</h3>
<pre>
function primeFactors(n){
 	var factors = [],
 		divisor = 2;

 	while(n > 2){
 		if(n % divisor == 0){
			factors.push(divisor);
 			n = n / divisor;
 		}
		else{
 			divisor++;
 		}
 	}
 	return factors;
 }
</pre>
</div>
<div class="col-md-4">
	<h3 class="text-danger">Start by writing function primeFactors with the parameter n</h3>
	<p class="text-success">variable factors assigned to empty array and the divisor value is 2. while the given number is greater than 2 and if the given number n is divisible by the divisor. Push that value into the factors array. Else increment the divisor by 1. Return the factors array.</p>

</div>
<div class="col-md-12">
	<hr>
</div>
<div class="col-md-8">
<h3 class="text-danger">Fibonacci recursive run complexity is O(2^n)</h3>
<pre>
function fibonacci(n){
 	if(n <= 1)
 		return n;
 	else
 		return fibonacci(n - 1) + fibonacci(n - 2);
}
</pre>
</div>
<div class="col-md-4">
	<h3 class="text-danger">Start by writing the function called fibonacci that takes a number n as the parameter</h3>
	<hr>
	<p class="text-success">if given number n is less than or equal to 1, return that number. Else return the sum of n-1 and n-2. <br>>
	 <small>Still a little confused about this one...</small></p>

</div>
</div>
<?php include 'footer.php' ?>

</div>

</body>
</html>