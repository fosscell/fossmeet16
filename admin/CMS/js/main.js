$(document).ready(function() {

	$("body").addClass("loaded");

	$(function () {
		$('a[rel="lightbox"]').fluidbox();
	})

});


function addnewuser_superactions(){
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var insertnewusers = "";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      console.log(xhttp.responseText);
    }
  }
  var formData = "?username="+username+"&password="+password+"&insertnewusers="+insertnewusers;
  xhttp.open("POST", " addnewuser_superuser.php"+formData, true);
  xhttp.send(formData);
}


function validateForm(){
var formD = document.forms["payment_form"];

var name = formD["billing_address_first_name"].value;
var email = formD["customer_email"].value;
var phoneno = formD["customer_phone"].value;
var orgname = formD["Field_72942"].value;

if(name == null || name == "" || email == null || email == "" || phoneno == null || phoneno == "" || orgname == null || orgname == ""){
	alert("empty fields");
    return false;
}
}

function get_name_reg_users(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      var parti_nameD = "";
      var response = xhttp.responseText;
      var A = response.split(',');
      for(var i=0;i<A.length;i++){
	    var individual = A[i].split(';');
        if(individual.length == 2){
          var id = individual[1];
          var name = individual[0];
          parti_nameD = parti_nameD + "<option value='"+id+"'>"+name+"</option>";
        }
      }
      document.getElementById('parti_name').innerHTML = parti_nameD;
    }
  }
  xhttp.open("GET", "list_reg_users.php", true);
  xhttp.send();
}