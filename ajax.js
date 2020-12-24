$(document).ready(function () {
  $("#contactme").submit(function (e) {
    e.preventDefault();

    $("#response").html(
      '<div class="alert alert-primary">جاري ارسال الرسالة ...</div>'
    );

    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: $(this).serialize(),
    })
      .done(function (response) {
        $("#response").html(
          `<div class="alert alert-success">${response}</div>`
        );
        $("#contactme").trigger("reset");
      })
      .fail(function (response) {
        $("#response").html(
          `<div class="alert alert-danger">${response.responseText}</div>`
        );
      });
  });
});
