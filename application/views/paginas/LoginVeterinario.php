<div class="card">
    <div class="card-block">

        <div class="account-box">

            <div class="card-box p-5">
                <h2 class="text-uppercase text-center pb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="<?= base_url("resources/assets/images/logo.png") ?>" alt="" height="26"></span>
                    </a>
                </h2>

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Añadir Veterinario</h3>

                <form class="" action="#" method="post" id="idFormRegistro">

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="emailaddress">Nombre(s)</label>
                            <input class="form-control" type="email" id="email" name="email" required="" placeholder="Ingresa tu Nombre">
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col col-6">
                                <label for="emailaddress">Apellido Paterno</label>
                                <input class="form-control" type="email" id="email" name="email" required="" placeholder="Ingresa tu Apellido Paterno">
                            </div>
                            <div class="col col-6">
                                <label for="emailaddress">Apellido Materno</label>
                                <input class="form-control" type="email" id="email" name="email" required="" placeholder="INgresa tu Apellido Materno">
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-b-20 row">
                        <div class="col-12">
                            <label for="emailaddress">Direccion</label>
                            <input class="form-control" type="email" id="email" name="email" required="" placeholder="Ingresa tu Domicilio">
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col col-6">
                                <label for="exampleInputPassword1">Extension</label>
                                <select name="cboSexo" class="form-control" id="cboSexo">
                                    <option value="1">+52</option>
                                    <option value="2">+1</option>
                                </select>
                            </div>
                            <div class="col col-6">
                                <label for="text">Telefono</label>
                                <input class="form-control" type="email" id="email" name="email" required="" placeholder="Ingresa aqui tu N° Telefonico">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="customFile">Insertar Cedula</label>
                        <input type="file" class="form-control" name="imapFoto" id="imapImg" />
                    </div>

                    <div class="form-group row text-center m-t-10">
                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" onclick="javascript:validarusuario()">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>