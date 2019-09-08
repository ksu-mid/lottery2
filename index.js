$(function () {
  $('.error').hide();
  $("#submit").submit(function () {
    $('.error').hide();
    let arr = document.querySelectorAll("input").value;
    if (arr.size !== arr.length) {
      $(".error").show();
      return false;
    };

    let number_1 = $("#input_1").val();
    let number_2 = $("#input_2").val();
    let number_3 = $("#input_3").val();
    let number_4 = $("#input_4").val();
    let number_5 = $("#input_5").val();
    let number_6 = $("#input_6").val();
    let data = { number_1, number_2, number_3, number_4, number_5, number_6 };
    $.ajax({
      type: "POST",
      url: "action.php",
      data: data,
      dataType: 'json',
      success: function (response) {
        let result = $.parseJSON(response);
        $("#result_1").html(result.result_1);
        $("#result_2").html(result.result_2);
        $("#result_3").html(result.result_3);
        $("#result_4").html(result.result_4);
        $("#result_5").html(result.result_5);
      }
    })
  })
})

