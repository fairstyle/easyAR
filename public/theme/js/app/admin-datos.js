$(function() {
  'use strict';

    var gridLineColor = 'rgba(77, 138, 240, .1)';

    var colors = {
        primary:         "#727cf5",
        secondary:       "#7987a1",
        success:         "#42b72a",
        info:            "#68afff",
        warning:         "#fbbc06",
        danger:          "#ff3366",
        light:           "#ececec",
        dark:            "#282f3a",
        muted:           "#686868"
    }

    if($('#progressbar1').length) {
        var bar = new ProgressBar.Circle(progressbar1, {
            color: "#727cf5",
            trailColor: 'rgba(77, 138, 240, .1)',
            // This has to be the same size as the maximum width to
            // prevent clipping
            strokeWidth: 4,
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 1400,
            text: {
                autoStyleContainer: false
            },
            from: { color: "#727cf5", width: 1 },
            to: { color: "#727cf5", width: 4 },
            // Set default step function for all animate calls
            step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                var value = Math.round(circle.value() * 100);
                if (value === 0) {
                    circle.setText('');
                } else {
                    circle.setText(value + '%');
                }

            }
        });

        bar.text.style.fontSize = '3rem';

        bar.animate(.78);
    }

    if($('#modelosMensualesGrafico').length) {
        var modelosMensualesGrafico = document.getElementById('modelosMensualesGrafico').getContext('2d');
        new Chart(modelosMensualesGrafico, {
                type: 'bar',
                data: {
                    labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
                    datasets: [{
                        label: 'Modelos',
                        data: [150,110,90,115,125,160,190,140,100,110,120,120],
                        backgroundColor: "#727cf5"
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        dataset:[{
                            barPercentage: .3,
                            categoryPercentage: .6,
                        }],
                        xAxes: [{
                            display: true,
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                fontColor: '#8392a5',
                                fontSize: 10
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                color: 'rgba(77, 138, 240, .1)'
                            },
                            ticks: {
                                fontColor: '#8392a5',
                                fontSize: 10,
                                min: 80,
                                max: 200
                            }
                        }]
                    }
                }
            }
        );
    }

});
