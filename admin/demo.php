<div id="chart_div" style="width: 900px; height: 500px;"></div>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          <?php $a =thong_ke_khoahoc();
          foreach($a as $i): ?>
          ['2004/05',  <?php echo $i['hoc_phi'] ?>, <?php echo $i['hoc_phi'] ?>,<?php echo $i['hoc_phi'] ?>,<?php echo $i['hoc_phi'] ?>,           450,      614.6],
          <?php break; endforeach ?>
         
        ]);

        var options = {
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
