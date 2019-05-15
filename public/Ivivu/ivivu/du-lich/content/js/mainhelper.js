/* Vaanres 21/03/2016 */

$(function () {

    setTimeout(function () {
        $(".workingTime").fadeIn();
    }, 200);

    // for input textfield datepicker
    $("span.input-group-addon").click(function () {
        var input = $(this).parent().find("input:text");
        if (input !== undefined) {
            input.click();
        }
    });
});
