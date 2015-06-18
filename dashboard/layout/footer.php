
                <footer>
                    <div id="footer">Copyright &copy; 2015 <a href="#">Ari Munandar | arimunandar.dev@gmail.com</a> Made with <i class="fontello-heart-1 text-green"></i></div>

                </footer>
            </div>
            <a class="exit-off-canvas"></a>
            <!-- End of Right Menu -->
        </div>
        <!-- end paper bg -->
    </div>
    <!-- end of off-canvas-wrap -->

    <!-- end of inner-wrap -->

    <!-- main javascript library -->
    <script type='text/javascript' src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type='text/javascript' src="assets/js/preloader-script.js"></script>
    <!-- foundation javascript -->
    <script type='text/javascript' src="assets/js/foundation.min.js"></script>
    <script type='text/javascript' src="assets/js/foundation/foundation.html#111111.js"></script>
    <!-- main edumix javascript -->
    <script type='text/javascript' src="assets/js/slimscroll/jquery.slimscroll.js"></script>
    <script type='text/javascript' src="assets/js/slicknav/jquery.slicknav.js"></script>
    <script type='text/javascript' src="assets/js/sliding-menu-fixed.js"></script>
    <!-- sliding menu javascript for all fixed menu -->
    <script type='text/javascript' src="assets/js/scriptbreaker-multiple-accordion-1.js"></script>
    <script type="text/javascript" src="assets/js/number/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/circle-progress/jquery.circliful.js"></script>
    <script type='text/javascript' src="assets/js/app.js"></script>
    <!-- additional javascript -->
    <script type='text/javascript' src="assets/js/number-progress-bar/jquery.velocity.min.js"></script>
    <script type='text/javascript' src="assets/js/number-progress-bar/number-pb.js"></script>
    <script type='text/javascript' src="assets/js/loader/loader.js"></script>
    <script type='text/javascript' src="assets/js/loader/demo.js"></script>
    <!-- FLOT CHARTS -->
    <script src="assets/js/flot/jquery.flot.js" type="text/javascript"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="assets/js/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="assets/js/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="assets/js/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/skycons/skycons.js"></script>

    <script type="text/javascript" src="assets/js/inputMask/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="assets/js/date-dropdown/jquery.date-dropdowns.min.js"></script>
    <script type="text/javascript" src="assets/js/date-dropdown/jquery.datetimepicker.js"></script>

    <script type='text/javascript' src="assets/js/dropZone/lib/dropzone.js"></script>

    <script src="assets/js/datatables/jquery.dataTables.js" type="text/javascript"></script>

    <script type="text/javascript">
    (function($) {
        "use strict";
        $('#example').dataTable({
            "order": [
                [3, "desc"]
            ]
        });
        $('#example1').dataTable({
            "order": [
                [3, "desc"]
            ]
        });
        $('#example2').dataTable({
            "order": [
                [3, "desc"]
            ]
        });
        $('#example3').dataTable({
            "order": [
                [3, "desc"]
            ]
        });
        $('#example4').dataTable({
            "order": [
                [3, "desc"]
            ]
        });
        $('#example5').dataTable({
            "order": [
                [3, "desc"]
            ]
        });
        $('#example6').dataTable({
            "order": [
                [3, "desc"]
            ]
        });
    })(jQuery);

    </script>
    <script type="text/javascript">
    (function($) {
        "use strict";
        Dropzone.options.myDropzone = {

            // Prevents Dropzone from uploading dropped files immediately
            autoProcessQueue: false,

            init: function() {
                var submitButton = document.querySelector("#submit-all")
                myDropzone = this; // closure

                submitButton.addEventListener("click", function() {
                    myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                });

                // You might want to show the submit button only when 
                // files are dropped here:
                this.on("addedfile", function() {
                    // Show submit button here and/or inform user to click it.
                });

            }
        };
    })(jQuery);
    </script>

    <script type="text/javascript">
    (function($) {
        "use strict";
        //dropdown date picker
        $("#date-dropdown").dateDropdowns();
        //default date & time picker

        $('#datetimepicker').datetimepicker({
            dayOfWeekStart: 1,
            lang: 'en',
            disabledDates: ['1986/01/08', '1986/01/09', '1986/01/10'],
            startDate: '1990/01/01'
        });
        //only tie picker
        $('#datetimepicker1').datetimepicker({
            datepicker: false,
            format: 'H:i',
            step: 5
        });
        //disable all weekend
        $('#datetimepicker9').datetimepicker({
            onGenerate: function(ct) {
                $(this).find('.xdsoft_date.xdsoft_weekend')
                    .addClass('xdsoft_disabled');
            },
            weekends: ['01.01.2014', '02.01.2014', '03.01.2014', '04.01.2014', '05.01.2014', '06.01.2014'],
            timepicker: false
        });
        //disable spesific date
        var dateToDisable = new Date();
        dateToDisable.setDate(dateToDisable.getDate() + 2);
        $('#datetimepicker11').datetimepicker({
            beforeShowDay: function(date) {
                if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
                    return [false, ""]
                }

                return [true, ""];
            }
        });

    })(jQuery);




    $(document).ready(function() {


        // MASKED INPUT
        (function($) {
            "use strict";
            $("#date").mask("99/99/9999", {
                completed: function() {
                    alert("Your birthday was: " + this.val());
                }
            });
            $("#phone").mask("(999) 999-9999");

            $("#money").mask("99.999.9999", {
                placeholder: "*"
            });
            $("#ssn").mask("99--AAA--9999", {
                placeholder: "*"
            });
        })(jQuery);

    });
    </script>

    <script type="text/javascript">
    $(function() {
        "use strict";


        //weather icons
        var icons = new Skycons({
                "stroke": 0.06,
                "color": "Gray",
                "cloudColor": "#666666",
                "sunColor": "#92cd18",
                "moonColor": "DodgerBlue",
                "rainColor": "RoyalBlue",
                "snowColor": "LightGray",
                "windColor": "LightSteelBlue",
                "fogColor": "#65C3DF"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play()

        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var line_data1 = [
            [1, 800],
            [2, 1500],
            [3, 900],
            [4, 1900],
            [5, 4000],
            [6, 2800],
            [7, 2500],
            [8, 700],
            [9, 1500],
            [10, 1000],
            [11, 2000],
            [12, 4300],
            [13, 1756],
            [14, 2000],
            [15, 1500],
            [16, 1900],
            [17, 1200],
            [18, 2800],
            [19, 3200],
            [20, 2190]
        ];
        var line_data2 = [
            [1, 1800],
            [2, 2900],
            [3, 1950],
            [4, 3450],
            [5, 7000],
            [6, 5300],
            [7, 4890],
            [8, 2300],
            [9, 3900],
            [10, 2900],
            [11, 4500],
            [12, 2200],
            [13, 1120],
            [14, 1459],
            [15, 1100],
            [16, 1189],
            [17, 300],
            [18, 1250],
            [19, 1705],
            [20, 959]

        ];


        $.plot("#line-chart", [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: "#E2E6EE",
                borderWidth: 1,
                tickColor: "#E2E6EE"
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            colors: ["#333333", "#cccccc"],
            lines: {
                fill: true,
            },
            yaxis: {
                show: false,
            },
            xaxis: {
                show: true
            }
        });
        //Initialize tooltip on hover
        $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
            position: "absolute",
            background: "#333333",
            padding: "3px 10px",
            color: "#ffffff",
            display: "none",
            opacity: 0.9
        }).appendTo("body");
        $("#line-chart").bind("plothover", function(event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                    .css({
                        top: item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200);
            } else {
                $("#line-chart-tooltip").hide();
            }

        });
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [
            [2, 88.0],
            [3, 93.3],
            [4, 102.0],
            [5, 108.5],
            [6, 115.7],
            [7, 115.6],
            [8, 124.6],
            [9, 130.3],
            [10, 134.3],
            [11, 141.4],
            [12, 146.5],
            [13, 151.7],
            [14, 159.9],
            [15, 165.4],
            [16, 167.8],
            [17, 168.7],
            [18, 169.5],
            [19, 168.0]
        ];
        $.plot("#area-chart", [areaData], {
            grid: {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: "#00c0ef"
            },
            lines: {
                fill: true //Converts the line chart to area chart                        
            },
            yaxis: {
                show: false
            },
            xaxis: {
                show: false
            }
        });

        /* END AREA CHART */

    });

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
    </script>
    <script>
    $(document).foundation();
    </script>
</body>
</html>
