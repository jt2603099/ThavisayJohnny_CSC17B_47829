function setCookie() {
  var cObject = {};
    cObject.name = document.getElementById("name").value;
    cObject.description = document.getElementById("desc").value;
    console.log(cObject.description);
    cObject.answer1 = document.getElementById("ans1").value;
    cObject.answer2 = document.getElementById("ans2").value;
    cObject.answer3 = document.getElementById("ans3").value;

    var cookieString = JSON.stringify(cObject);
    document.cookie = 'CookieObject=' +cookieString; path='/';
}

function getCookie() {
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split('=');

  var obj = JSON.parse(ca[1]);
    document.getElementById("name").value = obj.name;
    document.getElementById("desc").value = obj.description;
    document.getElementById("ans1").value = obj.answer1; 
    document.getElementById("ans2").value = obj.answer2; 
    document.getElementById("ans3").value = obj.answer3;

  //var parameters = Object.entries(obj);

    
  //alert(obj.name);
}

function clearCookie() {
  document.getElementById("name").value = "";
  document.getElementById("desc").value = "";
  document.getElementById("ans1").value = "";
  document.getElementById("ans2").value = "";
  document.getElementById("ans3").value = "";
}
  