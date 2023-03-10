@extends('layout.app')
@section('content')

@php $sexe_1 = $candidats[0]->sexe @endphp
@php $sexe_2 = $candidats[0]->sexe @endphp
@php $cpt = 0 @endphp
@php $cpt_sexe_1 = 0 @endphp
@foreach ($candidats as $candidat )
    @php $cpt = $cpt + 1 @endphp
    @if ($candidat->sexe != $sexe_1 )
    @php $sexe_2 = $candidat->sexe @endphp
    @endif

    @if ($candidat->sexe == $sexe_1 )
    @php $cpt_sexe_1 = $cpt_sexe_1 + 1 @endphp
    @endif
@endforeach
<div class="container col-md-6">
    <div class="card"><h4>Repartition des candidats par sexe</h4></div>
    <canvas id="pieCanvas" aria-label="chart" role="img"></canvas>
</div>

<script src="{{asset('build/assets/chart.min.js')}}"></script>
<script>
    const barCanvas = document.getElementById('pieCanvas');
    const barChart = new Chart(pieCanvas, {
        type: "pie",
        data: {
            labels: [
                "{{$sexe_1}}", "{{$sexe_2}}"
            ],
            datasets: [{
                data: [{{$cpt_sexe_1}}, {{$cpt - $cpt_sexe_1}}],
                backgroundColor: ['primary', 'crimson' ],
                hoverOffset: 40
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
