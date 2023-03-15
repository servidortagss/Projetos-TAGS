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
          <select name="marca" required="" class="form-control" id="marca">
            <option value="">Escolha</option>
            <option value="CHEVROLET">CHEVROLET</option>
            <option value="CITROËN">CITROËN</option>
            <option value="FIAT">FIAT</option>
            <option value="FORD">FORD</option>
            <option value="HONDA">HONDA</option>
            <option value="MITSUBISHI">MITSUBISHI</option>
            <option value="PEUGEOT">PEUGEOT</option>
            <option value="RENAULT">RENAULT</option>
            <option value="TOYOTA">TOYOTA</option>
            <option value="VOLKSWAGEN">VOLKSWAGEN</option>
            <option value="">-------------</option>
            <option value="ACURA">ACURA</option>
            <option value="ADAMO">ADAMO</option>
            <option value="AGRALE">AGRALE</option>
            <option value="ALFA ROMEO">ALFA ROMEO</option>
            <option value="AMERICAR">AMERICAR</option>
            <option value="ASIA">ASIA</option>
            <option value="ASTON MARTIN">ASTON MARTIN</option>
            <option value="AUDI">AUDI</option>
            <option value="AUSTIN">AUSTIN</option>
            <option value="BAJA">BAJA</option>
            <option value="BEACH">BEACH</option>
            <option value="BENTLEY">BENTLEY</option>
            <option value="BIANCO">BIANCO</option>
            <option value="BMW">BMW</option>
            <option value="BRM">BRM</option>
            <option value="BUGATTI">BUGATTI</option>
            <option value="BUGWAY">BUGWAY</option>
            <option value="BUICK">BUICK</option>
            <option value="CADILLAC">CADILLAC</option>
            <option value="CBT">CBT</option>
            <option value="CHAMONIX">CHAMONIX</option>
            <option value="CHANA">CHANA</option>
            <option value="CHEVROLET">CHEVROLET</option>
            <option value="CHRYSLER">CHRYSLER</option>
            <option value="CITROËN">CITROËN</option>
            <option value="CORD">CORD</option>
            <option value="COYOTE">COYOTE</option>
            <option value="CROSS LANDER">CROSS LANDER</option>
            <option value="DAEWOO">DAEWOO</option>
            <option value="DAIHATSU">DAIHATSU</option>
            <option value="DE SOTO">DE SOTO</option>
            <option value="DKW-VEMAG">DKW-VEMAG</option>
            <option value="DODGE">DODGE</option>
            <option value="DUNNAS">DUNNAS</option>
            <option value="EAGLE">EAGLE</option>
            <option value="EFFA">EFFA</option>
            <option value="EMIS">EMIS</option>
            <option value="ENGESA">ENGESA</option>
            <option value="ENVEMO">ENVEMO</option>
            <option value="FARUS">FARUS</option>
            <option value="FERCAR BUGGY">FERCAR BUGGY</option>
            <option value="FERRARI">FERRARI</option>
            <option value="FIAT">FIAT</option>
            <option value="FIBRAVAN">FIBRAVAN</option>
            <option value="FNM">FNM</option>
            <option value="FORD">FORD</option>
            <option value="FYBER">FYBER</option>
            <option value="GEO">GEO</option>
            <option value="GMC">GMC</option>
            <option value="GRANCAR VEÍCULOS">GRANCAR VEÍCULOS</option>
            <option value="GREAT WALL">GREAT WALL</option>
            <option value="GURGEL">GURGEL</option>
            <option value="HAFEI">HAFEI</option>
            <option value="HB">HB</option>
            <option value="HOFSTETTER">HOFSTETTER</option>
            <option value="HONDA">HONDA</option>
            <option value="HUMMER">HUMMER</option>
            <option value="HYUNDAI">HYUNDAI</option>
            <option value="INFINITI">INFINITI</option>
            <option value="INTERNATIONAL">INTERNATIONAL</option>
            <option value="ISUZU">ISUZU</option>
            <option value="IVECO">IVECO</option>
            <option value="JAGUAR">JAGUAR</option>
            <option value="JEEP">JEEP</option>
            <option value="JINBEI">JINBEI</option>
            <option value="JPX">JPX</option>
            <option value="KIA">KIA</option>
            <option value="KOENIGSEGG">KOENIGSEGG</option>
            <option value="L AUTOMOBILE">L AUTOMOBILE</option>
            <option value="L´AUTO CRAFT">L´AUTO CRAFT</option>
            <option value="LADA">LADA</option>
            <option value="LAMBORGHINI">LAMBORGHINI</option>
            <option value="LANCIA">LANCIA</option>
            <option value="LAND ROVER">LAND ROVER</option>
            <option value="LEXUS">LEXUS</option>
            <option value="LINCOLN">LINCOLN</option>
            <option value="LOBINI">LOBINI</option>
            <option value="LOTUS">LOTUS</option>
            <option value="MAHINDRA">MAHINDRA</option>
            <option value="MARCOPOLO">MARCOPOLO</option>
            <option value="MARINA´S">MARINA´S</option>
            <option value="MASERATI">MASERATI</option>
            <option value="MATRA">MATRA</option>
            <option value="MAYBACH">MAYBACH</option>
            <option value="MAZDA">MAZDA</option>
            <option value="MENON">MENON</option>
            <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
            <option value="MERCURY">MERCURY</option>
            <option value="MG">MG</option>
            <option value="MINI">MINI</option>
            <option value="MITSUBISHI">MITSUBISHI</option>
            <option value="MIURA">MIURA</option>
            <option value="MORRIS">MORRIS</option>
            <option value="MP LAFER">MP LAFER</option>
            <option value="NISSAN">NISSAN</option>
            <option value="OLDSMOBILE">OLDSMOBILE</option>
            <option value="OPEL">OPEL</option>
            <option value="PAG">PAG</option>
            <option value="PAGANI">PAGANI</option>
            <option value="PEUGEOT">PEUGEOT</option>
            <option value="PLYMOUTH">PLYMOUTH</option>
            <option value="PONTIAC">PONTIAC</option>
            <option value="PORSCHE">PORSCHE</option>
            <option value="PUMA">PUMA</option>
            <option value="RENAULT">RENAULT</option>
            <option value="RENO">RENO</option>
            <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
            <option value="ROMI">ROMI</option>
            <option value="ROVER">ROVER</option>
            <option value="SAAB">SAAB</option>
            <option value="SANTA MATILDE">SANTA MATILDE</option>
            <option value="SATURN">SATURN</option>
            <option value="SEAT">SEAT</option>
            <option value="SHELBY">SHELBY</option>
            <option value="SHORT">SHORT</option>
            <option value="SIMCA">SIMCA</option>
            <option value="SMART">SMART</option>
            <option value="SSANGYONG">SSANGYONG</option>
            <option value="STUDEBAKER">STUDEBAKER</option>
            <option value="SUBARU">SUBARU</option>
            <option value="SUZUKI">SUZUKI</option>
            <option value="TOYOTA">TOYOTA</option>
            <option value="TRIUMPH">TRIUMPH</option>
            <option value="TROLLER">TROLLER</option>
            <option value="UNIMOG">UNIMOG</option>
            <option value="VOLKSWAGEN">VOLKSWAGEN</option>
            <option value="VOLVO">VOLVO</option>
            <option value="WAKE">WAKE</option>
            <option value="WALK">WALK</option>
            <option value="WILLYS">WILLYS</option>
            <option value="ACRALE">ACRALE</option>
            <option value="YAMAHA">YAMAHA</option>
          </select>
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