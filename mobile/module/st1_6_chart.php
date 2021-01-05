<?
if($_POST['key']=="A")
{
?>
	<script type="text/javascript">
		Highcharts.chart('container', {
			chart: {
				type: 'column',
				height: '200px'
			},
			title: {
				text: '매출비중추이',
				align: 'left',
				style: { 'color': '#000000', 'fontSize': '12px','font-weight': 'bold' }
			},
			xAxis: {
				categories: ['2016/12', '2017/12', '2018/12', '2019/12', '2020/12']
			},
			yAxis: {
				min: 0,
				title: {
					text: ''
				},
				stackLabels: {
					enabled: false,
					style: {
						fontWeight: 'bold',
						color: ( // theme
							Highcharts.defaultOptions.title.style &&
							Highcharts.defaultOptions.title.style.color
						) || 'gray'
					}
				}
			},
			exporting:{
				enabled: false
			},
			legend: {
				enabled: false,
				align: 'right',
				x: -30,
				verticalAlign: 'top',
				y: 25,
				floating: true,
				backgroundColor:
					Highcharts.defaultOptions.legend.backgroundColor || 'white',
				borderColor: '#CCC',
				borderWidth: 1,
				shadow: false
			},
			tooltip: {
				headerFormat: '<b>{point.x}</b><br/>',
				pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
			},
			plotOptions: {
				column: {
					stacking: 'normal',
					dataLabels: {
						enabled: false
					}
				}
			},
			colors: ['#FE730E','#4BB949','#2D91FF','#OE58EE','#F94723'],
		
			series: [{
				name: 'John',
				data: [5, 3, 4, 7, 2],
				
			}, {
				name: 'Jane',
				data: [2, 2, 3, 2, 1],
			}, {
				name: 'Joe',
				data: [3, 4, 4, 2, 5],
			}]
		});
	</script>
<?
}
else
{
?>
		<script type="text/javascript">
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column',
		height: '200px'
    },
    title: {
        text: '시장 점유율',
		align: 'left',
		style: { 'color': '#000000', 'fontSize': '12px','font-weight': 'bold' }
    },
    subtitle: {
		//text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
		text: ''
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: ''
        }

    },
    legend: {
        enabled: false
    },
	exporting:{
		enabled: false
	},
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },
	colors: ['#FE730E','#4BB949','#2D91FF','#OE58EE','#F94723'],

    series: [
        {
            name: "Browsers",
            colorByPoint: true,
            data: [
                {
                    name: "DRAM",
                    y: 62.74,
                    drilldown: "DRAM"
                },
                {
                    name: "스마트패널",
                    y: 10.57,
                    drilldown: "스마트패널"
                },
                {
                    name: "TV",
                    y: 7.23,
                    drilldown: "TV"
                },
                {
                    name: "Headunits",
                    y: 5.58,
                    drilldown: "Headunits"
                },
                {
                    name: "HHP",
                    y: 4.02,
                    drilldown: "Edge"
                }
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "DRAM",
                id: "DRAM",
                data: [
                    [
                        "v65.0",
                        0.1
                    ],
                    [
                        "v64.0",
                        1.3
                    ],
                    [
                        "v63.0",
                        53.02
                    ],
                    [
                        "v62.0",
                        1.4
                    ],
                    [
                        "v61.0",
                        0.88
                    ],
                    [
                        "v60.0",
                        0.56
                    ],
                    [
                        "v59.0",
                        0.45
                    ],
                    [
                        "v58.0",
                        0.49
                    ],
                    [
                        "v57.0",
                        0.32
                    ],
                    [
                        "v56.0",
                        0.29
                    ],
                    [
                        "v55.0",
                        0.79
                    ],
                    [
                        "v54.0",
                        0.18
                    ],
                    [
                        "v51.0",
                        0.13
                    ],
                    [
                        "v49.0",
                        2.16
                    ],
                    [
                        "v48.0",
                        0.13
                    ],
                    [
                        "v47.0",
                        0.11
                    ],
                    [
                        "v43.0",
                        0.17
                    ],
                    [
                        "v29.0",
                        0.26
                    ]
                ]
            },
            {
                name: "스마트패널",
                id: "스마트패널",
                data: [
                    [
                        "v58.0",
                        1.02
                    ],
                    [
                        "v57.0",
                        7.36
                    ],
                    [
                        "v56.0",
                        0.35
                    ],
                    [
                        "v55.0",
                        0.11
                    ],
                    [
                        "v54.0",
                        0.1
                    ],
                    [
                        "v52.0",
                        0.95
                    ],
                    [
                        "v51.0",
                        0.15
                    ],
                    [
                        "v50.0",
                        0.1
                    ],
                    [
                        "v48.0",
                        0.31
                    ],
                    [
                        "v47.0",
                        0.12
                    ]
                ]
            },
            {
                name: "TV",
                id: "TV",
                data: [
                    [
                        "v11.0",
                        6.2
                    ],
                    [
                        "v10.0",
                        0.29
                    ],
                    [
                        "v9.0",
                        0.27
                    ],
                    [
                        "v8.0",
                        0.47
                    ]
                ]
            },
            {
                name: "Headunits",
                id: "Headunits",
                data: [
                    [
                        "v11.0",
                        3.39
                    ],
                    [
                        "v10.1",
                        0.96
                    ],
                    [
                        "v10.0",
                        0.36
                    ],
                    [
                        "v9.1",
                        0.54
                    ],
                    [
                        "v9.0",
                        0.13
                    ],
                    [
                        "v5.1",
                        0.2
                    ]
                ]
            },
            {
                name: "HHP",
                id: "HHP",
                data: [
                    [
                        "v16",
                        2.6
                    ],
                    [
                        "v15",
                        0.92
                    ],
                    [
                        "v14",
                        0.4
                    ],
                    [
                        "v13",
                        0.1
                    ]
                ]
            }
        ]
    }
});
		</script>
<?
}
?>

	<div id="container"></div>
