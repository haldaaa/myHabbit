@extends ('layout')


@section('contenu')

<div class="col-md-6">

    <p> Page Dashboard </p>
</div>


<div class="col-md-8">
  <h1> Plus gros vendeurs </h1>
    <canvas id="myChart"></canvas>
  </div>
</br> </br> </br>
  <div class="col-md-8">
    <h1> Graphique jolie ici </h1>

    <canvas id="myChart2"></canvas>
  </div>
  

  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>

    // Graphique plus gros vendeur 
    const ctx = document.getElementById('myChart');
    var labels =  {{ Js::from($label) }};
    var data =  {{ Js::from($data) }};
    console.log(data);
    console.log('coucou');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: data,
        datasets: [{
          label: '# de ventes',
          data: labels,
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });



    // Graphique pays avec le plus de ventes

    const ctx2 = document.getElementById('myChart2');
    new Chart(ctx2, {
      type: 'pie',
      data: {
        labels: Object.values(users),
        datasets: [
          {
            label: "Bénéfices (Euros)",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
            data: Object.values(labels),
          }
        ]
      },
      options: {
        legend: { display: false },
        title: {
          display: true,
          text: 'Predicted world population (millions) in 2050'
        }
      }
  });



  </script>
  


@endsection