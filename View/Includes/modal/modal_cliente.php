<link rel="stylesheet" href="/View/Includes/css/modal_cliente.css">
<dialog id="modal-cliente" class="oculta">
  <form method="dialog" class="modal-cliente-close-area">
    <button type="submit" class="modal-cliente-fechar" aria-label="Fechar">&times;</button>
  </form>

  <div class="modal-cliente">

    <input type="hidden" name="id_cliente" id="modal-id-cliente">

    <div class="mb-3">
      <label for="modal-nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="modal-nome" name="nome">
    </div>

    <div class="mb-3">
      <label for="modal-telefone" class="form-label">Fone</label>
      <input type="text" class="form-control" id="modal-telefone" name="telefone">
    </div>

    <div class="mb-3">
      <label for="modal-email" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="modal-email" name="email">
    </div>

    <div class="mb-3">
      <label for="modal-status" class="form-label">Status</label>
      <select class="form-select" name="status" id="modal-status">
        <option value="ATIVO">Ativo</option>
        <option value="INATIVO">Inativo</option>
      </select>
    </div>

    <div class="modal-cliente-acoes">
      <button type="button" class="btn btn-secondary" onclick="document.getElementById('modal-cliente').close()">Cancelar</button>
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </div>
</dialog>