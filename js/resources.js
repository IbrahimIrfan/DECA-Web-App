$(document).on('ready', function() {

    var events = {
      "Principle": {},
      "Team Decision": {},
      "Individual": {}
    }

    document.getElementById("table-title").innerHTML = "Select your event type";

    var EVENT_TYPE_KEY = 'event-type',
            CLUSTER_KEY = 'cluster',
            EVENTS_KEY = 'event';

    var redrawTable = function(conf) {
        var datum = conf.datum;
        //alert(datum);

        var $table = $('#table');
        var $tableHeading = $('#table-heading');

        /*  var $deptBreadcrumb = $('.activeDepartment'),
              $allDeptsBreadcrumb = $('.allDepartments'),
              $classNameBreadcrumb = $('.classNameBreadcrumb');
          $('.breadcrumb li').removeClass('active') */
        if (datum === EVENT_TYPE_KEY) {
            $tableHeading.html("Select Your Department / College");
            /*  $allDeptsBreadcrumb.addClass('active');
              $deptBreadcrumb.find('a').html(''); */
            $table.html('');
            //    $classNameBreadcrumb.html('');

            for (i = 0; i < Object.keys(departments).length; i++) {
                var dept = departments[i];
                var row = $('<tr class="tbody"/>').html("<td class=\"clickable_row\" " +
                    'datum="' + i + '" ' +
                    "id= '_" + i + "'>" + dept.Name + "</td>");
                $table.append(row);
            }
            $('.clickable_row').on('click', function(e) {
                var $elem = $(e.currentTarget);
                var deptId = parseInt($elem.attr('datum'));
                redrawTable({
                    datum: CLUSTER_KEY,
                    deptId: deptId
                });
            });

        } else if (datum === CLUSTER_KEY) {
            //var $el = $(e.currentTarget);
            //var elId = $el.attr('id').substr(1);
            var department = departments[conf.deptId];
            /*  $deptBreadcrumb.addClass('active');
              var $bc = $('.activeDepartment a');
              $classNameBreadcrumb.html('');
              $bc.html(department.Name);
              $bc.attr('datum', CLUSTER_KEY);
              $bc.attr('deptId', conf.deptId); */

            document.getElementById('table_heading').innerHTML = department.Name + " Courses";
            $table.html('');


            var row = $('<tr class="tbody"/>').html("<td class=\"clickable_class\" " +
                'datum="' + course.ID + '" ' +
                "id =\"_" + course.ID + "\"> " +
                course.Name + "</td>");
            $table.append(row);

            $('.clickable_class').on('click', function(e) {
                var $el = $(e.currentTarget);
                var elId = $el.attr('id').substr(1);
                redrawTable({
                    datum: EVENTS_KEY,
                    classId: elId
                });
                //var course = null;
                //for (key in department.courses) {
                //    if (String(key) == elId) {
                //        console.log(key, elId);
                //        course = department.courses[key];
                //        break;
                //    }
                //}
            });
        });
} else if (datum === EVENTS_KEY) {
    $table.html('');
    var courseId = conf.classId;


    document.getElementById('table_heading').innerHTML = course.Name + " Material";
    /*    $classNameBreadcrumb.html(course.Name);
        $classNameBreadcrumb.addClass('active'); */

    $table.append('<tr class="theader"><td>Title</td>' +
        '<td>Submitter</td><td>Submitted On</td><td># of Files</td></tr>');
    for (var idx in r) {
        var material = r[idx];
        var title = material.title;
        if (material.title.length === 0)
            title = "Untitled Document"
        var row = $('<tr class="tbody"><td class="materialTrigger" materialId="' + material.attachments[0].MaterialID + '">' + title + '</td>' +
            '<td><a href="/profile/?uid=' + material.user_id +
            '">' + material.user_name + '</a></td>' +
            '<td> ' + material.created_on + ' </td><td>' + material.attachments.length + '</td></tr>');
        $table.append(row);
    }
    $('.materialTrigger').on('click', function(e) {
        var materialId = $(e.currentTarget).attr("materialId");
        var material = r[materialId];

    });

}
};



})
