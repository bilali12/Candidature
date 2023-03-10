@extends('layout.app')
@section('content')

@php

    $tranches = array(
    "15-18" => 0,
    "19-25" => 0,
    "26-35" => 0
);

@endphp

@foreach ($candidats as $candidat)
@php
    $age = $candidat->age
@endphp
@if ($age >= 15 && $age <=18)
    @php
        $tranches["15-18"]++;
    @endphp
@endif
@if ($age >= 19 && $age <=25)
    @php
        $tranches["19-25"]++;
    @endphp
@endif
@if ($age >= 26 && $age <=35)
    @php
        $tranches["26-35"]++;
    @endphp
@endif

@endforeach

<div class="container col-md-6">
    <div class="card"><h4>Graphe representant les tranches d'age</h4></div>
    <canvas id="barCanvas" aria-label="chart" role="img"></canvas>
</div>

<script src="{{asset('build/assets/chart.min.js')}}"></script>
<script>
    const barCanvas = document.getElementById('barCanvas');
    const barChart = new Chart(barCanvas, {
        type: "bar",

        data: {



            labels: [
                @foreach ($tranches as $tranche=> $value)
                        "{{ $tranche}}",
                    @endforeach
            ],
            datasets: [{
                data: [
                    @foreach ($tranches as $tranche)
                        "{{ $tranche}}",
                    @endforeach
                ],
                backgroundColor: ['primary', 'crimson', ],
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
                            size: 20
                        }
                    }
                }
            }
        }
    })
</script>
@endsection
