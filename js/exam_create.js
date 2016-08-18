var string = '<html><head><title>IRHS DECA</title>' +
'<link type="text/css" rel="stylesheet" href="plugins/materialize/css/materialize.min.css" />' +
'<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>' +
'<link rel="icon" href="img/favicon.ico" sizes="16x16">' +
'<link rel="stylesheet" type="text/css" href="css/main.css"></link>' +
"<meta charset='utf-8'>" +
'<meta http-equiv="X-UA-Compatible" content="IE=edge">' +
'<meta name="viewport" content="width=device-width, initial-scale=1">' +
'<link rel="stylesheet" href="css/cssmenu/styles.css">' +
'<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">' +
'<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-red.min.css">' +
'<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>'+
'<script src="getmdl-select.min.js"></script>' +
'<link rel="stylesheet" href="getmdl-select.min.css">' +
'<script type="text/javascript" src="plugins/materialize/js/materialize.min.js"></script>' +
'<script type="text/javascript" src="js/dropdown.js"></script>' +
'</head><body>' +
"<div id='cssmenu'><ul><li><a href='index.html'><span>Home</span></a></li>" +
      "  <li><a href='events.html'><span>Events</span></a></li>" +
      "  <li class='active'><a href='dashboard.html'><span>Dashboard</span></a></li>" +
      "  <li><a href='about.html'><span>About Us</span></a></li>" +
        "<li class='last'><a href='register.html'><span>Register</span></a></li></ul></div><br/><br/>" +
'<div class="content" style="font-size: large;"><h6 style="color: red;">IRHS DECA does not own any of these exams.</h6><h6>PBM_Exam_01</h6> <form id="myform">';
var fs = require('fs');
var exam = require('C:/Users/Ibrahim/Desktop/DECA-Web-App/PBM_exam.json');

for (var i in exam) {

    string += i + ". " + exam[i].q;

    string += '</br></br><div class="input-field col s12"><select><option disabled selected>Select</option><option>A. ' + exam[i].a + '</opition>' +
        '<option>B. ' + exam[i].b + '</opition>' +
        '<option>C. ' + exam[i].c + '</opition>' +
        '<option>D. ' + exam[i].d + '</opition></select></div></br></br>' +
        'Correct: ' + exam[i].ans + '. </br></br>'+
        'Explanation: ' + exam[i].exp +'</br></br></br>';
}



string += '<button id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" type="button">Submit</button>'+
'</button></form></div></body></html>';

fs.writeFile('C:/Users/Ibrahim/Desktop/DECA-Web-App/exam_example.html', string, function(err, data) {
    if (err) {
        return console.log(err);
    };
    console.log("SAVED");
});
