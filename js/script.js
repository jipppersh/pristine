$('#login').submit(function(e) {
  e.preventDefault(); //disable default function of form
  $.ajax({
    context: this,
    type: 'POST',
    url: 'login.php',
    data: $(this).serialize(),
    success: function(response) {
      if (response == true) {
        alert("Login Successfully");
        location.reload();
      } else {
        alert("Invalid Username and/or Password");
        $(this).trigger("reset");
      }
    }
  });
});
$('#register').submit(function(e) {
  e.preventDefault(); //disable default function of form
  if ($(this).find("#txtPassword").val() != $(this).find("#txtRetypePassword").val()) {
    alert("Password does not match");
    $(this).find("#txtPassword").focus();
    return;
  }
  $.ajax({
    context: this,
    type: 'POST',
    url: 'register.php',
    data: $(this).serialize(),
    success: function(response) {
      if (response == true) {
        alert("Registered Successfully");
        location.reload();
      } else {
        alert("Already Exists");
      }
    }
  });
});