<!DOCTYPE html>
<html lang="en-US">
	<head>
	<!---Meta Tags--->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="LabourFriend.in - We Help Labours To Get Work In Their Locality Easily And Hirers To Find Their Required Labours Within Their Locality In Less Time.">
		<meta name="keywords" content="LabourFriend,labour friend,labour in my panchayat,find labour in odisha,construction labours in my panchayat,plumbers in my panchayat,masons in my panchayat,wall painter in my panchayat,carpenters in my panchayat,electricians in my panchayat,tite setters in my panchayat,labours in odisha,hire labour in odisha,plumbers in our area,electricians in our area,masons in our area,tile setters in our area,painters in our area,carpenters in our area,find labours in our area,nayak groups,chandan,chandan kumar nayak">
		<meta name="owner" content="Chandan Kumar Nayak">
		<!---logo--->
		<link rel="icon" type="image/png" href="image/lf.jpg"/>
		
    <title>Contact | LabourFriend</title>
	<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: blue;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
	</style>
	</head>
	<body>
	<?php include 'src/main-nav.php'; ?>
	<!----Contact---->
	<div class="container">
  <div style="text-align:center">
    <h2 style="text-decoration:underline;">Contact Us</h2>
    <p>Call us <a href="tel:8455944781">here</a>, or leave us a message below:</p>
  </div>
  <div class="row">
    <div class="column">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51223.40103384115!2d86.62204664733942!3d20.285819178485507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1bb53b22b48f0f%3A0xc9fd18f3b98dbbbc!2sParadeep%2C%20Odisha!5e1!3m2!1sen!2sin!4v1604916167314!5m2!1sen!2sin" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="column">
      <form action="/contact-back.php">
        <label for="fname">First Name</label>
        <input type="text" name="fname" placeholder="Your first name.." required>
		<label for="mname">Middle Name (optional)</label>
        <input type="text" name="mname" placeholder="Your middle name..">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" placeholder="Your last name.." required>
        <label for="phone">Mobile Number</label>
        <input type="text" name="phone" maxlength="10" pattern="^[6789]\d{9}$" placeholder="Your mobile number.." required>
		<label for="job">Message As</label>
        <select name="job" required>
		  <option value="" selected="selected">Select</option>
          <option value="hirer">Hirer</option>
          <option value="labourer">Labourer</option>
        </select>
        <label for="subject">Subject</label>
        <textarea name="subject" placeholder="Write something.." style="height:170px" required></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
	<!-------------->

	<?php include 'src/footer.php'; ?>
	</body>
</html>