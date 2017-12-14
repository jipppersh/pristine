$('#login').submit(function(e) {
  e.preventDefault(); //disable default function of form
  $.ajax({
    context: this,
    type: 'POST',
    url: 'login.php',
    data: $(this).serialize(),
    success: function(response) {
      alert(response);
      if (response == "LOGIN SUCCESSFULLY") {
        location.reload();
      } else {
        $(this).trigger("reset");
      }
    }
  });
});