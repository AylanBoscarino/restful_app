@extends('includes.main_layout')
@section('content')
<section>
    <div class="container home">
        <div class="col-lg-6">
            @if(isset($aluno) != null)
            <form action="{{url(route('update', $aluno->id))}}" method="POST">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome" name="name" id="name" value="{{$aluno->name}}">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Classe" name="class" id="class" value="{{$aluno->class}}" >
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-success" type="submit" >Salvar</button>
                    </div>
            </form>
            @else
                <form action="{{url(route('store'))}}" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome" name="name" id="name" >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Classe" name="class" id="class" >
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-success" type="submit" >Salvar</button>
                        </div>
                </form>
            @endif
        </div>
    </div>
</section>
@endsection