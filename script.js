$(document).ready(function(){
  $(".registration-form").submit(function(event){
    let name = $("#name").val().trim();
    let email = $("#email").val().trim();
    let password = $("#password").val();
    let phone = $("#phone").val().trim();
    let gender = $("#gender").val();
    let course = $("#course").val();

    if(name.length < 3){
      alert("Name must be at least 3 characters long.");
      event.preventDefault();
      return false;
    }

    if(!email.includes("@") || !email.includes(".")){
      alert("Please enter a valid email address.");
      event.preventDefault();
      return false;
    }

 
    if(password.length < 6){
      alert("Password must be at least 6 characters long.");
      event.preventDefault();
      return false;
    }

    if(!/^[0-9]{10}$/.test(phone)){
      alert("Phone number must be exactly 10 digits.");
      event.preventDefault();
      return false;
    }

    
    if(gender === ""){
      alert("Please select your gender.");
      event.preventDefault();
      return false;
    }

    if(course === ""){
      alert("Please select your course.");
      event.preventDefault();
      return false;
    }

    alert("Form submitted successfully!");
    return true;
  });

});
