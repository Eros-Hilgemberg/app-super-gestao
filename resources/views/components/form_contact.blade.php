<form action="{{ route('site.contact') }}" method="POST">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{$classe}}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{$classe}}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{$classe}}">
    <br>
    <select name="motivo-contato" class="{{$classe}}">
        <option value="1">Qual o motivo do contato?</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
        <option value="4">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}" placeholder="Preencha aqui a sua mensagem"></textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>