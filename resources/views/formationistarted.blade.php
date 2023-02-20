@extends('layout.app')
@section('content')

@php
    $is_started = $formations[0]->is_started;
    $is_not_started = $formations[0]->is_started;
    $started = array(
        "1" => 0,
        "0" => 0
    );

@endphp



@foreach ($formations as $formation)
    @if ($formation->is_started != $is_started)
        @php
            $is_not_started = $formation->is_started;
            $started["0"]++;
        @endphp
    @endif
    @if ($formation->is_started == $is_started)
        @php
            $started["1"]++;
        @endphp
    @endif

@endforeach


<div class="container col-md-6">
    <div class="card"><h4>statistique des formations</h4></div>
    <canvas id="barCanvas" aria-label="chart" role="img"></canvas>
</div>

<script src="{{asset('build/assets/chart.min.js')}}"></script>
<script>
    const barCanvas = document.getElementById('barCanvas');
    const barChart = new Chart(barCanvas, {
        type: "bar",

        data: {



            labels: [
                "Is started", "Is not started"
            ],
            datasets: [{
                data: [
                    @foreach ($started as $s)
                        "{{ $s}}",
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
