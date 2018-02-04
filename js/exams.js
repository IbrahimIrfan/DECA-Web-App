/*
 * Handle functionality for the dynamic table for exams
 */

$(document).on('ready', function() {
	// list of all exams with links
	var exams = {
		"Principles": {
			"cluster": "Principles",
			"tests": {
				0: {
					"link": "/Principles_1_Whole_Master.php",
					"title": "Principles Exam 01"
				},
				1: {
					"link": "/Principles_2_Whole_Master.php",
					"title": "Principles Exam 02"
				},
				2: {
					"link": "/Principles_3_Whole_Master.php",
					"title": "Principles Exam 03"
				},
				3: {
					"link": "/Principles_4_Whole_Master.php",
					"title": "Principles Exam 04"
				},
				4: {
					"link": "/Principles_5_Whole_Master.php",
					"title": "Principles Exam 05"
				},
				5: {
					"link": "/Principles_6_Whole_Master.php",
					"title": "Principles Exam 06"
				},
				6: {
					"link": "/Principles_1_Split_Master.php",
					"title": "Principles Exam 07"
				},
				7: {
					"link": "/Principles_2_Split_Master.php",
					"title": "Principles Exam 08"
				},
				8: {
					"link": "/Principles_3_Split_Master.php",
					"title": "Principles Exam 09"
				},
				9: {
					"link": "/Principles_4_Split_Master.php",
					"title": "Principles Exam 10"
				},
				10: {
					"link": "/Principles_5_Split_Master.php",
					"title": "Principles Exam 11"
				},
				11: {
					"link": "/Principles_6_Split_Master.php",
					"title": "Principles Exam 12"
				},
				12: {
					"link": "/Principles_7_Split_Master.php",
					"title": "Principles Exam 13"
				}
			}
		},
		"Finance": {
			"cluster": "Finance",
			"tests": {
				0: {
					"link": "/Finance_1_Whole_Master.php",
					"title": "Finance Exam 01"
				},
				1: {
					"link": "/Finance_2_Whole_Master.php",
					"title": "Finance Exam 02"
				},
				2: {
					"link": "/Finance_3_Whole_Master.php",
					"title": "Finance Exam 03"
				},
				3: {
					"link": "/Finance_4_Whole_Master.php",
					"title": "Finance Exam 04"
				},
				4: {
					"link": "/Finance_5_Whole_Master.php",
					"title": "Finance Exam 05"
				},
				5: {
					"link": "/Finance_1_Split_Master.php",
					"title": "Finance Exam 06"
				},
				6: {
					"link": "/Finance_2_Split_Master.php",
					"title": "Finance Exam 07"
				},
				7: {
					"link": "/Finance_3_Split_Master.php",
					"title": "Finance Exam 08"
				},
				8: {
					"link": "/Finance_4_Split_Master.php",
					"title": "Finance Exam 09"
				}
			}
		},
		"Hospitality": {
			"cluster": "Hospitality",
			"tests": {
				0: {
					"link": "/Hospitality_1_Whole_Master.php",
					"title": "Hospitality Exam 01"
				},
				1: {
					"link": "/Hospitality_2_Whole_Master.php",
					"title": "Hospitality Exam 02"
				},
				2: {
					"link": "/Hospitality_3_Whole_Master.php",
					"title": "Hospitality Exam 03"
				},
				3: {
					"link": "/Hospitality_1_Split_Master.php",
					"title": "Hospitality Exam 04"
				},
				4: {
					"link": "/Hospitality_2_Split_Master.php",
					"title": "Hospitality Exam 05"
				},
				5: {
					"link": "/Hospitality_3_Split_Master.php",
					"title": "Hospitality Exam 06"
				},
				6: {
					"link": "/Hospitality_4_Split_Master.php",
					"title": "Hospitality Exam 07"
				}
			}
		},
		"Marketing": {
			"cluster": "Marketing",
			"tests": {
				0: {
					"link": "/Marketing_1_Whole_Master.php",
					"title": "Marketing Exam 01"
				},
				1: {
					"link": "/Marketing_2_Whole_Master.php",
					"title": "Marketing Exam 02"
				},
				2: {
					"link": "/Marketing_3_Whole_Master.php",
					"title": "Marketing Exam 03"
				},
				3: {
					"link": "/Marketing_4_Whole_Master.php",
					"title": "Marketing Exam 04"
				},
				4: {
					"link": "/Marketing_5_Whole_Master.php",
					"title": "Marketing Exam 05"
				},
				5: {
					"link": "/Marketing_1_Split_Master.php",
					"title": "Marketing Exam 06"
				},
				6: {
					"link": "/Marketing_2_Split_Master.php",
					"title": "Marketing Exam 07"
				},
				7: {
					"link": "/Marketing_3_Split_Master.php",
					"title": "Marketing Exam 08"
				},
				8: {
					"link": "/Marketing_4_Split_Master.php",
					"title": "Marketing Exam 09"
				}
			}
		},
		"Business-Admin": {
			"cluster": "Business Admin",
			"tests": {
				0: {
					"link": "/Business-Admin_1_Whole_Master.php",
					"title": "Business Admin Exam 01"
				},
				1: {
					"link": "/Business-Admin_2_Whole_Master.php",
					"title": "Business Admin Exam 02"
				},
				2: {
					"link": "/Business-Admin_3_Whole_Master.php",
					"title": "Business Admin Exam 03"
				},
				3: {
					"link": "/Business-Admin_4_Whole_Master.php",
					"title": "Business Admin Exam 04"
				},
				4: {
					"link": "/Business-Admin_1_Split_Master.php",
					"title": "Business Admin Exam 05"
				},
				5: {
					"link": "/Business-Admin_2_Split_Master.php",
					"title": "Business Admin Exam 06"
				},
				6: {
					"link": "/Business-Admin_3_Split_Master.php",
					"title": "Business Admin Exam 07"
				},
				7: {
					"link": "/Business-Admin_4_Split_Master.php",
					"title": "Business Admin Exam 08"
				},
				8: {
					"link": "/Business-Admin_5_Split_Master.php",
					"title": "Business Admin Exam 09"
				},
				9: {
					"link": "/Business-Admin_6_Split_Master.php",
					"title": "Business Admin Exam 10"
				}
			}
		}
	}

	// table functionality
	var initExamTable = function(){
		// init title and breadcrumb
		document.getElementById("table-title").innerHTML = "Select Your Cluster";
		$table = $('#table');
		$table.html('');
		$('.breadcrumb td').css('display', 'none');

		// append respective rows
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

		// user clicks on a cluster
		$('.clickable_row').on('click', function(e){
			// display breadcrumb and titles
			var $elem = $(e.currentTarget);
			var cluster = $elem.attr('id');
			$table.html('');
			$('#clusterClicked').html('All Exams');
			$('.breadcrumb td').css('display', 'inline');
			document.getElementById("table-title").innerHTML = exams[cluster]["cluster"] + " Exams";

			// fill rows with respective exams
			var currentExams = exams[cluster]["tests"];
			for (var i in currentExams){
				var row = $('<tr class="tbody"/>').html("<td class='clickable_exam' id='" + i + "'>" + currentExams[i]["title"]  + "</td>");
				$table.append(row);
			}

			// open exam in new window on click
			$('.clickable_exam').on('click', function(e){
				var $elem2 = $(e.currentTarget);
				var examClicked = $elem2.attr('id');
				window.open(currentExams[examClicked]["link"], "_blank");
			});

			// reset table if breadcrumb clicked
			$('#clusterClicked').on('click', function(){
				initExamTable();
			});

		});
	}

	initExamTable();

})
