{{$slot}}


<form action={{ route('site.contato') }} method="POST">
    @csrf
    <input name="nome" type="text" value = "{{ old('nome') }}" placeholder="Nome" class="{{$classe}}">
    <br>
    <input name="telefone" type="text" value="{{old('telefone')}}" placeholder="Telefone" class="{{$classe}}">
    <br>
    <input name="email"type="text" value="{{old('email')}}" placeholder="E-mail" class="{{$classe}}">
    <br>
    <select name="motivo_contato" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>
        $@foreach ($motivo_contatos as $key => $motivo_contato)
            <option value='{{$key}}' {{old('motivo_contato') == $key ? 'selected' : ''}}>{{ $motivo_contato }}</option> 
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem'}}
    </textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
