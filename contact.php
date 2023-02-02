<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> My portfolio website </title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="style.css">
   
   
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <form action="contactdetails.php" method="POST"></form> -->
   </head>
<body>
 
    <div class="main">
       <div class="contactform">
        <h1>Contact me for Work <b>/</b> General enquiries</h1>


        <!-- form starts from here -->
        <form action="./contactdetails.php" method="POST">
            <div class="mb-3">
              <label for="client email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="client email" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">We'll never share your email & phone number with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="client email" class="form-label">Name</label>
                <input type="name" class="form-control" id="client email" aria-describedby="emailHelp" name="name">
                

            <div class="mb-3">
              <label for="clientphone" class="form-label">Phone number</label>
              <input type="phone" class="form-control" id="clientphone" name="phone">
            </div>

            <div class="mb-3">
                <label for="client email" class="form-label">Enquiry</label>
                <input type="name" class="form-control" id="client email" aria-describedby="emailHelp" name="enquiry">

            <div class="mb-3"id="form-check">
              <input type="checkbox" class="form-check-input" id="isclient">
              <label class="form-check-label" for="isclient">I want you to work on project with me</label>
            </div>
            <div class="btn">
            <button type="submit" class="btn btn-sm" name="save">Submit</button>
        </div>
            


          </form>
       </div>
    
</div>
</div>
<!-- <script src="script.js"> -->

</script>
</body>
</html>