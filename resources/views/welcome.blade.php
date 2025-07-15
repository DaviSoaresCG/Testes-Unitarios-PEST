@forelse($cidades as $cidade)    
    <p>{{$cidade}}</p>
@empty
    não tem cidade
@endif

@foreach($cidades as $cidade)
    @if($loop->first)
    <p>Primeira Cidade é {{$cidade}}</p>
        
    @endif

    @if($loop->last)
        <p>Ultima cidade é {{$cidade}}</p>
    @endif
@endforeach
<span>sss</span>

<form action="{{route('submit')}}" method="post">
    @csrf
    <input type="text" name="name" id="name">
    {{-- @error() apresenta 1 erro apenas --}}
    @error('name')
        {{$message}}
    @enderror
    {{-- dessa forma, percorre todos os erros --}}
    @foreach ($errors->get('name') as $error)
        {{$error}}
    @endforeach
    <button type="submit">Enviar</button>
</form>
{{session('name')}}