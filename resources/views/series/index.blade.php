<x-layout title="Séries">
    <div class="container">
      
      <ul class="list-group">
        @foreach ($series as $serie)
          <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach

      </ul>
      
      <a class="btn btn-dark mb-2" href="/series/criar">Adicionar</a>

    </div>
</x-layput>