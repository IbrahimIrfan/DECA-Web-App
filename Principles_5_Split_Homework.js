function parseExam() {
    window.scrollTo(0, 0);
    $('.select-style').prop('disabled', 'true');
    $('#submit').css('display', 'none');
    var exam = {};
    exam[1] = {};
    exam[1].ans = "D";
    exam[2] = {};
    exam[2].ans = "C";
    exam[3] = {};
    exam[3].ans = "C";
    exam[4] = {};
    exam[4].ans = "C";
    exam[5] = {};
    exam[5].ans = "D";
    exam[6] = {};
    exam[6].ans = "A";
    exam[7] = {};
    exam[7].ans = "B";
    exam[8] = {};
    exam[8].ans = "P";
    exam[9] = {};
    exam[9].ans = "A";
    exam[10] = {};
    exam[10].ans = "C";
    exam[11] = {};
    exam[11].ans = "A";
    exam[12] = {};
    exam[12].ans = "D";
    exam[13] = {};
    exam[13].ans = "C";
    exam[14] = {};
    exam[14].ans = "D";
    exam[15] = {};
    exam[15].ans = "C";
    exam[16] = {};
    exam[16].ans = "B";
    exam[17] = {};
    exam[17].ans = "B";
    exam[18] = {};
    exam[18].ans = "C";
    exam[19] = {};
    exam[19].ans = "B";
    exam[20] = {};
    exam[20].ans = "C";
    exam[21] = {};
    exam[21].ans = "D";
    exam[22] = {};
    exam[22].ans = "C";
    exam[23] = {};
    exam[23].ans = "C";
    exam[24] = {};
    exam[24].ans = "C";
    exam[25] = {};
    exam[25].ans = "B";
    exam[26] = {};
    exam[26].ans = "C";
    exam[27] = {};
    exam[27].ans = "B";
    exam[28] = {};
    exam[28].ans = "A";
    exam[29] = {};
    exam[29].ans = "A";
    exam[30] = {};
    exam[30].ans = "D";
    exam[31] = {};
    exam[31].ans = "D";
    exam[32] = {};
    exam[32].ans = "D";
    exam[33] = {};
    exam[33].ans = "D";
    exam[34] = {};
    exam[34].ans = "C";
    exam[35] = {};
    exam[35].ans = "B";
    exam[36] = {};
    exam[36].ans = "A";
    exam[37] = {};
    exam[37].ans = "D";
    exam[38] = {};
    exam[38].ans = "B";
    exam[39] = {};
    exam[39].ans = "A";
    exam[40] = {};
    exam[40].ans = "D";
    exam[41] = {};
    exam[41].ans = "D";
    exam[42] = {};
    exam[42].ans = "D";
    exam[43] = {};
    exam[43].ans = "D";
    exam[44] = {};
    exam[44].ans = "B";
    exam[45] = {};
    exam[45].ans = "A";
    exam[46] = {};
    exam[46].ans = "D";
    exam[47] = {};
    exam[47].ans = "B";
    exam[48] = {};
    exam[48].ans = "D";
    exam[49] = {};
    exam[49].ans = "A";
    exam[50] = {};
    exam[50].ans = "A";
    exam[51] = {};
    exam[51].ans = "C";
    exam[52] = {};
    exam[52].ans = "C";
    exam[53] = {};
    exam[53].ans = "B";
    exam[54] = {};
    exam[54].ans = "D";
    exam[55] = {};
    exam[55].ans = "D";
    exam[56] = {};
    exam[56].ans = "A";
    exam[57] = {};
    exam[57].ans = "D";
    exam[58] = {};
    exam[58].ans = "A";
    exam[59] = {};
    exam[59].ans = "A";
    exam[60] = {};
    exam[60].ans = "A";
    exam[61] = {};
    exam[61].ans = "A";
    exam[62] = {};
    exam[62].ans = "B";
    exam[63] = {};
    exam[63].ans = "A";
    exam[64] = {};
    exam[64].ans = "A";
    exam[65] = {};
    exam[65].ans = "C";
    exam[66] = {};
    exam[66].ans = "C";
    exam[67] = {};
    exam[67].ans = "A";
    exam[68] = {};
    exam[68].ans = "A";
    exam[69] = {};
    exam[69].ans = "C";
    exam[70] = {};
    exam[70].ans = "A";
    exam[71] = {};
    exam[71].ans = "A";
    exam[72] = {};
    exam[72].ans = "B";
    exam[73] = {};
    exam[73].ans = "D";
    exam[74] = {};
    exam[74].ans = "C";
    exam[75] = {};
    exam[75].ans = "C";
    exam[76] = {};
    exam[76].ans = "A";
    exam[77] = {};
    exam[77].ans = "D";
    exam[78] = {};
    exam[78].ans = "C";
    exam[79] = {};
    exam[79].ans = "D";
    exam[80] = {};
    exam[80].ans = "C";
    exam[81] = {};
    exam[81].ans = "A";
    exam[82] = {};
    exam[82].ans = "B";
    exam[83] = {};
    exam[83].ans = "D";
    exam[84] = {};
    exam[84].ans = "B";
    exam[85] = {};
    exam[85].ans = "C";
    exam[86] = {};
    exam[86].ans = "C";
    exam[87] = {};
    exam[87].ans = "A";
    exam[88] = {};
    exam[88].ans = "C";
    exam[89] = {};
    exam[89].ans = "B";
    exam[90] = {};
    exam[90].ans = "B";
    exam[91] = {};
    exam[91].ans = "D";
    exam[92] = {};
    exam[92].ans = "D";
    exam[93] = {};
    exam[93].ans = "C";
    exam[94] = {};
    exam[94].ans = "D";
    exam[95] = {};
    exam[95].ans = "A";
    exam[96] = {};
    exam[96].ans = "D";
    exam[97] = {};
    exam[97].ans = "B";
    exam[98] = {};
    exam[98].ans = "P";
    exam[99] = {};
    exam[99].ans = "A";
    exam[100] = {};
    exam[100].ans = "C";
    var score = 0;
    for (var i in exam) {
        if ($('#_' + i).val() == exam[i].ans) {
            score++;
            document.getElementById('q' + i).style.color = '#00cc00';
        } else {
            document.getElementById('q' + i).style.color = 'red';
            document.getElementById(i + 'answer').style.display = 'block';
        }
    }
    document.getElementById('score').innerHTML = 'Score: ' + score + '/100';
    var data_to_post = {
        "score": score,
        "user": userid
    }
    $.ajax({
        type: "POST",
        url: "Principles_5_Split_Homework_Server.php",
        data: data_to_post,
        success: function(r) {
            console.log("success " + r);
        },
        error: function(r) {
            console.log("error " + r);
        }
    });
}
$.get('dashboard.php', function(data){
userid = parseInt($(data).find('.userid_block').html());
$('.timer').startTimer({
    onComplete: function(element) {
        element.addClass('complete');
        parseExam();
    }
});
$('#myform').on('submit', function(e) {
    $('.timer').hide();
    e.preventDefault();
    parseExam();
});
});
