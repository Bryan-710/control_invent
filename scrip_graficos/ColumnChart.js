google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(dibujarGrafico);

function dibujarGrafico() {
      //solicitud AJAX  para obtener los datos de data.php 
  fetch('scrip_graficos/data_ColumnChart.php')
  .then(response=> response.json())
  .then(data => {
                  //crear la tabla dataTable
       var dataTable = google.visualization.arrayToDataTable(data);

                  //Opciones del grafico 
               //Opciones del grafico 
               var options = {
              title: 'Total de inversion por categoria',
              hAxis: {title: 'Producto'},
              vAxis: {title: 'Cantidad'},
              legend: {position: 'none'},
              bars: 'vertical',
              colors: ['#4285F4'],
              width: 600,
              height: 400
      

                  };
                  
                  //dibujar el grafico
      var chart = new google.visualization.ColumnChart(document.getElementById('graficoCol2'));
     chart.draw(dataTable, options);
      
  });   
}