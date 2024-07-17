(function($) {
    "use strict";

    var dlabSparkLine = function() {
        let draw = Chart.controllers.line.__super__.draw;
        var lebarLayar = $(window).width();

        var barChart1 = function(data) {
            if ($('#barChart_1').length > 0) {
                const barChart_1 = document.getElementById("barChart_1").getContext('2d');
                
                // Atur tinggi canvas berdasarkan lebar layar atau kebutuhan desain
                var canvasHeight = 120; // Default tinggi canvas
                if (lebarLayar < 768) {
                    canvasHeight = 100; // Misalnya, tinggi canvas untuk layar kecil
                }

                barChart_1.canvas.height = canvasHeight;

                new Chart(barChart_1, {
                    type: 'bar',
                    data: {
                        defaultFontFamily: 'Poppins',
                        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
                        datasets: [{
                            label: "Jumlah Permintaan Obat",
                            data: data,
                            borderColor: 'rgba(0,161,91)',
                            borderWidth: "0",
                            backgroundColor: 'rgba(0,161,91)'
                        }]
                    },
                    options: {
                        legend: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }],
                            xAxes: [{
                                barPercentage: 0.5
                            }]
                        }
                    }
                });
            }
        };

        return {
            init: function() {},
            load: function() {
                $.ajax({
                    url: 'get_chart_data.php',
                    method: 'GET',
                    success: function(response) {
                        console.log("Data dari server:", response);  // Debug statement
                        var data = response;
                        barChart1(data);
                    },
                    error: function(error) {
                        console.log("Error:", error);  // Debug statement
                    }
                });
            },
            resize: function() {}
        };
    }();

    $(document).ready(function() {});

    $(window).on('load', function() {
        dlabSparkLine.load();
    });

    $(window).on('resize', function() {
        setTimeout(function() {
            dlabSparkLine.resize();
        }, 1000);
    });

})(jQuery);
