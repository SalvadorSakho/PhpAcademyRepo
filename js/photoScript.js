/**
 * Created by User on 01.02.2017.
 */
$(document).ready(function () {
    $("input[name='photoName']").on("click", function () {

        if ($(this).val().toLowerCase() == "photo1".toLocaleLowerCase()) {
            $("div#photosDivId>img").remove();
            if ($("#photosDivId").children().length > 0) {
                return;
            } else {
                $("#myPhotosDivId").css("height", "200px");
                $("#photosDivId").prepend("<img src='pic/myPic1.png'>");
            }
        } else if ($(this).val().toLowerCase() == "photo2".toLocaleLowerCase()) {
            $("div#photosDivId>img").remove();
            if ($("#photosDivId").children().length > 0) {
                return;
            } else {
                $("#myPhotosDivId").css("height", "200px");
                $("#photosDivId").prepend("<img src='pic/myPic2.jpg'>");
            }
        } else if ($(this).val().toLowerCase() == "photo3".toLocaleLowerCase()) {
            $("div#photosDivId>img").remove();
            if ($("#photosDivId").children().length > 0) {
                return;
            } else {
                $("#myPhotosDivId").css("height", "200px");
                $("#photosDivId").prepend("<img src='pic/myPic3.jpg'>");
            }
        } else {
            $("div#photosDivId>img").remove();
        }
    });
});