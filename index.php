<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>
<body>
    <form method="POST" action="user_data.php">
        <label for ="name">Name: <input type= "text" name ="name" ></label>
        <br>
        <label for ="email">Email: <input type= "email" name ="email" ></label>
        <br>
        <label for ="Date of Birth">Date of Birth: <input type= "number" name ="dob" ></label>
        <br>
        <label for ="Gender">Gender: <input type= "text" name ="gender" ></label>
        <br>
        <label for ="Country">Country: <input type= "text" name ="country" ></label>
        <br>

        <button type="submit">Submit</button>
    </form>

   
    
</body>
</html>