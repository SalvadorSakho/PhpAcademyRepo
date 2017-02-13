<?php
$birthday = "17.10.1990";
$city = "Kiev";
$country = "Ukraine";
$phoneNumb = "+380633530621";
$nationality = "Ukrainian";
$university = array("West Pomeranian Business School, Szczecin (Poland)", "National Academy Statistics Accounting and Auditing, Kiev (Ukraine)");
$facultyes = array("International Business Study (IBS) (magister)", "Finance and Banking (bachelor)");
$courseArray = array("\"Java (Junior java course)\" Programming training center \"IT-centre\" (2016)", "\"Java (OOP)\". Programming training center \"IT-centre\" (2015)", "\"Administrator of MS SQL\". Educational center \"Contact\"(2014)");


/*Put your computer Skills in aray*/
$tdArrays = array("<td>Windows, Linux, Mac</td>"
, "<td>Java: OOP, Generics, Collections, Threads, Sockets, JDBC, JavaFX
                    <br>
                    Web: HTML
                    <br>
                    Database: MS SQL, Oracle SQL, MySQL (T-SQL,PL SQL,SSRS, technologies of:
                    backup and recovery, stored procedure, triggers, function)
                    <br>
                    Familiar with (on practice):
                    <br>
                    Java: JSP, Servlet
                    <br>
                    Frameworks: Maven, Spring, Hibernate
                    <br>
                    Web: Ajax, Jquery, JavaScript, CSS, Tomcat
                    <br>
                    DVCS: Git</td>"
, "<td>
                    Advanced user IntelliJ IDEA, Eclipse, MySQL Workbench, MS SQL Server
                    <br>
                    Management Studio, Oracle SQL Developer
                    <br>
                    Advanced user of Graphical editors: GIMP
                    <br>
                    Advanced user of EmEditor (work with regular expressions, etc.)
                    <br>
                    Advanced user of MS Office ( Excel, Word, Outlook, Power Point)
                    <br>
                    Intermediate level of Graphical editors: Photoshop
                </td>"
, "  <td>
                    English - Upper-Intermediate
                    <br>
                    Polish - Upper-Intermediate
                    <br>
                    Russian - Advanced
                </td>");


$monthes = array("", "January", "February", "Match", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$years = array();

/* Массив зарлднен в обратном порядке */
for ($i = 0; $i < date("Y"); $i++) {
    $years[$i] = date("Y") - $i;
}




?>
<!DOCTYPE html>

<html lang="en">

<!--https://github.com/henry2778/group-mon-fri-->
<head>
    <meta charset="UTF-8">
    <link href="cssSheet/styleSeatFile.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/showPersonalInformation.js" type="text/javascript" async></script>
    <script src="js/photoScript.js" type="text/javascript" async></script>

</head>
<body id="bodyId">
<div id="cvDivId">
    <div id="nameDivId">
        <h5>
            <b>
                CV: Sakho Ali Salvador
            </b>
        </h5>
    </div>
</div>
<div id="myPhotosDivId">
    <div><h2>My photos</h2></div>
    <input type="radio" name="photoName" value="photo1" id="photo1">
    <input type="radio" name="photoName" value="photo2" id="photo2">
    <input type="radio" name="photoName" value="photo3" id="photo3">
    <div id="photosDivId"></div>
</div>
<br>
<br>
<div id="selectPersonalInfoDivId">
    <select id="selectPersonalInfoId">
        <option disabled selected>Personal Information</option>
        <option id="personalInfoBtnId">Contacts</option>
        <option id="workExperienceBtnId">Work Experience</option>
        <option id="educationBtnId">Education And Training</option>
        <option id="skillsBtnId">Personal Skills</option>
        <option id="additionalInfoBtnId">Additional Information</option>
    </select>
</div>
<br>
<br>
<div id="informationMenuDivId">
    <div id="pesonalInfoDivId">
        <table id="infotabId">
            <tr>
                <td>City\Country:</td>
                <td><?= $city ?> (<?= $country ?>)</td>
            </tr>
            <tr>
                <td>Phone number:</td>
                <td><?= $phoneNumb ?></td>
            </tr>
            <tr>
                <td>Eail:</td>
                <td><a href="mailto:Salvador.Sakho21@gmail.com?subject=CV response">Salvador.Sakho21@gmail.com</a></td>
            </tr>
            <tr>
                <td>Date of birth:</td>
                <td><?= $birthday ?></td>
            </tr>
            <tr>
                <td>Nationality</td>
                <td><?= $nationality ?></td>
            </tr>
        </table>

    </div>
    <div id="workExperienceDivID">
        <table id="workExperienceTab">
            <!-- последняя работа-->
            <tr>
                <td class="standartTextTabCellClass">
                    Period:
                </td>
                <td><?= $monthes[11] ?> <?= $years[1] ?> - nowadays</td>
            </tr>
            <tr>
                <td class="standartTextTabCellClass">
                    Position:
                </td>
                <td>Teacher assistant</td>
            </tr>
            <tr>
                <td class="standartTextTabCellClass">
                    Company:
                </td>
                <td>Courses of Java programming in Kiev "JON"</td>
            </tr>
            <tr>
                <td class="responsibilitiesClass">
                    Responsibilities:
                </td>
                <td>
                    - Support of students during the course
                    <br>
                    - Development of educational software
                </td>
            </tr>
            <tr>
                <td class="justLine" colspan="2">
                    -----------------------------------------------------------------
                </td>
            </tr>
            <!-- предпоследняя работа-->
            <tr>
                <td class="standartTextTabCellClass">
                    Period:
                </td>
                <td>
                    <?= $monthes[6] ?> <?= $years[1] ?> - <?= $monthes[11] ?> <?= $years[1] ?>
                </td>
            </tr>
            <tr>
                <td class="standartTextTabCellClass">
                    Position:
                </td>
                <td>
                    Teacher assistant
                </td>
            </tr>
            <tr>
                <td class="standartTextTabCellClass">
                    Company:
                </td>
                <td>
                    Programming practical training center "it-centre"
                </td>
            </tr>
            <tr>
                <td class="responsibilitiesClass">
                    Responsibilities:
                </td>
                <td>
                    - Assistance in collection of educational materials
                    <br>
                    - Creating code examples
                    <br>
                    - Support of students during the coursew
                </td>
                <br>
            <tr>
                <td class="justLine" colspan="2">
                    -----------------------------------------------------------------
                </td>
            </tr>

            <!-- первое место работы-->
            <tr>
                <td class="standartTextTabCellClass">
                    Period:
                </td>
                <td>
                    <?= $monthes[10] ?> <?= $years[3] ?> - <?= $monthes[11] ?> <?= $years[1] ?>
                </td>
            </tr>
            <tr>
                <td class="standartTextTabCellClass">
                    Position:
                </td>
                <td>
                    Main specialist of IT solution department
                </td>
            </tr>
            <tr>
                <td class="standartTextTabCellClass">
                    Company:
                </td>
                <td>
                    Companies group UCG (UCG Finance), Kiev (Ukraine)
                </td>
            </tr>
            <tr>
                <td class="responsibilitiesClass">
                    Responsibilities:
                </td>
                <td>
                    - Development of the software for the company;
                    <br>
                    - Testing developed product (manually)
                    <br>
                    - Introduction and further technical support of developed product
                    <br>
                    - Technical support of external application: access rights management, monitoring,
                    <span style='padding-left:10px;'> </span> providing the evaluation and program debug, users support;
                    <br>
                    - Participation in the development of database structure;
                    <br>
                    - Supporting the functionality of database;
                    <br>
                    - Developing and optimization of reports using the SSRS tools;
                    <br>
                    - Development and providing relevance of documents in their field of activity;
                </td>
        </table>
    </div>
    <div id="educationAndTrainingsdivId">
        <table>
            <tr>
                <td class="standartTextTabCellClass">
                    EDUCATION:
                </td>
            </tr>
            <tr>
                <td class="responsibilitiesClass">
                    Universities:
                </td>
                <td>
                    Period: <?= $monthes[10] ?> <?= $years[6] ?> – <?= $monthes[3] ?> <?= $years[3] ?>
                    <br>
                    University: <?= $university[0] ?>;
                    <br>
                    Faculty: <?= $facultyes[0] ?>
                    <br>
                    <br>
                    Period: <?= $monthes[9] ?> <?= $years[10] ?> – <?= $years[6] ?>
                    <br>
                    University: <?= $university[1] ?>;
                    <br>
                    Faculty: <?= $facultyes[1] ?>
                </td>
            </tr>
            <tr>
                <td class="justLine" colspan="2">
                    -----------------------------------------------------------------
                </td>
            </tr>
            <tr>
                <td class="responsibilitiesClass">
                    Сourses:
                </td>
                <td>
                    <?= $courseArray[0] ?>
                    <br>
                    <?= $courseArray[1] ?>
                    <br>
                    <?= $courseArray[2] ?>
                </td>
            </tr>
        </table>
    </div>
    <div id="SkillsDivId">
        <select class="tableBtnClass" id="skillsMenu">
            <option disabled selected>Skills list</option>
            <option>Computer skills</option>
            <option>Languages</option>
            <option>Other skills</option>
        </select>
        <table id="computerSkills">
            <tr>
                <td class="knowledgesClass">
                    Advanced user:
                </td>
                <?= $tdArrays[0] ?>
            </tr>
            <tr>
                <td class="knowledgesClass">
                    Strong knowledge of:
                </td>
                <?= $tdArrays[1] ?>
            </tr>
            <tr>
                <td class="knowledgesClass">
                    Software:
                </td>
                <?= $tdArrays[2] ?>
            </tr>
        </table>
        <table id="LanguageSkillsId">
            <tr>
                <td class="knowledgesClass">
                    Mother tongue(s):
                </td>
                <td>
                    Ukrainian
                </td>
            </tr>
            <tr>
                <td class="knowledgesClass">
                    Other language(s):
                </td>
                <?= $tdArrays[3] ?>
            </tr>
        </table>
        <table id="otherSkillsTab">
            <tr>
                <td class="knowledgesClass">
                    Communication skills:
                </td>
                <td>
                    Good communication skills gained through my work, as insurance agent and
                    <span style='padding-left:10px;'> </span>
                    investment adviser,
                    during meetings with clients, presentations of products
                    <span style='padding-left:10px;'> </span>
                    and business negotiations.
                </td>
            </tr>
            <tr>
                <td class="knowledgesClass">
                    Organisational skills
                </td>
                <td>
                    Ability to set priorities during performing the tasks, familiar with the concept
                    of time management and stress resistance. Understanding of cultural
                    features and ability to build business relationships with other persons in
                    multicultural environment.
                </td>
            </tr>
        </table>
    </div>
</div>
<br>
<br>
<br>
<br>
<!--<div id="formDivId">
    <form id="formId">
        <div class="formaDescribeText">Название компании:</div>
        <input class="formaAnswerText" type="text" name="name">
        <br>
        <br>
        <div class="formaDescribeText">Email:</div>
        <input class="formaAnswerText" type="email" name="email">
        <br>
        <br>
        <div class="formaDescribeText">Город:</div>

        <select class="formaAnswerText" name="city">
            <option>Kiev</option>
            <option>Dnepr</option>
            <option>Lviv</option>
        </select>
        <br>
        <br>
        <input type="submit">
    </form>-->
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
    <div id="refLinksDivId">
        <h3>
            My profile:
            <a class="profileClass" href="https://github.com/SalvadorSakho" target="_blank"><img id="gitImgId"
                                                                                                 src="pic/git.png"></a>
            <a class="profileClass" href="https://linkedin.com/in/сальвадор-сахо-68219783" target="_blank"><img
                        id="liImgId"
                        src="pic/li.jpg"></a>
            <a class="profileClass" href="https://vk.com/salvador.sakho" target="_blank"><img id="vkImgId"
                                                                                              src="pic/vk.png"></a>
        </h3>
    </div>
</footer>
</body>
</html>