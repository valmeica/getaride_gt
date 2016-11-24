 function checkPassword(str)
  {   
    var re = /^(?=.*\d).{6,}$/;
    return re.test(str);
  }
 
 
 function stregister() {
    var lname = document.getElementById("lname").value;
	
	
    if (lname == "") {
		document.getElementById('errors').innerHTML=("Error: Last Name cannot be blank!");
        
        return false;
    }//re = /^\w+$/;
	reln= /^[A-Z][a-z]+\.?$/;
    if(!reln.test(lname)) {
      document.getElementById('errors').innerHTML=("Error: Last Name must consist of Capitl and small letters!");
     
      return false;
    }
	
	var fname = document.getElementById("fname").value;
	
	
	 if (fname == "") {
		document.getElementById('errors').innerHTML=("Error: First Name cannot be blank!");
        
        return false;
    }//re = /^\w+$/;
	refn= /^[A-Z][a-z]+\.?$/;
    if(!refn.test(fname)) {
      document.getElementById('errors').innerHTML=("Error: First Name must consist of Capitl and small letters!");
     
      return false;
    }
	
	
	var phone = document.getElementById("phone").value;
    
	if(phone == "") 
	{
      document.getElementById('errors').innerHTML=("Error: phone cannot be blank!");
      
      return false;
    }
   
	reph= /^\d{3}-\d{3}-\d{4}$/;
    if(!reph.test(phone))
		{
      document.getElementById('errors').innerHTML=("Error: phone must consist of ###-###-####!");
      
      return false;
    }
	
	var major = document.getElementById("major").value;
	
	if (major == "") {
		document.getElementById('errors').innerHTML=("Error: Major cannot be blank!");
        
        return false;
    }//re = /^\w+$/;
	remj= /^[a-z]+\.?$/;
    if(!remj.test(major)) {
      document.getElementById('errors').innerHTML=("Error: Major must consist of more than one letter!");
     
      return false;
    }
	
    var email = document.getElementById("email").value;
		
	if(email == "") 
   {  
	   
	   document.getElementById('errors').innerHTML=("Error: Please check that you've entered your email!");
   
   return false;
   }
   /*     secemail= document.getElementById("secemail").value;
	   if(email != secemail &&  secemail != "")
	   {
        document.getElementById('errors').innerHTML=("The email you have entered does not match");
        
        return false;
      } 
   */
	
    var login = document.getElementById("login").value;
	
	if (login == "") {
		document.getElementById('errors').innerHTML=("Error: login cannot be blank!");
        
        return false;
    }
	
	/*relg = /^[a-z]+\.?$/;
	if(!relg.test(login)) {
      document.getElementById('errors').innerHTML=("Error: login must consist of more than one letter!");
     
      return false;
    }*/
	
    var pwd1 = document.getElementById("pwd1").value;
   // var pwd2 = document.getElementById("pwd2").value;
	
	if(pwd1 != "" && pwd1 == pwd2) 
	{
      if(!checkPassword(pwd1)) {
        document.getElementById('errors').innerHTML=("The password you have entered is not valid! At least 6 numbers");
        
        return false;
      }
    } 
	else {
      document.getElementById('errors').innerHTML=("Error: Please check that you've entered and confirmed your password!");
      
      return false;
    }
	
	
	
	
	return true;
	
	}
	
	
	
	
	
	
	
function validate(form) {
  var name = form.name.value;
  var email = form.email.value;
  var gender = form.gender.value;
  var message = form.message.value;
  var nameRegex = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
  var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  var messageRegex = new RegExp(/<\/?\w+((\s+\w+(\s*=\s*(?:".*?"|'.*?'|[^'">\s]+))?)+\s*|\s*)\/?>/gim);
  if(name == "") {
    document.getElementById('errors').innerHTML=("Error: No Last Name ");
    return false;
  }
  if(!name.match(nameRegex)) {
   document.getElementById('errors').innerHTML=("Error: Last Name must consist of Capitl and small letters!");
    return false;
  }
  if(email == "") {
   document.getElementById('errors').innerHTML=("Error: email cant be empty!");
    return false;
  }
  if(!email.match(emailRegex)) {
    document.getElementById('errors').innerHTML=("Error: email dont match!");
    return false;
  }
  if(gender == "") {
   document.getElementById('errors').innerHTML=("Error: gender is empty!");
    return false;
  }
  if(message == "") {
    document.getElementById('errors').innerHTML=("Error: message empty!");
    return false;
  }
  if(message.match(messageRegex)) {
    document.getElementById('errors').innerHTML=("Error: message dont match!");
    return false;
  }
  return true;
}