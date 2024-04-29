<!-- EKSTERNAL -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="formsignup.css">
</head>
<style>
</style>

<body>
    <h1>Buat Account baru</h1>
    <h3>Sign up Form</h3>
    <form action="udahlogin.php" method="get">
        <label ><strong>First name:</strong></label>
         <input type="text" id="fname" name="fname" required><br><br>
        <label ><strong>Last name:</strong></label>
        <input type="text" id="lname" name="lname" required><br><br>
      
      
        <div class="gender-container" method="get">
          <p><strong>Gender:</strong></p>
          <label for="male">
              <input type="radio" id="gender" name="gender" value="male" required>
              Male
          </label>
          <label for="female">
              <input type="radio" id="gender" name="gender" value="female" required>
              Female
          </label>
      </div>
      

        <p><strong>Nationality:</strong></p>
        <select id="Nationality" name="Nationality" required>
          <option value="Konoha">Konoha</option>
          <option value="Vinland">Vinland</option>
          <option value="Bekasi">Bekasi</option>
        </select>

        <br><br>

    <label for="indo">
    <input type="checkbox" id="indo" name="language[]" value="Indonesia">
    Indonesia
</label>
<label for="inggris">
    <input type="checkbox" id="inggris" name="language[]" value="Sunda">
    Sunda
<label for="tagalog">
    <input type="checkbox" id="tagalog" name="language[]" value="tagalog">
    Tagalog
</label><br>


          <p><strong>Bio</strong></p>
        
            <textarea name="message" rows="10" cols="30"></textarea>
            <br><br>
      
        
            <input type="submit" value="Sign Up" >
        </form>



</body>
</html>