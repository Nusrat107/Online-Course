<!DOCTYPE html>
<html lang="en">


<head>
    <title>Education Master Template</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    
 @include('frontend.include.style')
</head>
<body>
	
 @include('frontend.include.header')
	<main>
		@yield('content')
	</main>



    @include('frontend.include.footer')
	@include('frontend.include.script')
    @include('frontend.include.social')

	    @stack('script')

</body>
</html>