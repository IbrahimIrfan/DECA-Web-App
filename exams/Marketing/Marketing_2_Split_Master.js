function parseExam(){
window.scrollTo(0, 0);
$('.select-style').prop('disabled', 'true');
$('#submit').css('display', 'none');
var exam = {};
exam[1] = {};
exam[1].ans ="C";
exam[2] = {};
exam[2].ans ="B";
exam[3] = {};
exam[3].ans ="C";
exam[4] = {};
exam[4].ans ="B";
exam[5] = {};
exam[5].ans ="A";
exam[6] = {};
exam[6].ans ="A";
exam[7] = {};
exam[7].ans ="D";
exam[8] = {};
exam[8].ans ="P";
exam[9] = {};
exam[9].ans ="C";
exam[10] = {};
exam[10].ans ="A";
exam[11] = {};
exam[11].ans ="D";
exam[12] = {};
exam[12].ans ="C";
exam[13] = {};
exam[13].ans ="D";
exam[14] = {};
exam[14].ans ="C";
exam[15] = {};
exam[15].ans ="C";
exam[16] = {};
exam[16].ans ="D";
exam[17] = {};
exam[17].ans ="C";
exam[18] = {};
exam[18].ans ="A";
exam[19] = {};
exam[19].ans ="B";
exam[20] = {};
exam[20].ans ="C";
exam[21] = {};
exam[21].ans ="C";
exam[22] = {};
exam[22].ans ="A";
exam[23] = {};
exam[23].ans ="A";
exam[24] = {};
exam[24].ans ="B";
exam[25] = {};
exam[25].ans ="D";
exam[26] = {};
exam[26].ans ="B";
exam[27] = {};
exam[27].ans ="D";
exam[28] = {};
exam[28].ans ="C";
exam[29] = {};
exam[29].ans ="D";
exam[30] = {};
exam[30].ans ="C";
exam[31] = {};
exam[31].ans ="A";
exam[32] = {};
exam[32].ans ="C";
exam[33] = {};
exam[33].ans ="A";
exam[34] = {};
exam[34].ans ="C";
exam[35] = {};
exam[35].ans ="D";
exam[36] = {};
exam[36].ans ="C";
exam[37] = {};
exam[37].ans ="B";
exam[38] = {};
exam[38].ans ="A";
exam[39] = {};
exam[39].ans ="D";
exam[40] = {};
exam[40].ans ="A";
exam[41] = {};
exam[41].ans ="D";
exam[42] = {};
exam[42].ans ="C";
exam[43] = {};
exam[43].ans ="B";
exam[44] = {};
exam[44].ans ="A";
exam[45] = {};
exam[45].ans ="B";
exam[46] = {};
exam[46].ans ="A";
exam[47] = {};
exam[47].ans ="C";
exam[48] = {};
exam[48].ans ="C";
exam[49] = {};
exam[49].ans ="A";
exam[50] = {};
exam[50].ans ="C";
exam[51] = {};
exam[51].ans ="C";
exam[52] = {};
exam[52].ans ="B";
exam[53] = {};
exam[53].ans ="B";
exam[54] = {};
exam[54].ans ="C";
exam[55] = {};
exam[55].ans ="C";
exam[56] = {};
exam[56].ans ="D";
exam[57] = {};
exam[57].ans ="D";
exam[58] = {};
exam[58].ans ="C";
exam[59] = {};
exam[59].ans ="C";
exam[60] = {};
exam[60].ans ="D";
exam[61] = {};
exam[61].ans ="A";
exam[62] = {};
exam[62].ans ="C";
exam[63] = {};
exam[63].ans ="A";
exam[64] = {};
exam[64].ans ="D";
exam[65] = {};
exam[65].ans ="A";
exam[66] = {};
exam[66].ans ="A";
exam[67] = {};
exam[67].ans ="C";
exam[68] = {};
exam[68].ans ="D";
exam[69] = {};
exam[69].ans ="B";
exam[70] = {};
exam[70].ans ="D";
exam[71] = {};
exam[71].ans ="D";
exam[72] = {};
exam[72].ans ="A";
exam[73] = {};
exam[73].ans ="B";
exam[74] = {};
exam[74].ans ="D";
exam[75] = {};
exam[75].ans ="B";
exam[76] = {};
exam[76].ans ="B";
exam[77] = {};
exam[77].ans ="A";
exam[78] = {};
exam[78].ans ="B";
exam[79] = {};
exam[79].ans ="B";
exam[80] = {};
exam[80].ans ="C";
exam[81] = {};
exam[81].ans ="D";
exam[82] = {};
exam[82].ans ="D";
exam[83] = {};
exam[83].ans ="A";
exam[84] = {};
exam[84].ans ="A";
exam[85] = {};
exam[85].ans ="B";
exam[86] = {};
exam[86].ans ="A";
exam[87] = {};
exam[87].ans ="B";
exam[88] = {};
exam[88].ans ="B";
exam[89] = {};
exam[89].ans ="D";
exam[90] = {};
exam[90].ans ="D";
exam[91] = {};
exam[91].ans ="A";
exam[92] = {};
exam[92].ans ="C";
exam[93] = {};
exam[93].ans ="A";
exam[94] = {};
exam[94].ans ="B";
exam[95] = {};
exam[95].ans ="B";
exam[96] = {};
exam[96].ans ="A";
exam[97] = {};
exam[97].ans ="C";
exam[98] = {};
exam[98].ans ="P";
exam[99] = {};
exam[99].ans ="A";
exam[100] = {};
exam[100].ans ="C";
var score = 0;
for (var i in exam) {
if ($('#_' + i).val() == exam[i].ans){
score++;
document.getElementById('q' + i).style.color = '#00cc00';
}else{
document.getElementById('q' + i).style.color = 'red';
document.getElementById(i + 'answer').style.display = 'block';
}
}
document.getElementById('score').innerHTML = 'Score: ' + score + '/100';
}$('.timer').startTimer({
onComplete: function(element){
  element.addClass('complete')
; parseExam();
}
});
$('#myform').on('submit', function(e){
e.preventDefault();
parseExam();
});
