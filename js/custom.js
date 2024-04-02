// $(document).ready(function(){ 
//     $("input[name=action]").change(function() {
//         var test = $(this).val();
//         $(".show-hide").hide();
//         $("#"+test).show();
//     }); 
// });



$(document).ready(function () {
  $('input[type="radio"]').click(function () {
    if ($(this).attr("id") == "grnbtn") {
      $("#green").show();
    } else {
      $("#green").hide();
    }

    if ($(this).attr("id") == "redbtn") {
      $("#red").show();
    } else {
      $("#red").hide();
    }
  });
});
