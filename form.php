<?php include "inc/html-top.php"; ?>
<body>
<div class="container">
<?php include "inc/nav.php"; ?>
<div id="form-wrapper">
 <form method="post" action="#" id="subscription-form" >
    <h1>Contact Us</h1>
    <h2>Questions? Comments? Concerns? Suggestions?</h2>
    <p>Please leave your message below and we'll get back to you as soon as we can.</p>
    <hr>

    <label for="name"><b>Name:</b></label>
    <input type="text" name="name" id="name" required>

    <label for="email"><b>Email:</b></label>
    <input type="text" name="email" id="email" required>

    <label for="message"><b>Message:</b></label>
    <input type="text" name="message" id="message" required>
  
    <div class="clearfix">
      <button onclick="window.location.href = 'index.php';" type="submit" name="submit" value="Send"  class="signupbtn">Submit</button>
    </div>
</form>
</div> 
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    $("#subscription-form").submit(function(e) {
    var formData = $("#subscription-form").serialize();
    $.ajax({
      type: 'POST',
      url: "new.php",
      data: formData,
      success: function(data){
        $("#form-wrapper").html("Thank you for subscribing!");
      }
    });
    e.preventDefault();
  });
  </script>
</div>
</body>
</html>