var q = 1;

var exam = {}

var file = "Principles_" + q + "_Questions";

for (var i = 1; i < 100; i++) {
    exam[i] = {};
    exam[i].q = "";
    exam[i].a = "";
    exam[i].b = "";
    exam[i].c = "";
    exam[i].d = "";
    exam[i].ans = "";
}

var txtfilelocation = '/Users/ibrahimirfan/Desktop/DECA-Web-App/exams/Principles/' + file + '.txt';
var jsonfilelocation = '/Users/ibrahimirfan/Desktop/DECA-Web-App/exams/Principles/' + file + '.json';

var fs = require('fs');
fs.readFile(txtfilelocation, 'utf8', function(err, data) {
    if (err) {
        return console.log(err);
    }

    var data_split = data.split(" ");

    function parse(start, end, end2, end3, end4, idx) {
        var obj = "";
        var skip_count = -1;
        for (var j = 0; j < data_split.length; j++) { // for every word
            var endofstart = "";
            for (var k = data_split[j].length - start.length; k < data_split[j].length; k++) { // for every letter at the end of word
                endofstart += data_split[j][k];
            }
            if (endofstart == start) { // found question start
                skip_count++;
                if (skip_count == idx) {
                    var endofobj = true;
                    for (var k = (j + 1); endofobj; k++) { // for every word in question
                        var wordend = "";
                        for (var l = end.length; l > 0; l--) {
                            wordend += data_split[k][data_split[k].length - l];
                        }

                        var wordend2 = "";
                        for (var l = end2.length; l > 0; l--) {
                            wordend2 += data_split[k][data_split[k].length - l];
                        }

                        var wordend3 = "";
                        for (var l = end3.length; l > 0; l--) {
                            wordend3 += data_split[k][data_split[k].length - l];
                        }

                        var wordend4 = "";
                        for (var l = end4.length; l > 0; l--) {
                            wordend4 += data_split[k][data_split[k].length - l];
                        }

                        if (wordend == end) {
                            obj += data_split[k].substr(0, data_split[k].length - end.length - 1);
                            endofobj = false; // question end
                        } else if (wordend2 == end2) {
                            obj += data_split[k].substr(0, data_split[k].length - end2.length - 1);
                            endofobj = false; // question end
                        } else if (wordend3 == end3) {
                            obj += data_split[k].substr(0, data_split[k].length - end3.length - 1);
                            endofobj = false; // question end
                        } else if (wordend4 == end4) {
                            obj += data_split[k].substr(0, data_split[k].length - end4.length - 1);
                            endofobj = false; // question end
                        } else {
                            obj += data_split[k] + " ";
                        };
                    }
                    return obj;
                }
            }
        }
    } // end of parse()

    for (var i = 1; i < 100; i++) { // for every question
        exam[i].q = parse(i + ".", "A.", "A.", "A.", "A.", 0);
        exam[i].a = parse("A.", "C.", "B.", "B.", "B.", i - 1);
        exam[i].c = parse("C.", "B.", "D.", "D.", "D.", i - 1);
        exam[i].b = parse("B.", "D.", "C.", "C.", "C.", i - 1);
        exam[i].d = parse("D.", (i + 1) + ".", "Copyright", "2011", "Test", i - 1);

        /*      console.log(i + ". " + exam[i].q);
            console.log("    A. " + exam[i].a);
          console.log("    B. " + exam[i].b);
            console.log("    C. " + exam[i].c);
            console.log("    D. " + exam[i].d); */

        fs.writeFile(jsonfilelocation, JSON.stringify(exam), function(err, data) {
            if (err) {
                return console.log(err);
            };
            console.log("SAVED");
        });
    }

}); // end of readFile