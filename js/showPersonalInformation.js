/**
 * Created by User on 29.01.2017.
 */

$(document).ready(function () {
    alert("Hello");
    $('#selectPersonalInfoId').change(function () {

        if ($(this).val().toLowerCase() == "Contacts".toLocaleLowerCase()) {
            alert($(this).val());
            $("#pesonalInfoDivId").fadeIn();
        } else {
            $("#pesonalInfoDivId").fadeOut();
        }

        if ($(this).val().toLowerCase() == "Work Experience".toLocaleLowerCase()) {
            alert($(this).val());
            $("#workExperienceDivID").fadeIn();
        } else {
            $("#workExperienceDivID").fadeOut();
        }

        if ($(this).val().toLowerCase() == "Education And Training".toLocaleLowerCase()) {
            alert($(this).val());
            $("#educationAndTrainingsdivId").fadeIn();
        } else {
            $("#educationAndTrainingsdivId").fadeOut();
        }

    });
    /* $("#selectPersonalInfoId").change(function () {
     alert("hello");
     /!*Не заходит*!/
     $("#informationMenuDivId").fadeIn();
     return false;
     }, function () {
     $("#informationMenuDivId").fadeOut();
     return false
     });*/
});


