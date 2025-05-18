<h1>Hello, Contact page</h1>
<h3> <a href="{{URL::to('/')}}">Back to home</a> </h3>


<form action="{{route('store.contact')}}" method="POST">
	@csrf
	<input type="text" name="name" placeholder="Write your name" value="{{old('name')}}"><br>
	@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	<input type="email" name="email" placeholder="Write your email" value="{{old('email')}}"><br>
	@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	<input type="password" name="password" placeholder="Password" value="{{old('password')}}><br>
	@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
	<button type="submit">Submit</button>
</form>