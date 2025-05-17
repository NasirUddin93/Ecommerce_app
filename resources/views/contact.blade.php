<h1>Hello, Contact page</h1>
<h3> <a href="{{URL::to('/')}}">Back to home</a> </h3>



<form action="{{route('student.store')}}" method="POST">
	@csrf
	<input type="text" name="name" placeholder="Write your name"><br>
	<input type="email" name="email" placeholder="Write your email"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<button type="submit">Submit</button>
</form>