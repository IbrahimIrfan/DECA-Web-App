function parseExam() {
    // scroll back to top on submit, disable answers and submit button
    window.scrollTo(0, 0);
    $('.select-style').prop('disabled', 'true');
    $('#submit').css('display', 'none');
    
    // answer key
    var exam = { 
      '1': 'A',
      '2': 'B',
      '3': 'A',
      '4': 'D',
      '5': 'C',
      '6': 'A',
      '7': 'C',
      '8': 'P',
      '9': 'A',
      '10': 'A',
      '11': 'C',
      '12': 'D',
      '13': 'D',
      '14': 'B',
      '15': 'B',
      '16': 'C',
      '17': 'D',
      '18': 'B',
      '19': 'C',
      '20': 'B',
      '21': 'C',
      '22': 'D',
      '23': 'B',
      '24': 'B',
      '25': 'A',
      '26': 'C',
      '27': 'A',
      '28': 'A',
      '29': 'D',
      '30': 'A',
      '31': 'C',
      '32': 'C',
      '33': 'D',
      '34': 'C',
      '35': 'A',
      '36': 'B',
      '37': 'B',
      '38': 'D',
      '39': 'A',
      '40': 'C',
      '41': 'B',
      '42': 'B',
      '43': 'A',
      '44': 'A',
      '45': 'D',
      '46': 'C',
      '47': 'A',
      '48': 'D',
      '49': 'D',
      '50': 'C',
      '51': 'B',
      '52': 'A',
      '53': 'A',
      '54': 'D',
      '55': 'A',
      '56': 'C',
      '57': 'A',
      '58': 'A',
      '59': 'C',
      '60': 'B',
      '61': 'C',
      '62': 'B',
      '63': 'A',
      '64': 'D',
      '65': 'A',
      '66': 'B',
      '67': 'D',
      '68': 'D',
      '69': 'D',
      '70': 'A',
      '71': 'A',
      '72': 'B',
      '73': 'B',
      '74': 'B',
      '75': 'C',
      '76': 'D',
      '77': 'B',
      '78': 'B',
      '79': 'C',
      '80': 'D',
      '81': 'B',
      '82': 'D',
      '83': 'A',
      '84': 'C',
      '85': 'A',
      '86': 'B',
      '87': 'C',
      '88': 'A',
      '89': 'C',
      '90': 'C',
      '91': 'C',
      '92': 'A',
      '93': 'D',
      '94': 'D',
      '95': 'A',
      '96': 'D',
      '97': 'A',
      '98': 'P',
      '99': 'B',
      '100': 'B' 
    }
    
    // grade the exam
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
    
    // update and post the score
    document.getElementById('score').innerHTML = 'Score: ' + score + '/100';
    var data_to_post = {
        "score": score,
        "user": userid
    }
    $.ajax({
        type: "POST",
        url: "Finance_2_Split_Homework_Server.php",
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
    // get the userId from dashboard
    var userid = parseInt($(data).find('.userid_block').html());
    
    // start the timer and parseExam on complete
    $('.timer').startTimer({
        onComplete: function(element) {
            element.addClass('complete');
            parseExam();
        }
    });
    
    // hide timer and parseExam on submit
    $('#myform').on('submit', function(e) {
        $('.timer').hide();
        e.preventDefault();
        parseExam();
    });
});
