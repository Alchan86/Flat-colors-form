jQuery.noConflict();
(function($) {
  $(document).ready(function() {
    /*animacija na label text*/
    $("input").focus(function() {
      $(".label_class").css("font-size", "10px");
    });

    /*animacija na input*/
    $(window).on("load", function() {
      $(".form-group input").val("");
    });

    /*aktiven gumb ko so izpolnjena polja*/
    $("#user, #email, #phone, #restaurant_name, #restaurant_zip").bind(
      "keyup",
      function() {
        if (allFilled()) $("#submit").removeAttr("disabled");
        $("#restaurant_zip").append("<p>Vsa polja so obvezna</p>");
      }
    );
  });
})(jQuery);
