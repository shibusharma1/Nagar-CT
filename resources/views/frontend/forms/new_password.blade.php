<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password reset</title>
    <link rel="stylesheet" href="{{asset('assets/css/passreset.css')}}">
</head> 
<body>
    <div class="pass-reset">
      <form action="" method="post">
        @csrf
        <h2>Password Reset</h2>
        <div class="form-group">
            <label for="old-password">Old Password</label>
            <input type="password" id="old-password" name="old-password" required>
          </div>
          <div class="form-group">
            <label for="new-password">New Password</label>
            <input type="password" id="new-password" name="new-password" required>
          </div>
          <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
          </div>
          <button type="submit">Reset Password</button>
        </form>
    </div>
</body>
</html>