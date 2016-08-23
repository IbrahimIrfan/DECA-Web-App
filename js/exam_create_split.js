var q = 1;
var cluster = "Principles"

var jsonfilelocation = '/Users/ibrahimirfan/Desktop/DECA-Web-App/exams/' + cluster + '/' + cluster + '_' + q + '_Questions.json';
var jsonfilelocation2 = '/Users/ibrahimirfan/Desktop/DECA-Web-App/exams/' + cluster + '/' + cluster + '_' + q + '_Answers.json';
var htmlfilelocation = '/Users/ibrahimirfan/Desktop/DECA-Web-App/exams/' + cluster + '/' + cluster + '_' + q + '_Split.html';
var jsfilelocation = '/Users/ibrahimirfan/Desktop/DECA-Web-App/exams/' + cluster + '/' + cluster + '_' +  q + '_Split.js';
var jsfile = 'exams/' + cluster + '/' + cluster + '_' + q + '_Split.js';
var examtitle = cluster + "_Exam_" + q;

var string = '<html><head><title>IRHS DECA</title>' +
    '<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>' +
    '<link rel="icon" href="img/favicon.ico" sizes="16x16">' +
    '<link rel="stylesheet" type="text/css" href="css/main.css"></link>' +
    "<meta charset='utf-8'>" +
    '<meta http-equiv="X-UA-Compatible" content="IE=edge">' +
    '<meta name="viewport" content="width=device-width, initial-scale=1">' +
    '<link rel="stylesheet" href="css/cssmenu/styles.css">' +
    '<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">' +
    '<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css">' +
    '<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>' +
    '</head><body>' + "<div id='cssmenu'>" +
    "<ul><li><a href='index.html'><span>Home</span></a></li>" +
    "<li><a href='about.html'><span>About DECA</span></a></li>" +
    "<li><a href='events.html'><span>Events</span></a></li>" +
    "<li class='active'><a href='dashboard.html'><span>Dashboard</span></a></li>" +
    "  <li><a href='announcements.html'><span>Announcements</span></a></li>" +
    "<li><a href='dates.html'><span>Schedules</span></a></li>" +
    "  <li class='last'><a href='register.html'><span>Register</span></a></li></ul></div></br>" +
    '<div class="content"><h4 style="color: red;">IRHS DECA does not own any of these exams.</h4><h4>' + examtitle + '</h4><h4 id="score" style="color: blue;"></h4><form id="myform">';
var fs = require('fs');

var exam = require(jsonfilelocation);
var exam2 = require(jsonfilelocation2);

for (var i in exam) {
    string += "<h5 id='q" + i + "'>" + i + ". " + exam[i].q + "</h5>";

    string += '<select class="select-style" id="_' + i + '"><option value="def" disabled selected>Select</option><option value="A">A. ' + exam[i].a + '</option>' +
        '<option value="B">B. ' + exam[i].b + '</option>' +
        '<option value="C">C. ' + exam[i].c + '</option>' +
        '<option value="D">D. ' + exam[i].d + '</option></select></br></br>' +
        '<div id="' + i + 'answer" style="display: none;"><h5>Incorrect. The correct answer is ' + exam2[i].ans + ': ';
    if (exam2[i].ans == "A") {
        string += exam[i].a;
    } else if (exam2[i].ans == "B") {
        string += exam[i].b;
    } else if (exam2[i].ans == "C") {
        string += exam[i].c;
    } else {
        string += exam[i].d;
    }
    string += '</h5><h5>' + exam2[i].exp + '</h5></div>';
}



string += '<input id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="submit"></input>' +
    '</form></div>'
string += '</body><script src="' + jsfile + '"></script></html>';

var string2 = "$('#myform').on('submit', function(e){\n"
string2 += "e.preventDefault();\n";
string2 += "window.scrollTo(0, 0);\n";
string2 += "$('.select-style').prop('disabled', 'true');\n"
string2 += "$('#submit').css('display', 'none');\n";
string2 += "var exam = {};\n";

for (var i in exam) {
    string2 += 'exam[' + i + '] = {};\n';
    string2 += 'exam[' + i + '].ans ="' + exam2[i].ans + '";\n';
}
string2 += "var score = 0;\n"
string2 += 'for (var i in exam) {\n'
string2 += "if ($('#_' + i).val() == exam[i].ans){\n"
string2 += "score++;\n"
string2 += "document.getElementById('q' + i).style.color = '#00cc00';\n"
string2 += "}else{\n"
string2 += "document.getElementById('q' + i).style.color = 'red';\n"
string2 += "document.getElementById(i + 'answer').style.display = 'block';\n"
string2 += "}\n}\n"

string2 += "document.getElementById('score').innerHTML = 'Score: ' + score + '/100';\n";

string2 += "});\n"

fs.writeFile(htmlfilelocation, string, function(err, data) {
    if (err) {
        return console.log(err);
    };
    console.log("SAVED");
});

fs.writeFile(jsfilelocation, string2, function(err, data) {
    if (err) {
        return console.log(err);
    };
    console.log("SAVED");
});
