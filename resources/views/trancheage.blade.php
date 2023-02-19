@extends('layout.app')
@section('content')

<?php
    $tranches = array(
    "0-18" => 0,
    "19-30" => 0,
    "31-50" => 0,
    "51+" => 0
);

@foreach ($candidats as $candidat)
$age = $candidat->age;
if($age <= 18) {
    $tranches["0-18"]++;
  } elseif($age <= 30) {
    $tranches["19-30"]++;
  } elseif($age <= 50) {
    $tranches["31-50"]++;
  } else {
    $tranches["51+"]++;
  }
@endforeach
?>

<div class="container col-md-6">
    <canvas id="barCanvas" aria-label="chart" role="img"></canvas>
</div>

<script src="{{asset('build/assets/chart.min.js')}}"></script>
<script>
    const barCanvas = document.getElementById('barCanvas');
    const barChart = new Chart(barCanvas, {
        type: "bar",

        data: {
            labels: [
                @foreach ($candidats as $candidat)
                    "{{$candidat->age}}",
                @endforeach
            ],
            datasets: [{
                data: [],
                backgroundColor: ['primary', 'crimson' ],
            }]
        },
        options: {
            scales: {
                y: {
                    suggestedMax : 20,
                    ticks: {
                        font: {
                            size: 18
                        }
                    }
                },
                x: {
                    ticks: {
                        font: {
                            size: 15
                        }
                    }
                }
            }
        }
    })
</script>
@endsection
