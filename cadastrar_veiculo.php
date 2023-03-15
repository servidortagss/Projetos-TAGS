<div class="container-fluid">
  <form method="post" action="confirmar_cadastro_veiculo">
    <h2 class="my-3">Cadastrar Veículo</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="placa">Placa</label>
          <input type="text" class="form-control" placeholder="Informe a placa ex: ABC1234" id="placa" name="placa">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="marca">Marca</label>
          <input type="text" class="form-control" placeholder="Escolha" id="marca" name="marca">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="tipo">Tipo</label>
          <input type="text" class="form-control" placeholder="Escolha" id="tipo" name="tipo">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label for="fabricacao">Ano Fabricação</label>
          <input type="text" class="form-control" id="fabricacao" name="fabricacao" placeholder="Informe o ano de fabricação">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="modelo">Ano Modelo</label>
          <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Informe o ano do modelo">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="cor">Cor do Veículo</label>
          <input type="text" class="form-control" id="cor" name="cor" placeholder="Informe a cor">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="instrutor">Instrutor</label>
          <input type="text" class="form-control" id="instrutor" name="instrutor" placeholder="Veículo sem instrutor">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="km_inicial">KM Inicial</label>
          <input type="text" class="form-control" id="km_inicial" name="km_inicial" placeholder="Somente numeros">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
