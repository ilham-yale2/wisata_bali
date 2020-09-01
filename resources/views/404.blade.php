<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">   

   
    <script type="text/javascript" src="{{ asset('fa/js/all.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>404 | Page not found</title>
  </head>
  <body>
   
 	<div class="container mt-5 ">
 		<div class="row justify-content-center">
 			<div class="col-md-8 text-center">
 				<img src="{{url('img/not found.svg')}}" class="w-100 h-100">
 				<h3 class="poppins">Oops! Page is Not Found, Please back to Home page</h3>
 				<button type="button" onclick="home()" class="btn btn-primary">Back to home</button>
 			</div>
 		</div>
 	</div>

	<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			Swal.fire('Oops..','Page is not found','error')
 		});
 		function home(){
 			document.location.href="/"
 		}
 	</script>
	<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
