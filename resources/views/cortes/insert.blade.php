@extends('layouts.layoutmain')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4 text-center">Nuevo Corte</h3>
                <form class="row g-3" method="POST" action="{{ route('cortes.insert') }}">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label">Folio Corte</label>
                        <input type="text" class="form-control" name="dt_folionum">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Clave Producto</label>
                        <input type="text" class="form-control" name="dt_clave">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Color</label>
                        <input type="text" class="form-control" name="dt_color">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Talla</label>
                        <select class="form-select" name="dt_talla">
                            <option selected >Elije...</option>
                            <option>XS</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Estatus</label>
                        <select class="form-select" name="dt_status">
                            <option selected>Elije...</option>
                            <option>ALMACEN</option>
                            <option>EN PROCESO</option>
                            <option>TERMINADO</option>
                            <option>ENTREGADO</option>
                        </select>
                    </div>
                    <div class="col-12 col-xl-4 col-md-6">
                        <label class="form-label">Piezas</label>
                        <input type="number" class="form-control" name="dt_piezas">
                    </div>
                    <div class="col-12 col-xl-4 col-md-6">
                        <label class="form-label">Bultos</label>
                        <input type="number" class="form-control" name="dt_numbulto">
                    </div>
                    <div class="col-12 col-xl-4 col-md-6">
                        <label class="form-label">Composicion</label>
                        <input type="text" class="form-control" name="dt_composicion">
                    </div>
                    <div class="col-12 col-xl-3 col-md-4">
                        <label class="form-label">Corte</label>
                        <input type="text" class="form-control" name="dt_corte">
                    </div>
                    <div class="col-12 col-xl-3 col-md-4">
                        <label class="form-label">Baño</label>
                        <input type="text" class="form-control" name="dt_bano">
                    </div>
                    <div class="col-12 col-xl-3 col-md-4">
                        <label class="form-label">Hilos</label>
                        <input type="text" class="form-control" name="dt_codhilos">
                    </div>
                    <div class="col-12 col-xl-3 col-md-4">
                        <label class="form-label">Pedido</label>
                        <input type="text" class="form-control" name="dt_numpedido">
                    </div>
                    <div class="col-12 col-xl-12 col-md-12">
                        <label class="form-label">Descripcion</label>
                        <textarea class="form-control" name="dt_descripcion"></textarea>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    <div class="col-6 text-end">
                        
                            <a href="{{ route('cortes.index') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection