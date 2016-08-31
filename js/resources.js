$(document).on('ready', function() {

    var events = {
        "Principles": {
            0: {
                "name": "Business Management and Administration",
                "events": {
                    "PBM": {
                        "name": "Principles of Business Management and Administration",
                        "code": "PBM",
                        "type": "Principles",
                        "desc": "The content interviews will use language associated with careers in Administrative Services, Business Information Management, General Management, Human Resources Management, and Operations Management.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBTXBOZ0VKTUN5OFE&usp=sharing"
                    }
                }
            },
            1: {
                "name": "Finance",
                "events": {
                    "PFN": {
                        "name": "Principles of Finance",
                        "code": "PFN",
                        "type": "Principles",
                        "desc": "The content interviews will use language associated with careers in Accounting, Banking Services, Business Finance, Insurance and Securities, and Investments.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBUGpjdjV6Mk9teWM&usp=sharing"
                    }
                }
            },
            2: {
                "name": "Hospitality and Tourism",
                "events": {
                    "PHT": {
                        "name": "Principles of Hopsitality and Tourism",
                        "code": "PHT",
                        "type": "Principles",
                        "desc": "The content interviews will use language associated with careers in Hotels, Restaurants, and Tourism and Travel.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBOHVnZUwta2hMNUU&usp=sharing"
                    }
                }
            },
            3: {
                "name": "Marketing",
                "events": {
                    "PMK": {
                        "name": "Principles of Marketing",
                        "code": "PMK",
                        "type": "Principles",
                        "desc": "The content interviews will use language associated with careers in Marketing Communications, Marketing Management, Marketing Research, Merchandising and Professional Selling.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBM0pYbk1hVFQzSWs&usp=sharing"
                    }
                }
            }
        },
        "Team Decision": {
            0: {
                "name": "Business Management and Administration",
                "events": {
                    "BLTDM": {
                        "name": "Business Law and Ethics",
                        "code": "BLTDM",
                        "type": "Team Decision",
                        "desc": "For the purposes of this event, business law is U.S. law and will include contracts, product liability, employment and types of business ownership. The ethics component involves evaluating competing social values that may reasonably be argued from either side.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBcGt5ei1xdXQtQzg&usp=sharing"
                    }
                }
            },
            1: {
                "name": "Finance",
                "events": {
                    "FTDM": {
                        "name": "Financial Services",
                        "code": "FTDM",
                        "type": "Team Decision",
                        "desc": "Financial services refer to services offered in the finance industry by financial institutions. Concepts include understanding the source and purpose of financial statements, the impact of management decisions on statements, and the analysis and interpretation of data for planning purposes.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBeUNfR1luemlXRG8&usp=sharing"
                    }
                }
            },
            2: {
                "name": "Hospitality and Tourism",
                "events": {
                    "HTDM": {
                        "name": "Hopsitality Services",
                        "code": "HTDM",
                        "type": "Team Decision",
                        "desc": "Hospitality services include marketing and management functions and tasks that can be applied in hotels, motels, lodging services, related convention services, and related food and beverage services.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBZnZ1TXc4OHl4SUE&usp=sharing"
                    },
                    "TTDM": {
                        "name": "Travel and Tourism",
                        "code": "TTDM",
                        "type": "Team Decision",
                        "desc": "Travel and tourism includes marketing and management functions and tasks that can be applied in enterprises engaged in passenger transportation, travel service, attracting and serving the traveling public, arranging tours or acting as independent ticket agencies, and other services incidental to the travel or tourism industry.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBYzBPUExERE80SnM&usp=sharing"
                    }
                }
            },
            3: {
                "name": "Marketing",
                "events": {
                    "BTDM": {
                        "name": "Buying and Merchandising",
                        "code": "BTDM",
                        "type": "Team Decision",
                        "desc": "Employees in buying and merchandising positions get the product into the hands of the customer. This process includes forecasting, planning, buying, displaying, selling and providing customer service.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBeExiTk11Q09tRlk&usp=sharing"
                    },
                    "MTDM": {
                        "name": "Marketing Communications",
                        "code": "MTDM",
                        "type": "Team Decision",
                        "desc": "Marketing communications are marketing functions and tasks that inform, remind, and/or persuade a target market of ideas, experiences, goods/services, and/or images.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBc3VqaEU2QUROVUU&usp=sharing"
                    },
                    "STDM": {
                        "name": "Sports and Entertainment Marketing",
                        "code": "STDM",
                        "type": "Team Decision",
                        "desc": "Sports and entertainment marketing includes marketing functions and tasks that can be applied in amateur or professional sports or sporting events, entertainment or entertainment events, selling or renting of supplies and equipment (other than vehicles) used for recreational or sporting purposes, products and services related to hobbies or cultural events, or businesses primarily engaged in satisfying the desire to make productive or enjoyable use of leisure time.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBVTJQQ0c0WWxHNTQ&usp=sharing"
                    }
                }
            }
        },
        "Individual": {
            0: {
                "name": "Business Management and Administration",
                "events": {
                    "HRM": {
                        "name": "Human Resources Management",
                        "code": "HRM",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform management functions and tasks focusing on staffing, recruitment, selection, training, performance appraisal, compensation and safety training.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBbC11aGQ5UVg0WDQ&usp=sharing"
                    }
                }
            },
            1: {
                "name": "Finance",
                "events": {
                    "ACT": {
                        "name": "Accounting Applications",
                        "code": "ACT",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform management functions and tasks focusing on the application of financial data to business planning, including collection and organization of data, development and use of reports, and analysis of data to make business decisions. Concepts include understanding the source and purpose of financial statements, the impact of management decisions on statements, and the analysis and interpretation of data for planning purposes.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBUGR4R1pNRjczdkE&usp=sharing"
                    },
                    "BFS": {
                        "name": "Business Finance",
                        "code": "BFS",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform management functions and tasks focusing on high-level financial and business planning, including collection and organization of data, development and use of reports, and analysis of data to make business decisions. Concepts include understanding the source and purpose of financial statements, the impact of management decisions on statements, and the analysis and interpretation of data for corporate planning purposes.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBRVI3Uzc2cGlrY0E&usp=sharing"
                    },
                    "PFL": {
                        "name": "Personal Financial Literacy",
                        "code": "PFL",
                        "type": "Individual",
                        "desc": "Students will be assessed on their knowledge of areas such as: financial responsibility and decision making, income and careers, planning and money management, credit and debt, risk management and insurance, and saving and investing.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBMU5Ma3hZNVVreHc&usp=sharing"
                    }
                }
            },
            2: {
                "name": "Hospitality and Tourism",
                "events": {
                    "HLM": {
                        "name": "Hotel and lodging Management",
                        "code": "HLM",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform marketing and management functions and tasks in hotels, motels, lodging services, convention services, and food and beverage services.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBaTRrMnlBSkhKamc&usp=sharing"
                    },
                    "QSRM": {
                        "name": "Quick Service Restaurant Management",
                        "code": "QSRM",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform marketing and management functions and tasks in retail establishments, wholesale establishments and manufacturing firms primarily engaged in the quick-serve restaurant industry.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBRkxHZFdQSVVJMGs&usp=sharing"
                    },
                    "RFSM": {
                        "name": "Restaurant and Food Service Restaurant",
                        "code": "RFSM",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform marketing and management functions and tasks in a full-service restaurant or a food-service business.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBTlQzdjN3UU5xajg&usp=sharing"
                    }
                }
            },
            3: {
                "name": "Marketing",
                "events": {
                    "AAM": {
                        "name": "Apparel and Accessories Marketing",
                        "code": "AAM",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform marketing and management functions and tasks in retail establishments, wholesale establishments and/or manufacturing firms primarily engaged in the marketing of clothing and related articles for personal wear and adornment.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBR0dVbDJaTThkNDQ&usp=sharing"
                    },
                    "AASM": {
                        "name": "Automative Services Marketing",
                        "code": "AASM",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform marketing and management functions and tasks related to auto dealers, service stations and related businesses or auto parts stores.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBTjVESlhCZlZTQ2c&usp=sharing"
                    },
                    "BSM": {
                        "name": "Business Services Marketing",
                        "code": "BSM",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform marketing functions and tasks involved in providing services to businesses on a fee or contract basis or providing services to consumers.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBQkVUeU9td1I5OFE&usp=sharing"
                    },
                    "FMS": {
                        "name": "Food Marketing",
                        "code": "FMS",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform marketing and management functions and tasks in retail establishments, wholesale establishments and manufacturing firms resulting in the sale of food.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBaUN5VExFMTd4WHM&usp=sharing"
                    },
                    "MMS": {
                        "name": "Marketing Management",
                        "code": "MMS",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform marketing and management functions and tasks that can be applied broadly in a non-retail marketing environment.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBUlhudHR4THBxa1U&usp=sharing"
                    },
                    "RMS": {
                        "name": "Retail Merchandising",
                        "code": "RMS",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform marketing and management functions and tasks that can be applied in any retail establishment.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBTlFKbzB2NGtPQnM&usp=sharing"
                    },
                    "SEM": {
                        "name": "Sports and Entertainment Marketing",
                        "code": "SEM",
                        "type": "Individual",
                        "desc": "Students will be challenged to perform marketing and management functions and tasks related to amateur or professional sports or sporting events, entertainment or entertainment events, selling or renting of supplies and equipment (other than vehicles) used for recreational or sporting purposes, products and services related to hobbies or cultural events, or businesses primarily engaged in satisfying the desire to make productive or enjoyable use of leisure time.",
                        "res": "https://drive.google.com/folderview?id=0B79AcfigTjIBdVM0STlXTUtSdmc&usp=sharing"
                    }
                }
            }
        }
    };

    document.getElementById("table-title").innerHTML = "Select Your Event Type";

    var EVENT_TYPE_KEY = 'event-type',
        CLUSTER_KEY = 'cluster',
        EVENTS_KEY = 'event';

    var redrawTable = function(conf) {
        var datum = conf.datum;

        var id = conf.id;
        var currentCluster = conf.cluster;

        var currentType = conf.type;
        console.log(conf);

        var $table = $('#table');
        var $tableHeading = $('#table-title');
        var $allTypes = $('#allTypes');
        var $type = $('#type');
        var $cluster = $('#cluster');
        var $slash1 = $("#slash1");
        var $slash2 = $("#slash2");

        if (datum === EVENT_TYPE_KEY) {
            $tableHeading.html("Select Your Event Type");

            $allTypes.html('All Types');
            $type.html('');
            $slash1.attr("style", "display: none;");
            $cluster.html('');
            $slash2.attr("style", "display: none;");

            $table.html('');

            var row1 = $('<tr class="tbody"/>').html("<td class=\"clickable_row\" id='Principles' >Principles</td>");
            $table.append(row1);
            var row2 = $('<tr class="tbody"/>').html("<td class=\"clickable_row\" id='Team Decision' >Team</td>");
            $table.append(row2);
            var row3 = $('<tr class="tbody"/>').html("<td class=\"clickable_row\" id='Individual' >Individual</td>");
            $table.append(row3);

            $('.clickable_row').on('click', function(e) {
                var $elem = $(e.currentTarget);
                var index = $elem.attr('id');
                redrawTable({
                    datum: CLUSTER_KEY,
                    id: index,
                    cluster: null,
                    type: index,
                });
            });

        } else if (datum === CLUSTER_KEY) {
            var type = events[id];

            $slash1.attr("style", "display: block;");
            $type.html(currentType);

            $cluster.html('');
            $slash2.attr("style", "display: none;");

            $tableHeading.html(currentType + " Clusters");
            $table.html('');

            for (var i in Object.keys(type)) {
                var row = $('<tr class="tbody"/>').html("<td class=\"clickable_class\" id =\"" + i + "\"> " +
                    type[i].name + "</td>");
                $table.append(row);
            }

            $('.clickable_class').on('click', function(e) {
                var $el = $(e.currentTarget);
                var clusterClicked = type[parseInt($el.attr('id'))];
                redrawTable({
                    datum: EVENTS_KEY,
                    id: 0,
                    cluster: clusterClicked,
                    type: currentType
                });
            });

            $allTypes.on('click', function() {
                redrawTable({
                    datum: EVENT_TYPE_KEY,
                    id: 0
                });
            });
        } else if (datum === EVENTS_KEY) {
            $table.html('');

            $slash2.attr("style", "display: block;");
            $cluster.html(currentCluster.name);

            $tableHeading.html(currentCluster.name + " " + currentType + " Events");

            for (var idx in currentCluster.events) {
                var activeEvent = currentCluster.events[idx];

                var row = $('<tr class="tbody"><td class="eventTrigger" code=\"' + activeEvent.code + '\">' + activeEvent.name + ' (' + activeEvent.code + ')</td></tr>');
                $table.append(row);
            }
            $('.eventTrigger').on('click', function(e) {
                var eventCode = $(e.currentTarget).attr("code");

                for (var idx in currentCluster.events) {
                    if (currentCluster.events[idx].code == eventCode) {
                        var currentEvent = currentCluster.events[idx];
                    }
                }
                $.fancybox({
                    href: '#event_popup',
                    width: 700,
                    autoDimensions: false,
                    autoSize: false,
                    afterLoad: function() {
                        this.inner.prepend('<h1 id=\"popup_header\">' + currentEvent.name + ' (' + currentEvent.code + ')</h1>');
                        this.content = "";
                        if (currentCluster.name == "Finance") {
                            this.content += "<img id='clusterpic' src='img/finance.png'/>";
                        } else if (currentCluster.name == "Hospitality and Tourism") {
                            this.content += "<img id='clusterpic' src='img/hosp.png'/>";
                        } else if (currentCluster.name == "Marketing") {
                            this.content += "<img id='clusterpic' src='img/marketing.png'/>";
                        } else {
                            this.content += "<img id='clusterpic' src='img/b-admin.png'/>";
                        }
                        this.content += "<h5>" + currentEvent.desc + "</h5>";
                        this.content += "<div id='res'><a target='_blank' href='" + currentEvent.res + "'><img id='folder' src='img/folder.png' width='50'/><p id='res-text'>Resources</p></a></div>";

                        if (currentEvent.code == "PFL") {
                          this.content += "<h5 style='color: red;'>*This event was introduced two years ago and therefore resources are extremely limited in terms of past events.</h5>";
                            this.content += "<h5>Principles of Finance MC exam (100 Q's)</h5>";
                        } else if (currentEvent.type !== "Principles") {
                            this.content += "<h5>Cluster-wide " + currentCluster.name + " MC exam (100 Q's)</h5>";
                        }

                        if (currentEvent.type == "Principles") {
                            this.content += "<h5>Business Admin Core MC exam (100 Q's)</h5>";
                            this.content += "<h5>1 Content Interview</h5>";
                            this.content += "<h5>Preparation Time: 10 min</h5>";
                            this.content += "<h5>Interview Time: 10 min</h5>";
                            this.content += "<h5>Only allowed for (and highly recommended to) first time DECA students</h5>";
                        } else if (currentEvent.type == "Individual") {
                            this.content += "<h5>1 Case Study</h5>";
                            this.content += "<h5>Preparation Time: 10 min</h5>";
                            this.content += "<h5>Interview Time: 10 min</h5>";
                            this.content += "<h5>5 Performance Indicators on Case Study</h5>";
                        } else {
                            this.content += "<h5>1 Case Study</h5>";
                            this.content += "<h5>Preparation Time: 30 min</h5>";
                            this.content += "<h5>Interview Time: 15 min</h5>";
                            this.content += "<h5>Teams of 2</h5>";
                            this.content += "<h5>7 Performance Indicators on Case Study</h5>";
                        }
                    }
                });
            });
            $allTypes.on('click', function() {
                redrawTable({
                    datum: EVENT_TYPE_KEY,
                    id: 0
                });
            });
            $type.on('click', function() {
                redrawTable({
                    datum: CLUSTER_KEY,
                    id: currentType,
                    cluster: null,
                    type: currentType
                });
            });
        }
    };

    redrawTable({
        datum: EVENT_TYPE_KEY,
        id: 0
    });

})
