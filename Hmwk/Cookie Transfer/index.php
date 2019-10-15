<!DOCTYPE html>
<?php include ('Survey.php');?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form to add polls to a Survey</title>
    <script src="CookieFunctions.js"></script>
  </head>

  <body id="main">
    <form>
      <input name="Name" type="text"        id="name"/>        <label>Name</label><br></br>
      <input name="Description" type="text" id="desc"/> <label>Description</label><br></br>
      <input name="Answer1" type="text"     id="ans1"/>     <label>Answer1</label><br></br>
      <input name="Answer2" type="text"     id="ans2"/>     <label>Asnwer2</label><br></br>
      <input name="Answer3" type="text"     id="ans3"/>     <label>Answer3</label><br></br>
      <button name="Submit" type="submit"   onclick="setCookie()">Submit</button>
      <button name="Display" type="button"  onclick="getCookie()">Display Cookies</button>
    </form>
  </body>
</html>