var string = '<html><head><title>IRHS DECA</title></head><body><div style="font-family: helvetica; margin-left: 200px; margin-right: 200px;"><p>PBM_Exam_01</p> <form id="myform">';
var fs = require('fs');
var exam = require('C:/Users/Ibrahim/Desktop/DECA-Web-App/PBM_exam.json');

for (var i in exam) {

    string += i + ". " + exam[i].q;

    string += '</br></br><select><option disabled selected>Select</option><option>A. ' + exam[i].a + '</opition>' +
        '<option>B. ' + exam[i].b + '</opition>' +
        '<option>C. ' + exam[i].c + '</opition>' +
        '<option>D. ' + exam[i].d + '</opition></select></br></br>' +
        'Correct: ' + exam[i].ans + '. </br></br>'+
        'Explanation: ' + exam[i].exp +'</br></br></br>';
}



string += '</form></div></body></html>';

fs.writeFile('C:/Users/Ibrahim/Desktop/index.html', string, function(err, data) {
    if (err) {
        return console.log(err);
    };
    console.log("SAVED");
});
