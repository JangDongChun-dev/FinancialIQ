<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/mobile/Highchart/code/highcharts.js?ver=<?= $var?>"></script>
<script src="/mobile/Highchart/code/modules/data.js"></script>
<script src="/mobile/Highchart/code/modules/exporting.js"></script>
<script src="/mobile/Highchart/code/modules/export-data.js"></script>
<script src="/mobile/Highchart/code/modules/accessibility.js"></script>
 Highchart End -->
<?
//$_POST['key']="5";
?>
<?if($_POST['key']=="1"){?>
					<div style="float:left;width:4%;height:200px;line-height:200px;font-weight: bold;font-size:26px"> </div>
					<div  style="float:left;width:92%;" >
						<div style="float:left;width:100%;" id="container2"></div>
						<script type="text/javascript">
							Highcharts.getJSON(
								'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/usdeur.json',
								function (data) {

									Highcharts.chart('container2', {
										chart: {
											zoomType: 'x',
											height: '200px'

										},
										title: {
											text: '주가추이, 내부자거래',
											align: 'left',
											style: { 'color': '#000000', 'fontSize': '12px','font-weight': 'bold' }
										},
										exporting:{
											enabled: false
										},
										subtitle: {
											/*
											text: document.ontouchstart === undefined ?
												'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
											*/
										},
										xAxis: {
											type: 'datetime'
										},
										yAxis: {
											title: {
												text: ''
											}
										},
										legend: {
											enabled: false
										},
										plotOptions: {
											area: {
												/*
												fillColor: {
													linearGradient: {
														x1: 0,
														y1: 0,
														x2: 0,
														y2: 1
													},
													stops: [
														[0, Highcharts.getOptions().colors[0]],
														[1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
													]
												},
												*/
												marker: {
													radius: 1
												},
												lineWidth: 1,
												states: {
													hover: {
														lineWidth: 1
													}
												},
												threshold: null
											}
										},

										series: [{
											type: 'area',
											name: 'USD to EUR',
											color: '#FE730E',
											data: data
										}]
									});
								}
							);
						</script>
					</div>
					<div style="float:left;width:4%;height:200px;line-height:200px;font-weight: bold;font-size:26px"> </div>
<?}else if($_POST['key']=="2"){?>
					<div style="float:left;width:4%;height:200px;line-height:200px;font-weight: bold;font-size:26px" > </div>
					<div  style="float:left;width:92%;" >
						<div style="float:left;width:100%;" id="container2"></div>
						<script type="text/javascript">
							Highcharts.chart('container2', {
								chart: {
									zoomType: 'x',
									height: '200px'
								},
								title: {
									text: '외국인 보유비중, 시가총액',
									align: 'left',
									style: { 'color': '#000000', 'fontSize': '12px','font-weight': 'bold' }
								},
								subtitle: {
									text: ''
								},
								exporting:{
									enabled: false
								},
								xAxis: {
									type: 'datetime'
								},
								/*
								xAxis: [{
									categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
										'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
									crosshair: true
								}],
								*/
								yAxis: [{ // Primary yAxis
									labels: {
										format: '{value}°C',
										style: {
											color: Highcharts.getOptions().colors[1]
										}
									},
									title: {
										text: '',
										style: {
											color: Highcharts.getOptions().colors[1]
										}
									}
								}, { // Secondary yAxis
									title: {
										text: '',
										style: {
											color: Highcharts.getOptions().colors[0]
										}
									},
									labels: {
										format: '{value} mm',
										style: {
											color: Highcharts.getOptions().colors[0]
										}
									},
									opposite: true
								}],
								tooltip: {
									shared: true
								},
								legend: {
									enabled: false,
									layout: 'vertical',
									align: 'left',
									x: 120,
									verticalAlign: 'top',
									y: 100,
									floating: true,
									backgroundColor:
										Highcharts.defaultOptions.legend.backgroundColor || // theme
										'rgba(255,255,255,0.25)'
								},

								series: [{
									name: 'Rainfall',
									type: 'area',
									yAxis: 1,
									data: [[1512518400000,150],[1512604800000,155],[1512691200000,160],[1512950400000,165],[1513036800000,160],[1513123200000,180],[1513209600000,185],[1513296000000,195],[1513555200000,190],[1513641600000,200],[1513728000000,230],[1513814400000,220],[1513900800000,205],[1514332800000,200],[1514419200000,240],[1514505600000,250]],
									tooltip: {
										valueSuffix: ' mm'
									},
									zIndex: 1,
									color: '#FE730E',
									marker: {
										enabled: false
									}

								}, {
									name: 'Temperature',
									type: 'spline',
									data: [[1512518400000,8.4],[1512604800000,8.8],[1512691200000,8.5],[1512950400000,8.7],[1513036800000,8.5],[1513123200000,8.3],[1513209600000,8.2],[1513296000000,8.0],[1513555200000,7.9],[1513641600000,8.1],[1513728000000,8.5],[1513814400000,8.6],[1513900800000,8.5],[1514332800000,8.0],[1514419200000,8.1],[1514505600000,8.3]],
									tooltip: {
										valueSuffix: '°C'
									},
									zIndex: 2,
									color:'#2D91FF',
									marker: {
										enabled: false
									}
								}]
							});
						</script>
					</div>
					<div style="float:left;width:4%;height:200px;line-height:200px;font-weight: bold;font-size:26px" > </div>
<?}else if($_POST['key']=="3"){?>

					<div style="float:left;width:4%;height:200px;line-height:200px;font-weight: bold;font-size:26px" > </div>
					<div  style="float:left;width:92%;" >
						<div style="float:left;width:100%;" id="container2"></div>
						<script type="text/javascript">
							Highcharts.chart('container2', {

								chart: {
									type: 'spline',
									height: '200px'
								},
								title: {
									text: '상대수익율',
									align: 'left',
									style: { 'color': '#000000', 'fontSize': '12px','font-weight': 'bold' }
								},
								subtitle: {
									text: ''
								},
								exporting:{
									enabled: false
								},
								xAxis: {
									type: 'datetime'
								},
								yAxis: {
									title: {
										text: ''
									}
								},
								tooltip: {
									shared: true
								},
								legend: {
									enabled: false,
									layout: 'vertical',
									align: 'left',
									x: 120,
									verticalAlign: 'top',
									y: 100,
									floating: true,
									backgroundColor:
										Highcharts.defaultOptions.legend.backgroundColor || // theme
										'rgba(255,255,255,0.25)'
								},

								series: [{
									name: 'Rainfall',
									data: [[1512518400000,150],[1512604800000,155],[1512691200000,160],[1512950400000,165],[1513036800000,160],[1513123200000,180],[1513209600000,185],[1513296000000,195],[1513555200000,190],[1513641600000,200],[1513728000000,230],[1513814400000,220],[1513900800000,205],[1514332800000,200],[1514419200000,240],[1514505600000,250]],
									color: '#FE730E',
									marker: {
										enabled: false
									}

								}, {
									name: 'Temperature',
									data: [[1512518400000,80.4],[1512604800000,82.8],[1512691200000,83.5],[1512950400000,84.7],[1513036800000,86.5],[1513123200000,87.3],[1513209600000,89.2],[1513296000000,89.0],[1513555200000,78.9],[1513641600000,81.1],[1513728000000,84.5],[1513814400000,83.6],[1513900800000,82.5],[1514332800000,84.0],[1514419200000,81.1],[1514505600000,87.3]],
										color:'#2D91FF',
									marker: {
										enabled: false
									}
								}, {
									name: 'Temperature2',
									data: [[1512518400000,180.4],[1512604800000,182.8],[1512691200000,183.5],[1512950400000,184.7],[1513036800000,186.5],[1513123200000,187.3],[1513209600000,189.2],[1513296000000,189.0],[1513555200000,178.9],[1513641600000,181.1],[1513728000000,184.5],[1513814400000,183.6],[1513900800000,182.5],[1514332800000,184.0],[1514419200000,181.1],[1514505600000,187.3]],
										color:'#4BB949',
									marker: {
										enabled: false
									}
								}]
							});
						</script>
					</div>
					<div style="float:left;width:4%;height:200px;line-height:200px;font-weight: bold;font-size:26px"> </div>



<?}else if($_POST['key']=="4"){?>

					<div style="float:left;width:4%;height:200px;line-height:200px;font-weight: bold;font-size:26px"> </div>
					<div  style="float:left;width:92%;" >
						<div style="float:left;width:100%;" id="container2"></div>
						<script type="text/javascript">
							Highcharts.chart('container2', {
								chart: {
									zoomType: 'x',
									height: '200px'
								},
								title: {
									text: '대차잔고비중',
									align: 'left',
									style: { 'color': '#000000', 'fontSize': '12px','font-weight': 'bold' }
								},
								subtitle: {
									text: ''
								},
								exporting:{
									enabled: false
								},
								xAxis: {
									type: 'datetime'
								},
								/*
								xAxis: [{
									categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
										'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
									crosshair: true
								}],
								*/
								yAxis: [{ // Primary yAxis
									labels: {
										format: '{value}°C',
										style: {
											color: Highcharts.getOptions().colors[1]
										}
									},
									title: {
										text: '',
										style: {
											color: Highcharts.getOptions().colors[1]
										}
									}
								}, { // Secondary yAxis
									title: {
										text: '',
										style: {
											color: Highcharts.getOptions().colors[0]
										}
									},
									labels: {
										format: '{value} mm',
										style: {
											color: Highcharts.getOptions().colors[0]
										}
									},
									opposite: true
								}],
								tooltip: {
									shared: true
								},
								legend: {
									enabled: false,
									layout: 'vertical',
									align: 'left',
									x: 120,
									verticalAlign: 'top',
									y: 100,
									floating: true,
									backgroundColor:
										Highcharts.defaultOptions.legend.backgroundColor || // theme
										'rgba(255,255,255,0.25)'
								},

								series: [{
									name: 'Rainfall',
									type: 'spline',
									yAxis: 1,
									data: [[1512518400000,150],[1512604800000,155],[1512691200000,160],[1512950400000,165],[1513036800000,160],[1513123200000,180],[1513209600000,185],[1513296000000,195],[1513555200000,190],[1513641600000,200],[1513728000000,230],[1513814400000,220],[1513900800000,205],[1514332800000,200],[1514419200000,240],[1514505600000,250]],
									tooltip: {
										valueSuffix: ' mm'
									},
									zIndex: 1,
									color: '#FE730E',
									marker: {
										enabled: false
									}

								}, {
									name: 'Temperature',
									type: 'spline',
									data: [[1512518400000,8.4],[1512604800000,8.8],[1512691200000,8.5],[1512950400000,8.7],[1513036800000,8.5],[1513123200000,8.3],[1513209600000,8.2],[1513296000000,8.0],[1513555200000,7.9],[1513641600000,8.1],[1513728000000,8.5],[1513814400000,8.6],[1513900800000,8.5],[1514332800000,8.0],[1514419200000,8.1],[1514505600000,8.3]],
									tooltip: {
										valueSuffix: '°C'
									},
									zIndex: 2,
									color:'#2D91FF',
									marker: {
										enabled: false
									}
								}]
							});
						</script>
					</div>
					<div style="float:left;width:4%;height:200px;line-height:200px;font-weight: bold;font-size:26px"> </div>

<?}else if($_POST['key']=="5"){?>
					<div style="float:left;width:4%;height:200px;line-height:200px;font-weight: bold;font-size:26px"> </div>
					<div  style="float:left;width:92%;" >
						<div style="float:left;width:100%;" id="container2"></div>
						<script type="text/javascript">
							Highcharts.chart('container2', {
								chart: {
									zoomType: 'x',
									height: '200px'
								},
								title: {
									text: '공배도비중',
									align: 'left',
									style: { 'color': '#000000', 'fontSize': '12px','font-weight': 'bold' }
								},
								subtitle: {
									text: ''
								},
								exporting:{
									enabled: false
								},
								xAxis: {
									type: 'datetime'
								},
								/*
								xAxis: [{
									categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
										'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
									crosshair: true
								}],
								*/
								yAxis: [{ // Primary yAxis
									labels: {
										format: '{value}°C',
										style: {
											color: Highcharts.getOptions().colors[1]
										}
									},
									title: {
										text: '',
										style: {
											color: Highcharts.getOptions().colors[1]
										}
									}
								}, { // Secondary yAxis
									title: {
										text: '',
										style: {
											color: Highcharts.getOptions().colors[0]
										}
									},
									labels: {
										format: '{value} mm',
										style: {
											color: Highcharts.getOptions().colors[0]
										}
									},
									opposite: true
								}],
								tooltip: {
									shared: true
								},
								legend: {
									enabled: false,
									layout: 'vertical',
									align: 'left',
									x: 120,
									verticalAlign: 'top',
									y: 100,
									floating: true,
									backgroundColor:
										Highcharts.defaultOptions.legend.backgroundColor || // theme
										'rgba(255,255,255,0.25)'
								},

								series: [{
									name: 'Rainfall',
									type: 'spline',
									yAxis: 1,
									data: [[1512518400000,150],[1512604800000,155],[1512691200000,160],[1512950400000,165],[1513036800000,160],[1513123200000,180],[1513209600000,185],[1513296000000,195],[1513555200000,190],[1513641600000,200],[1513728000000,230],[1513814400000,220],[1513900800000,205],[1514332800000,200],[1514419200000,240],[1514505600000,250]],
									tooltip: {
										valueSuffix: ' mm'
									},
									zIndex: 1,
									color: '#FE730E',
									marker: {
										enabled: false
									}

								}, {
									name: 'Temperature',
									type: 'spline',
									data: [[1512518400000,8.4],[1512604800000,8.8],[1512691200000,8.5],[1512950400000,8.7],[1513036800000,8.5],[1513123200000,8.3],[1513209600000,8.2],[1513296000000,8.0],[1513555200000,7.9],[1513641600000,8.1],[1513728000000,8.5],[1513814400000,8.6],[1513900800000,8.5],[1514332800000,8.0],[1514419200000,8.1],[1514505600000,8.3]],
									tooltip: {
										valueSuffix: '°C'
									},
									zIndex: 2,
									color:'#2D91FF',
									marker: {
										enabled: false
									}
								}]
							});
						</script>
					</div>
					<div style="float:left;width:4%;height:200px;line-height:200px;font-weight: bold;font-size:26px"> </div>
<?}?>


