$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$("#epochIn").on("input", function(){
    var epoch = parseInt($(this).val());//+ (new Date().getTimezoneOffset() * -1); //for timeZone
    
    if (epoch < 10000000000)
        epoch *= 1000;   
    
    var textDate = new Date(epoch);
    $("#epochOut").html(textDate);
});

/*
 * Basic script to make consistently spaced comments easily.
 */
$("#commentIn").on("input", function(){
    var commentText = $(this).val();
    var fillLength = 72 - commentText.length;
    if (fillLength >- 0){
        var lFill = fillLength / 2
        var rFill = fillLength / 2
        if (fillLength % 2 == 1){
            rFill ++;
        }
    }else{
        var lFill = 0;
        var rFill = 0;
    }

    var htmlComment = "&lt;!--" + "-".repeat(lFill) + commentText + "-".repeat(rFill) + "--&gt;";
    var cssComment = "/*--" + "-".repeat(lFill) + commentText + "-".repeat(rFill) + "-*/";
    var hashComment = "#---" + "-".repeat(lFill) + commentText + "-".repeat(rFill) + "--#";

    $("#commentHtmlOut").html(htmlComment);
    $("#commentCssOut").html(cssComment);
    $("#commentHashOut").html(hashComment);
});