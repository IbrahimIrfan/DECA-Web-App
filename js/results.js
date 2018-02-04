/*
 * Calculate and display scores from previous competition
 */

$(document).on('ready', function() {
	var parseScores = function() {
		$.get("/js/ftdm.txt", function(data) {
			var line = data.split(" ");
			var scores = [] // keep track of scores

			var eventName = $('#eventInput').val();

			// get the scores and push to array
			for (i = 0; i < line.length; i++) {
				if (line[i].toUpperCase() == eventName.toUpperCase()) {
					if (line[i + 6] == 'Hamilton' || line[i + 5] == 'Hamilton') {
						if (parseInt(line[i + 1]) > 15) {
							scores.push([parseInt(line[i + 1]) + parseInt(line[i + 2]), parseInt(line[i + 1]), parseInt(line[i + 2]), line[i]]);
						} else {
							scores.push([parseInt(line[i + 2]) + parseInt(line[i + 3]), parseInt(line[i + 2]), parseInt(line[i + 3]), line[i]]);
						}
					}
				}
			}

			// helper function
			function sortNumber(a, b) {
				return a[0] - b[0];
			}

			scores.sort(sortNumber);

			// populate table with scores
			if (scores.length == 0) {
				$('#resultsHeading').html('No results found.');
				$('#resultsTable').html('');
			} else {
				$('#resultsHeading').html('Top scores (ordered by overall score)');
				$('#resultsTable').html('<tr><td>Overall</td><td>Exam</td><td>Case Study</td></tr>');
				for (i = scores.length - 1; i > -1; i--) {
					$('#resultsTable').append('<tr>' + '<td>' + scores[i][0] + '</td>' + '<td>' + scores[i][1] + '</td>' + '<td>' + scores[i][2] + '</td>' + '</tr>');
				}
			}
		});
	}

	// handle enter keypress
	document.getElementById('eventInput').onkeydown = function(e) {
		if (e.keyCode == 13) {
			parseScores();
		}
	};

	// handle button click
	$('#submitEvent').on('click', function() {
		parseScores();
	});

});
