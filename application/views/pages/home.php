<h1>Grafy zobrazujúce údaje z tabuliek</h1>
<?php
$connect = mysqli_connect("localhost", "root", "", "codeigniter");
$query = "SELECT Mesto, count(*) as number FROM zakaznici GROUP BY Mesto";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart()
        {
            var data = google.visualization.arrayToDataTable([
                ['Mesto', 'Number'],
                <?php
                while($row = mysqli_fetch_array($result))
                {
                    echo "['".$row["Mesto"]."', ".$row["number"]."],";
                }
                ?>
            ]);
            var options = {
                title: 'Podiel miest v ktorých jednotlivý zákazníci žijú',
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div class="col-md-6">
<br /><br />
<div style="width:700px;">
    <br />
    <div id="piechart" style="width: 700px; height: 400px;"></div>
</div>
</div>
</body>
</html>

<?php
$connect = mysqli_connect("localhost", "root", "", "codeigniter");
$query = "SELECT zakaznici.Meno, COUNT(*) as number
FROM rezervacia
INNER JOIN zakaznici on (zakaznici.idZakaznika = rezervacia.Zakaznik_idZakaznik)
GROUP BY zakaznici.Meno";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart()
        {
            var data = google.visualization.arrayToDataTable([
                ['Meno','Number'],
                <?php
                while($row = mysqli_fetch_array($result))
                {
                    echo "['".$row["Meno"]."', ".$row["number"]."],";
                }
                ?>
            ]);
            var options = {
                title: 'Koľkokrát si jednotlivý zákazníci zarezervovali športovisko',
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div class="col-md-6">
<br /><br />
<div style="width:700px;">
    <br />
    <div id="piechart2" style="width: 700px; height: 400px;"></div>
</div>
</div>
</body>
</html>

<?php
$connect = mysqli_connect("localhost", "root", "", "codeigniter");
$query = "SELECT sportovisko.Nazov_sportoviska, COUNT(*) as number
FROM rezervacia
INNER JOIN sportovisko on (sportovisko.idSportovisko = rezervacia.Sportovisko_idSportovisko)
GROUP BY sportovisko.Nazov_sportoviska";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart()
        {
            var data = google.visualization.arrayToDataTable([
                ['Nazov_sportoviska','Number'],
                <?php
                while($row = mysqli_fetch_array($result))
                {
                    echo "['".$row["Nazov_sportoviska"]."', ".$row["number"]."],";
                }
                ?>
            ]);
            var options = {
                title: 'Koľkokrát bolo ktoré športovisko prenajaté',
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div class="col-md-6">
<br /><br />
<div style="width:700px;">
    <br />
    <div id="piechart3" style="width: 700px; height: 400px;"></div>
</div>
</div>
</body>
</html>

<?php
$connect = mysqli_connect("localhost", "root", "", "codeigniter");
$query = "SELECT Nazov_sportoviska, Pocet FROM sportovisko GROUP BY Nazov_sportoviska";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart()
        {
            var data = google.visualization.arrayToDataTable([
                ['Nazov_sportoviska','Pocet'],
                <?php
                while($row = mysqli_fetch_array($result))
                {
                    echo "['".$row["Nazov_sportoviska"]."', ".$row["Pocet"]."],";
                }
                ?>
            ]);
            var options = {
                title: 'Počet jednotlivých športovísk',
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div class="col-md-6">
    <br /><br />
    <div style="width:700px;">
        <br />
        <div id="piechart4" style="width: 700px; height: 400px;"></div>
    </div>
</div>
</body>
</html>





