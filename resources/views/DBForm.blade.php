<form action= "DBForm" method="post">
	
                @csrf
				  <p>
					<label for="id" class="uname" data-icon="u" > Id </label>
					<input class="field" name="id"  type="text" placeholder="id"/>
				    <br>

				  </p>
			

                  <p>
			
            <label for="name" class="youpasswd" data-icon="p"> Name</label>
            <input class="field" name="name"  type="text" placeholder="name" />
            <br>
             
          </p>

          <p>
			
            <label for="age" class="youpasswd" data-icon="p">Age</label>
            <input class="field" name="age"  type="text" placeholder="age" />
            <br>
             
          </p>

          <p>
			
            <label for="address" class="youpasswd" data-icon="p"> Address</label>
            <input class="field" name="address"  type="text" placeholder="address" />
            <br>
             
          </p>


          <p>
			
            <label for="email" class="youpasswd" data-icon="p"> email</label>
            <input class="field" name="email"  type="text" placeholder="email" />
            <br>
             
          </p>
          <button type="submit">Add</button>
				</form>
			</div>