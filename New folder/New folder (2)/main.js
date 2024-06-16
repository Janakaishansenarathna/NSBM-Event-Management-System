function validate() {

    //check email is empty or not
      if (document.sup.email.value == "") {
          alert("Type your Email");
          return false;
        }
        //check passowrd is empty or not
        if (document.sup.studid.value == "") {
          alert("Type your Student ID");
          return false;
        }
        //check confird password is empty or not
        if (document.sup.pnumber.value == "") {
          alert("Type your Contact Number");
          return false;
        }
      //check email is nsbm or not
      if (!(document.sup.email.value.endsWith("nsbm.ac.lk"))) {
        alert("Email should end with nsbm.ac.lk");
        return false;
      }
   
      return true;
    }

    //function for validate user sign up form input
function validatesup() {

  //check email is empty or not
    if (document.sup.email.value == "") {
        alert("Type your Email");
        return false;
      }
      //check passowrd is empty or not
      if (document.sup.password.value == "") {
        alert("Type your Password");
        return false;
      }
      //check confird password is empty or not
      if (document.sup.cpassword.value == "") {
        alert("Type your Password again");
        return false;
      }
    //check email is nsbm or not
    if (!(document.sup.email.value.endsWith("nsbm.ac.lk"))) {
      alert("Email should end with nsbm.ac.lk");
      return false;
    }
  //check the passwords are matching or not
    if (document.sup.password.value !== document.sup.cpassword.value) {
      alert("Passwords do not match");
      return false;
    }

    //check user click the agree button
    if (!(document.sup.agree.checked)) {
      alert("You must agree to the terms and conditions");
      return false;
    }

    return true;
  }

  //validation for signin form
  function validatesin() {

    //check email is empty or not
    if (document.sin.email.value == "") {
        alert("Type your Email");
        return false;
      }
      //check passowrd is empty or not
      if (document.sin.password.value == "") {
        alert("Type your Password");
        return false;
      }
    //check email is NSBM or not
    if (!(document.sin.email.value.endsWith("nsbm.ac.lk"))) {
      alert("Email should end with nsbm.ac.lk");
      return false;
    }

    return true;
  }

  //check user log in or not & fetch user email 
function checkdashlogin() {
  //check localstorage file to check user log in or not
   let islogin = localStorage.getItem('user_logged_in');

   if (!islogin || islogin !== 'true') { //if user not log in then it will redirect to sign in page
    window.location.href = 'signin.html';
   }else{

     //if user is login then itwill fetch user email from localstorage 
       let userEmail = localStorage.getItem('email');
       if (userEmail) {
          //show user email in usermail element
           document.uev.useremail.value = userEmail;
           document.uev.hiddenuseremail.value = userEmail;

       }
   }
}