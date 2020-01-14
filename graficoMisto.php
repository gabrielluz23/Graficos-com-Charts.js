<?php  include 'query.php'?>
<!doctype html>
<html lang="en">
  <head>
    <title>[Title]</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-3 mb-3">
  <button class=" btn btn-primary " onclick="addDataMixed2019()" >Adicionar Valor 2019</button>
  <button class=" btn btn-primary " onclick="addDataMixed2018()" >Adicionar Valor 2018</button>

  <button class="btn btn-danger  " onclick="removeDataMixed()" >Remover Valores</button>


  
  </div>
  <div class="container bg-dark mt-3">
    <canvas id="myChartMixed"></canvas>
  </div>

  <script>
    var ctx = document.getElementById('myChartMixed').getContext('2d');
    var myLineChartMixed = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [<?php echo $mes ?>],
        datasets: [
          {
            label: ' meta 2019',
            data: [300,200,100.30,400,500],
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,255,255)',
            borderWidth: 3,
            type:'line'
          },
          {
            label: ' meta',
            data: [300,500,200.30,800,600],
            backgroundColor: 'transparent',
            borderColor: 'rgba(230, 230, 0)',
            borderWidth: 3,
            type:'line'
          },
          {
            label: 'ano 2018',
            data: [<?php echo $ano2018 ?>],
            backgroundColor: 'rgba(255,99,132)',
            borderColor: 'rgba(255,99,132)',
            borderWidth: 3
          },
          {
            label: 'ano 2019',
            data: [<?php echo $ano2019 ?>],
            backgroundColor: 'rgba(0,255,255)',
            borderColor: 'rgba(0,255,255)',
            borderWidth: 3
          },
         
        
          
        ]
      },
      options: {
        scales: {
          sclaes: {
            yAxes: [{
              beginAtZero: false

            }],
            xAxes: [{
              autoskip: true,
              maxTicketLimit: 20
            }]
          }
        }
      },
      tooltips: {
        mode: 'index'
      },
      Legend: {
        display: true,
        position: 'top',
        labels: {
          fontColor: 'rgb(255,255,255)',
          fontSize: 16
        }
      }
    });
    function addDataMixed2019() {
      myLineChartMixed.data.datasets[3].data[5] = 622;
      myLineChartMixed.data.labels[5]= "junho";
      myLineChartMixed.update();

    }


    function addDataMixed2018() {
      myLineChartMixed.data.datasets[2].data[5] = 822;
      myLineChartMixed.data.labels[5]= "junho";
      myLineChartMixed.update();

    }
    function removeDataMixed() {
      myLineChartMixed.data.labels.splice(5);
      myLineChartMixed.data.datasets[2].data.splice(5);
      myLineChartMixed.update();

    }
    
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
