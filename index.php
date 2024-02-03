<!DOCTYPE html>
<html lang="en">
<head>
  <title>Email Send in php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Email Send in php </h2>
  <form action="mail.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="subject">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject">
    </div>
    <div class="form-group">
         <label for="Message">Message:</label>
         <input type="text" class="form-control" id="mesg" placeholder="Enter Subject" name="mesg">
    </div>
    <input  type="submit" value="send" name="send"  class="btn btn-primary">
  </form>
</div>

</body>
</html>
