<x-layout title="Nova Série">

  <form action = "/series/salvar" method="post">
    @csrf
    <div class="mb-3">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Adiconar</button>
  </form>

</x-layput>