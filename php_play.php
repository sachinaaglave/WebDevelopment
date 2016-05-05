<!DOCTYPE html>
<html>
<head>
	<style>
		fieldset {
			background:lightyellow;
			border:10px solid yellow;
			margin-bottom:10px;
			width:720px;
		}
		label {
			width: 180px;
			display:inline-block;
			text-align: right;
			vertical-align: top;
		}
		textarea {
			width:360px;
			height:50px;
		}
		label:hover { font-size:20px }
		input {
			margin-bottom:5px;
		}
	</style>
</head>
<body>

<form id='datingform'>
 <fieldset>
  <legend>Your Face</legend>
  <label for='image'>Your Image: </label>
  <input type="file" id='image' name='image' required><br>
  <label for=preview'>Image Preview:</label><img id='preview'><br>
 </fieldset>
 
 <fieldset>
  <legend>Your General Details</legend>
  <label for='name'>Name: </label>
  <input type="text" id='name' name='name' required><br>
  <label for='gender'>Gender:</label>
  <input type="radio" id='male' name="gender" value="male" required><label for='male'>Male</label> 
  <input type="radio" id='female' name="gender" value="female"><label for='female'>Female</label> <br>
  <label for='age'>Age: </label>
  <input type="number" id='age' name='age' required><br>
  <label for='bdate'>Date of birth: </label>
  <input type="date" id='bdate' name='bdate' ><br>
  <label for='color'>Favourite colore:</label>
  <input type="color" id='color'name='color' ><br>
  <label for='cname'>Which country: </label>
  <select id='cname' name='cname' form='datingform'>
	  <option value="india">india</option>
	  <option value="pak">pak</option>
	  <option value="US">US</option>
	  <option value="UK">UK</option>
  </select>
 </fieldset>
 <fieldset>
  <legend>Your Indicators</legend>
  <label for='hrange'> Height:</label>
  <input type="range" id='hrange' name='hrange'   min="0" max="100" /><br>
  <label for='srange'> Salary: </label>
  <input type="range" id='srange' name='srange'  min="0" max="100" /><br>
 </fieldset>
 <fieldset>
  <legend>Your Contact Information</legend>
  <label for='email'> Email: </label>
  <input id='email' name='email' type="email"><br>
  <label for='tel'> Mobile: </label>
  <input id='tel' name='tel' type="tel"><br>
  <label for='address'> Address:</label>
  <textarea id='address' name='address'  type="text"></textarea><br>
  <label>Method to contact you: </label>
  <input type="checkbox" id='emailchat' name="emailchat" >Email
  <input type="checkbox" id='whatsappchat' name="whatsappchat" >Whatsapp
  <input type="checkbox" id='appchat' name="appchat" >In app chat<br>
 </fieldset>
 <input type='submit' value='Submit'>
</form>
<script>
</script>

</body>
</html>
