<html>
<head>
    <script language="javascript" type="text/javascript" src="../js/jquery-latest.min.js"> </script>
	<script language="javascript" type="text/javascript" src="../jqstart/js/jquery-1.9.1.js"></script>
	<script language="javascript" type="text/javascript" src="../jqstart/js/jquery-ui-1.10.3.custom.js"></script> 

	<script>
	$(document).ready( function () {
		$('#tablerow').html("<table style='text-align: center' id='iddeptrowtbl' width=100%></table>");
		for (var i = 0; i<10; ++i) {
			$('#iddeptrowtbl').append("<td width=10%><button id='deptbtn" + i + "'>" + i + "</button></td>");
			$( "#deptbtn" + i ).click(function() {
				fillcells($(this).text());
			});
		}
	});
	function fillcells(clickbtn) {
		$('#cellsrow').html("<table style='text-align: center' id='idzonerowtbl' width=100%></table>");
		for (var i = 0; i<10; ++i) {
			$('#idzonerowtbl').append("<td width=10%><button id='zonebtn" + i + "'>" + (Number(clickbtn) * i) + "</button></td>");
			$( "#zonebtn" + i ).click(function() {
				fillcells($(this).text());
			});
		}
	}
	</script>
</head>
<body>
	<h3>Hello World!</h3>
	<table width=100%>
		<tr>
			<td width=100% id='tablerow'>
			</td>
		</tr>
		<tr>
			<td width=100% id='cellsrow'>
			</td>
		</tr>
		<tr>
			<td>
				<table style='text-align: center' id='idcellrowtbl' border=1 width=100%></table>
			</td>
		</tr>
	</table>
</body>
</html>
