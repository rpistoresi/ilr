$(document).ready(function() {
  
    $("#checkbtn'").click(function() {
      
      // To Display progress bar
      $("#loading").show();

      var files = $("#files").val();

      // Transfering form information to different page without page refresh
      $.post("eventsForm.php", {
            name: name,
            email: email,
            mobile: mobile,
            address: address
            }, function(status) {
            $("#loading").hide(); // To Hide progress bar
            alert(status);
          });
    });
});