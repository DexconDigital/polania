<style>
    .input-group-text {
        font-size: 15px;
    }
</style>
<section id="formulario">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="container col-12 col-md-10 col-lg-12 d-flex justify-content-center">
                <div class="form-row formulario col-lg-10 ">
                    <form action="" class="row formulario">
                        <!-- codigo -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label class="field-label" for="">Código</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">#- </div>
                                </div>
                                <input type="number" placeholder="Código" id="codigo_buscar" class="form-control">
                            </div>
                        </div>
                        <!-- tipo inmueble -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label for="">Tipo de Inmueble</label>
                            <select class="form-control" id="tipo_inmueble_buscar">
                                <option selected disabled value="0">Tipo de Inmueble</option>
                            </select>
                        </div>
                        <!--tipo gestion -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label for=""> Tipo de Gestión</label>
                            <select class="form-control" id="tipo_gestion_buscar">
                                <option selected disabled value="0">Gestion</option>
                            </select>
                        </div>
                        <!-- ciudad -->
                        <div class="form-group col-12 col-md-6 col-lg-3"><label for="">Ciudad</label>
                            <select class="form-control" id="ciudad_buscar">
                                <option selected disabled value=0>Ciudad</option>
                            </select>
                        </div>
                        <!-- barrio -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label for="">Barrio</label>
                            <select class="form-control" id="barrio_buscar">
                                <option selected disabled value=0>Barrio</option>
                            </select>
                        </div>
                        <!-- baños -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label for="">Baños</label>
                            <select class="form-control" id="barrio_buscar">
                                <option selected disabled value=0>Baños</option>
                            </select>
                        </div>
                        <!--  Alcobas -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label for=""> Alcobas</label>
                            <select class="form-control" id="barrio_buscar">
                                <option selected disabled value=0>Alcobas</option>
                            </select>
                        </div>
                        <!--  Garajes -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label for=""> Garajes</label>
                            <select class="form-control" id="barrio_buscar">
                                <option selected disabled value=0>Garajes</option>
                            </select>
                        </div>
                        <!-- Área Máxima -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label for="">Área Máxima</label>
                            <input type="number" placeholder="Área Máxima" id="precio_minimo_buscar" class="form-control">
                        </div>
                        <!--  Área Máxima -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label for=""> Área Máxima</label>
                            <input type="number" placeholder="Área Máxima" id="precio_minimo_buscar" class="form-control">
                        </div>
                        <!-- presio minimo -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label for="">Precio Mínimo</label>
                            <input type="number" placeholder="Precio Mínimo" id="precio_minimo_buscar" class="form-control">
                        </div>
                        <!-- precio maximo -->
                        <div class="form-group col-12 col-md-6 col-lg-3">
                            <label for="">Precio Máximo</label>
                            <input type="number" placeholder="Precio Máximo" id="precio_maximo_buscar" class="form-control">
                        </div>
                        <!-- btn buscar -->
                        <div class="form-group col-12 col-md-6 col-lg-12 pt-md-2 d-flex justify-content-center mt-3">
                            <br class="d-none d-md-block">
                            <button type="button" id="buscar" class="btn btn-primary btn-lg btn-block col-lg-3">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>