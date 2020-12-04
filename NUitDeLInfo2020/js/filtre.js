$( document ).ready(function() {
    $(".myinput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myPlages .card").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
});