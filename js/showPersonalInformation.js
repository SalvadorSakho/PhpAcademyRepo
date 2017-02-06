/**
 * Created by User on 29.01.2017.
 */

$(document).ready(function () {
    $('#selectPersonalInfoId').change(function () {

        if ($(this).val().toLowerCase() == "Contacts".toLocaleLowerCase()) {
            $("#pesonalInfoDivId").fadeIn();
        } else {
            $("#pesonalInfoDivId").fadeOut();
        }

        if ($(this).val().toLowerCase() == "Work Experience".toLocaleLowerCase()) {
            $("#workExperienceDivID").fadeIn();
        } else {
            $("#workExperienceDivID").fadeOut();
        }

        if ($(this).val().toLowerCase() == "Education And Training".toLocaleLowerCase()) {
            $("#educationAndTrainingsdivId").fadeIn();
        } else {
            $("#educationAndTrainingsdivId").fadeOut();
        }

        if ($(this).val().toLowerCase() == "Personal Skills".toLocaleLowerCase()) {
            $("#SkillsDivId").fadeIn();
        } else {
            $("#SkillsDivId").fadeOut();
        }
    });

    $('#skillsMenu').change(function () {
        if ($(this).val().toLowerCase() == "Computer skills".toLocaleLowerCase()) {
            $("#computerSkills").fadeIn();

        } else {
            $("#computerSkills").fadeOut();
        }
    });

    $('#skillsMenu').change(function () {
        if ($(this).val().toLowerCase() == "Languages".toLocaleLowerCase()) {
            $("#LanguageSkillsId").fadeIn();
        } else {
            $("#LanguageSkillsId").fadeOut();
        }
    });

    $('#skillsMenu').change(function () {
        if ($(this).val().toLowerCase() == "Other skills".toLocaleLowerCase()) {
            $("#otherSkillsTab").fadeIn();
        } else {
            $("#otherSkillsTab").fadeOut();
        }
    });

});


