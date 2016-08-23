var q = 1;

var file = "Principles_" + q + "_Answers";
var file2 = "Principles_" + q + "_Questions";
var txtfilelocation = '/Users/ibrahimirfan/Desktop/DECA-Web-App/exams/Principles/' + file + '.txt';
var jsonfilelocation = '/Users/ibrahimirfan/Desktop/DECA-Web-App/exams/Principles/' + file + '.json';
var jsonfilelocation2 = '/Users/ibrahimirfan/Desktop/DECA-Web-App/exams/Principles/' + file2 + '.json';

var exam = {}
var exam2 = require(jsonfilelocation2);

for (var i = 1; i < 100; i++) {
    exam[i] = {};
    exam[i].q = "";
    exam[i].a = "";
    exam[i].b = "";
    exam[i].c = "";
    exam[i].d = "";
    exam[i].ans = "";
}

var fs = require('fs');
fs.readFile(txtfilelocation, 'utf8', function(err, data) {
    if (err) {
        return console.log(err);
    }

    var data_split = data.split(" ");

    function parse_ans(start, idx) {
        var skip_count = -1;
        for (var j = 0; j < data_split.length; j++) { // for every word
            var endofstart = "";
            for (var k = data_split[j].length - start.length; k < data_split[j].length; k++) { // for every letter at the end of word
                endofstart += data_split[j][k];
            }
            if (endofstart == start) { // found answer start
                skip_count++;
                if (skip_count == idx) {
                    //  console.log(data_split[j]);
                    return data_split[j + 1][0];
                }
            }
        }
    } // end of parse_ans()

    function parse_exp(obj, idx) {
        var exp = "";
        var start = obj;
        if (obj == "A") {
            start += exam2[idx].a;
        } else if (obj == "B") {
            start += exam2[idx].b;
        } else if (obj == "C") {
            start += exam2[idx].c;
        } else if (obj == "D") {
            start += exam2[idx].d;
        }
        var start2 = start + ".";

        var start_split = start.split(" ");
        var start2_split = start2.split(" ");

        if (start_split.length == 1) {
            var message = start_split[0][0] + "\n";
            for (var i = 1; i < start_split[0].length; i++) {
                message += start_split[0][i];
            }
            for (var j = 0; j < data_split.length; j++) { // for every word (start)
                if ((data_split[j].toUpperCase()).includes(message.toUpperCase())) {
                    var not_done = true;
                    for (var k = j + 1; not_done; k++) { // for every word in exp
                        var wordend = "";
                        for (var m = 7; m > 0; m--) {
                            wordend += data_split[k][data_split[k].length - m];
                        }
                        if (wordend == "SOURCE:") {
                            exp += data_split[k].substr(0, data_split[k].length - 7 - m);
                            not_done = false; // exp end
                        } else {
                            exp += data_split[k] + " ";
                        };
                    }
                    return exp;
                }
            }
        } else {
            for (var j = 0; j < data_split.length; j++) { // for every word (start)
                var correct_count = 0;
                for (var i = 0; i < start2_split.length; i++) { // for every word in message
                    if ((j + i) < data_split.length) {
                        if (data_split[j + i].toUpperCase() == start2_split[i].toUpperCase() && start2_split.length !== 1) { // found matching word
                            correct_count++;
                        }
                        if (i !== 0 && i == start2_split.length - 1 && (data_split[j + i].toUpperCase()).includes(start2_split[i].toUpperCase())) {
                            correct_count++;
                        }
                        if (correct_count == start2_split.length || start2_split.length == 1 && data_split[j + i].toUpperCase() == start2_split[i].toUpperCase()) { // found exp
                            var not_done = true;
                            for (var k = j + start2_split.length; not_done; k++) { // for every word in exp
                                var wordend = "";
                                for (var m = 7; m > 0; m--) {
                                    wordend += data_split[k][data_split[k].length - m];
                                }
                                if (wordend == "SOURCE:") {
                                    exp += data_split[k].substr(0, data_split[k].length - 7 - m);
                                    not_done = false; // exp end
                                } else {
                                    exp += data_split[k] + " ";
                                };
                            }
                            return exp;
                        }
                    }
                }
            }

            var exp = "";
            for (var j = 0; j < data_split.length; j++) { // for every word (start)
                var correct_count = 0;
                for (var i = 0; i < start_split.length; i++) { // for every word in message
                    if ((j + i) < data_split.length) { // doesn't go over
                        if (data_split[j + i].toUpperCase() == start_split[i].toUpperCase() && start_split.length !== 1) { // found matching word
                            correct_count++;
                        }
                        if (i !== 0 && i == start_split.length - 1 && (data_split[j + i].toUpperCase()).includes(start_split[i].toUpperCase())) {
                            correct_count++;
                        }
                        if (correct_count == start_split.length || start_split.length == 1 && data_split[j + i].toUpperCase() == start2_split[i].toUpperCase()) { // found exp
                            var not_done = true;
                            for (var k = j + start_split.length; not_done; k++) { // for every word in exp
                                var wordend = "";
                                for (var m = 7; m > 0; m--) {
                                    wordend += data_split[k][data_split[k].length - m];
                                }
                                if (wordend == "SOURCE:") {
                                    exp += data_split[k].substr(0, data_split[k].length - 7 - m);
                                    not_done = false; // exp end
                                } else {
                                    exp += data_split[k] + " ";
                                };
                            }
                            return exp;
                        }
                    }
                }
            }
        }


    }


    for (var i = 1; i < 100; i++) { // for every question
        exam[i].ans = parse_ans("\n" + i + ".", 1);
        //   console.log("Correct Answer: " + exam[i].ans);

        exam[i].exp = parse_exp(exam[i].ans, i);
        //    console.log(exam[i].exp);

        fs.writeFile(jsonfilelocation, JSON.stringify(exam), function(err, data) {
            if (err) {
                return console.log(err);
            };
            console.log("SAVED");
        });
    }

}); // end of readFile