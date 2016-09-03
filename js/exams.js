$(document).on('ready', function() {
    var exams = {
        "Principles": {
            "cluster": "Principles",
            "tests": {
                0: {
                    "link": "/exams/Principles/Principles_1_Whole_Master.php",
                    "title": "Principles Exam 01"
                },
                1: {
                    "link": "/exams/Principles/Principles_2_Whole_Master.php",
                    "title": "Principles Exam 02"
                },
                2: {
                    "link": "/exams/Principles/Principles_3_Whole_Master.php",
                    "title": "Principles Exam 03"
                },
                3: {
                    "link": "/exams/Principles/Principles_4_Whole_Master.php",
                    "title": "Principles Exam 04"
                },
                4: {
                    "link": "/exams/Principles/Principles_5_Whole_Master.php",
                    "title": "Principles Exam 05"
                },
                5: {
                    "link": "/exams/Principles/Principles_6_Whole_Master.php",
                    "title": "Principles Exam 06"
                },
                6: {
                    "link": "/exams/Principles/Principles_7_Whole_Master.php",
                    "title": "Principles Exam 07"
                },
                7: {
                    "link": "/exams/Principles/Principles_1_Split_Master.php",
                    "title": "Principles Exam 08"
                },
                8: {
                    "link": "/exams/Principles/Principles_2_Split_Master.php",
                    "title": "Principles Exam 09"
                },
                9: {
                    "link": "/exams/Principles/Principles_3_Split_Master.php",
                    "title": "Principles Exam 10"
                },
                10: {
                    "link": "/exams/Principles/Principles_4_Split_Master.php",
                    "title": "Principles Exam 11"
                },
                11: {
                    "link": "/exams/Principles/Principles_5_Split_Master.php",
                    "title": "Principles Exam 12"
                },
                12: {
                    "link": "/exams/Principles/Principles_6_Split_Master.php",
                    "title": "Principles Exam 13"
                }
            }
        },
        "Finance": {
            "cluster": "Finance",
            "tests": {
                0: {
                    "link": "/exams/Finance/Finance_1_Whole_Master.php",
                    "title": "Finance Exam 01"
                },
                1: {
                    "link": "/exams/Finance/Finance_2_Whole_Master.php",
                    "title": "Finance Exam 02"
                },
                2: {
                    "link": "/exams/Finance/Finance_3_Whole_Master.php",
                    "title": "Finance Exam 03"
                },
                3: {
                    "link": "/exams/Finance/Finance_4_Whole_Master.php",
                    "title": "Finance Exam 04"
                },
                4: {
                    "link": "/exams/Finance/Finance_5_Whole_Master.php",
                    "title": "Finance Exam 05"
                },
                5: {
                    "link": "/exams/Finance/Finance_6_Whole_Master.php",
                    "title": "Finance Exam 06"
                },
                6: {
                    "link": "/exams/Finance/Finance_7_Whole_Master.php",
                    "title": "Finance Exam 07"
                },
                7: {
                    "link": "/exams/Finance/Finance_1_Split_Master.php",
                    "title": "Finance Exam 08"
                },
                8: {
                    "link": "/exams/Finance/Finance_2_Split_Master.php",
                    "title": "Finance Exam 09"
                },
                9: {
                    "link": "/exams/Finance/Finance_3_Split_Master.php",
                    "title": "Finance Exam 10"
                },
                10: {
                    "link": "/exams/Finance/Finance_4_Split_Master.php",
                    "title": "Finance Exam 11"
                },
                11: {
                    "link": "/exams/Finance/Finance_5_Split_Master.php",
                    "title": "Finance Exam 12"
                },
                12: {
                    "link": "/exams/Finance/Finance_6_Split_Master.php",
                    "title": "Finance Exam 13"
                }
            }
        },
        "Hospitality": {
            "cluster": "Hospitality",
            "tests": {
                0: {
                    "link": "/exams/Hospitality/Hospitality_1_Whole_Master.php",
                    "title": "Hospitality Exam 01"
                },
                1: {
                    "link": "/exams/Hospitality/Hospitality_2_Whole_Master.php",
                    "title": "Hospitality Exam 02"
                },
                2: {
                    "link": "/exams/Hospitality/Hospitality_3_Whole_Master.php",
                    "title": "Hospitality Exam 03"
                },
                3: {
                    "link": "/exams/Hospitality/Hospitality_4_Whole_Master.php",
                    "title": "Hospitality Exam 04"
                },
                4: {
                    "link": "/exams/Hospitality/Hospitality_5_Whole_Master.php",
                    "title": "Hospitality Exam 05"
                },
                5: {
                    "link": "/exams/Hospitality/Hospitality_6_Whole_Master.php",
                    "title": "Hospitality Exam 06"
                },
                6: {
                    "link": "/exams/Hospitality/Hospitality_7_Whole_Master.php",
                    "title": "Hospitality Exam 07"
                },
                7: {
                    "link": "/exams/Hospitality/Hospitality_1_Split_Master.php",
                    "title": "Hospitality Exam 08"
                },
                8: {
                    "link": "/exams/Hospitality/Hospitality_2_Split_Master.php",
                    "title": "Hospitality Exam 09"
                },
                9: {
                    "link": "/exams/Hospitality/Hospitality_3_Split_Master.php",
                    "title": "Hospitality Exam 10"
                },
                10: {
                    "link": "/exams/Hospitality/Hospitality_4_Split_Master.php",
                    "title": "Hospitality Exam 11"
                },
                11: {
                    "link": "/exams/Hospitality/Hospitality_5_Split_Master.php",
                    "title": "Hospitality Exam 12"
                },
                12: {
                    "link": "/exams/Hospitality/Hospitality_6_Split_Master.php",
                    "title": "Hospitality Exam 13"
                }
            }
        },
        "Marketing": {
            "cluster": "Marketing",
            "tests": {
                0: {
                    "link": "/exams/Marketing/Marketing_1_Whole_Master.php",
                    "title": "Marketing Exam 01"
                },
                1: {
                    "link": "/exams/Marketing/Marketing_2_Whole_Master.php",
                    "title": "Marketing Exam 02"
                },
                2: {
                    "link": "/exams/Marketing/Marketing_3_Whole_Master.php",
                    "title": "Marketing Exam 03"
                },
                3: {
                    "link": "/exams/Marketing/Marketing_4_Whole_Master.php",
                    "title": "Marketing Exam 04"
                },
                4: {
                    "link": "/exams/Marketing/Marketing_5_Whole_Master.php",
                    "title": "Marketing Exam 05"
                },
                5: {
                    "link": "/exams/Marketing/Marketing_6_Whole_Master.php",
                    "title": "Marketing Exam 06"
                },
                6: {
                    "link": "/exams/Marketing/Marketing_7_Whole_Master.php",
                    "title": "Marketing Exam 07"
                },
                7: {
                    "link": "/exams/Marketing/Marketing_1_Split_Master.php",
                    "title": "Marketing Exam 08"
                },
                8: {
                    "link": "/exams/Marketing/Marketing_2_Split_Master.php",
                    "title": "Marketing Exam 09"
                },
                9: {
                    "link": "/exams/Marketing/Marketing_3_Split_Master.php",
                    "title": "Marketing Exam 10"
                },
                10: {
                    "link": "/exams/Marketing/Marketing_4_Split_Master.php",
                    "title": "Marketing Exam 11"
                },
                11: {
                    "link": "/exams/Marketing/Marketing_5_Split_Master.php",
                    "title": "Marketing Exam 12"
                },
                12: {
                    "link": "/exams/Marketing/Marketing_6_Split_Master.php",
                    "title": "Marketing Exam 13"
                }
            }
        },
        "Business-Admin": {
            "cluster": "Business Admin",
            "tests": {
                0: {
                    "link": "/exams/Business-Admin/Business-Admin_1_Whole_Master.php",
                    "title": "Business Admin Exam 01"
                },
                1: {
                    "link": "/exams/Business-Admin/Business-Admin_2_Whole_Master.php",
                    "title": "Business Admin Exam 02"
                },
                2: {
                    "link": "/exams/Business-Admin/Business-Admin_3_Whole_Master.php",
                    "title": "Business Admin Exam 03"
                },
                3: {
                    "link": "/exams/Business-Admin/Business-Admin_4_Whole_Master.php",
                    "title": "Business Admin Exam 04"
                },
                4: {
                    "link": "/exams/Business-Admin/Business-Admin_5_Whole_Master.php",
                    "title": "Business Admin Exam 05"
                },
                5: {
                    "link": "/exams/Business-Admin/Business-Admin_6_Whole_Master.php",
                    "title": "Business Admin Exam 06"
                },
                6: {
                    "link": "/exams/Business-Admin/Business-Admin_7_Whole_Master.php",
                    "title": "Business Admin Exam 07"
                },
                7: {
                    "link": "/exams/Business-Admin/Business-Admin_1_Split_Master.php",
                    "title": "Business Admin Exam 08"
                },
                8: {
                    "link": "/exams/Business-Admin/Business-Admin_2_Split_Master.php",
                    "title": "Business Admin Exam 09"
                },
                9: {
                    "link": "/exams/Business-Admin/Business-Admin_3_Split_Master.php",
                    "title": "Business Admin Exam 10"
                },
                10: {
                    "link": "/exams/Business-Admin/Business-Admin_4_Split_Master.php",
                    "title": "Business Admin Exam 11"
                },
                11: {
                    "link": "/exams/Business-Admin/Business-Admin_5_Split_Master.php",
                    "title": "Business Admin Exam 12"
                },
                12: {
                    "link": "/exams/Business-Admin/Business-Admin_6_Split_Master.php",
                    "title": "Business Admin Exam 13"
                }
            }
        }
    }

var initExamTable = function(){
    document.getElementById("table-title").innerHTML = "Select Your Cluster";

    $table = $('#table');

    $table.html('');
    $('.breadcrumb td').css('display', 'none');

    var row1 = $('<tr class="tbody"/>').html("<td class=\"clickable_row\" id='Principles' >Principles</td>");
    $table.append(row1);
    var row2 = $('<tr class="tbody"/>').html("<td class=\"clickable_row\" id='Marketing' >Marketing</td>");
    $table.append(row2);
    var row3 = $('<tr class="tbody"/>').html("<td class=\"clickable_row\" id='Finance' >Finance</td>");
    $table.append(row3);
    var row4 = $('<tr class="tbody"/>').html("<td class=\"clickable_row\" id='Hospitality' >Hospitality</td>");
    $table.append(row4);
    var row5 = $('<tr class="tbody"/>').html("<td class=\"clickable_row\" id='Business-Admin' >Business Admin</td>");
    $table.append(row5);

    $('.clickable_row').on('click', function(e){
      var $elem = $(e.currentTarget);
      var cluster = $elem.attr('id');

      $table.html('');
      $('#clusterClicked').html('All Exams');
      $('.breadcrumb td').css('display', 'inline');
      document.getElementById("table-title").innerHTML = exams[cluster]["cluster"] + " Exams";

      var currentExams = exams[cluster]["tests"];

      for (var i in currentExams){
        var row = $('<tr class="tbody"/>').html("<td class='clickable_exam' id='" + i + "'>" + currentExams[i]["title"]  + "</td>");
        $table.append(row);
      }

      $('.clickable_exam').on('click', function(e){
        var $elem2 = $(e.currentTarget);
        var examClicked = $elem2.attr('id');
        window.open(currentExams[examClicked]["link"], "_blank");
      });

      $('#clusterClicked').on('click', function(){
        initExamTable();
      });

    });
  }

initExamTable();

})
