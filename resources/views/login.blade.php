<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/ex7/submit" method="POST">
    @csrf
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value=""><br>
  @error('email')
    <span class="text-danger"> {{$message}}</span>
  @enderror
  <br>
  <label for="password">Password:</label><br>
  <input type="text" id="password" name="password" value=""><br><br>
  @error('password')
  <span class="text-danger"> {{$message}}</span>
  @enderror
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>

