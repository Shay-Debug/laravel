<h1>Updating User Info In Database</h1>


<form action= '/edit' method='post'>
	
                @csrf
				  <p>
					<label for="id" class="uname" data-icon="u" > Id </label>
					<input class="field" name="id" value="{{$data['id']}}"  type="text" placeholder="id"/>
				    <br>

				  </p>
			

                  <p>
			
            <label for="name" class="youpasswd" data-icon="p"> Name</label>
            <input class="field" name="name"  value="{{$data['name']}}" type="text" placeholder="name" />
            <br>
             
          </p>

          <p>
			
            <label for="age" class="youpasswd" data-icon="p">Age</label>
            <input class="field" name="age" value="{{$data['age']}}" type="text" placeholder="age" />
            <br>
             
          </p>

          <p>
			
            <label for="address" class="youpasswd" data-icon="p"> Address</label>
            <input class="field" name="address" value="{{$data['address']}}" type="text" placeholder="address" />
            <br>
             
          </p>


          <p>
			
            <label for="email" class="youpasswd" data-icon="p"> email</label>
            <input class="field" name="email"  value="{{$data['email']}}" type="text" placeholder="email" />
            <br>
             
          </p>
          <button type="submit">Update</button>
				</form>
			</div>