<!-- This ERROR shows the user that no field should be left empty in the form of an array -->
  <!-- {{$errors}}   -->


<!-- This takes the array error and store it as a list coming down -->
<!-- @if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif -->

<form action= "form" method="post"">
			<div class="content-2">
				
				<form  action="" autocomplete="on">

                @csrf
				  <p>
					<label for="username" class="uname" data-icon="u" > Your email or username </label>
					<input class="field" name="username"  type="text" placeholder="username"/>
				    <br>

					<!-- This display username is required(if you want the required pw to be displayed under the input field) -->
					 <span style="color:red">@error('username'){{$message}}@enderror</span> 
				  </p>
				  <p>
			
					<label for="password" class="youpasswd" data-icon="p"> Your password </label>
					<input class="field" name="password"  type="password" placeholder="mypassword" />
					<br>
						<!-- This display username is required -->
					 <span style="color:red">@error('password'){{$message}}@enderror</span>

				  </p>
                  <input type="submit"  name= "submit" value="Login" />
				</form>
			</div>
		