@extends('includes.main_layout')
@section('content')
<section>
    <div  class="container home col-sm-7">
    <ul class="list-group">
    
            <div class="row container-fluid">
                @foreach($lista as $aluno)
                <li class="list-group-item">
                    <h5>{{$aluno->name}}</h5>
                    <h5>{{$aluno->team}}</h5>
                <a href="#" data-id="{{$aluno->id}}" data-route="{{url(route('destroy', $aluno->id))}}" class="btn btn-danger excluir">Excluir</a>
                    <a href="{{route('editar', $aluno->id)}}" class="btn btn-warning ">Editar</a>
                </li>
                
                @endforeach
            </div>
        </ul>
    </div>
</section>
<script>
    
</script>
@endsection