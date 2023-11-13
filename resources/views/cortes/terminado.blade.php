@extends('layouts.layoutmain')
@section('content')
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
      <div class="bg-light rounded h-100 p-4 table-responsive">
        <h6 class="mb-4"><a class="btn btn-primary btn-sm" href="{{ route('cortes.new')}}">Nuevo Registro</a></h6>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Folio</th>
              <th scope="col">Corte</th>
              <th scope="col">Baño</th>
              <th scope="col">Estatus</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cortes as $corte)
            <tr>
              <th scope="row">{{$corte->id}}</th>
              <td>{{$corte->dt_folionum}}</td>
              <td>{{$corte->dt_corte}}</td>
              <td>{{$corte->dt_bano}}</td>
              <td><a href="" data-bs-toggle="modal" data-bs-target="#modal2-{{$corte->id}}"><span class="badge rounded-pill bg-primary">{{$corte->dt_status}}</span></a></td>
              <td><a href="" data-bs-toggle="modal" data-bs-target="#modal-{{$corte->id}}"><span class="badge rounded-pill bg-warning text-dark">VER MÁS</span></a></td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="modal2-{{$corte->id}}" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Más información</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    <form class="row g-3" method="POST" action="{{ route('cortes.updatealm') }}">
                      @csrf
                      <div class="col-md-12">
                        <input type="hidden" name="id" value="{{$corte->id}}">
                      </div>
                      <div class="col-md-12">
                        <label class="form-label">Estatus</label>
                        <select class="form-select" name="dt_status">
                          <option selected>Elije...</option>
                          <option>ALMACEN</option>
                          <option> EN PROCESO</option>
                          <option>TERMINADO</option>
                          <option>ENTREGADO</option>
                        </select>
                      </div>
                      <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal-{{$corte->id}}" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Más información</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6 text-center">
                        <h6>Folio</h6>
                        <span>{{$corte->dt_folionum}}</span>
                        <h6>Clave</h6>
                        <span>{{$corte->dt_clave}}</span>
                        <h6 class="mt-4">Talla</h6>
                        <span class="badge rounded-pill bg-warning text-dark">{{$corte->dt_talla}}</span>
                        <h6 class="mt-4">Piezas</h6>
                        <span class="badge rounded-pill bg-warning text-dark">{{$corte->dt_piezas}}</span>
                        <h6 class="mt-4">Composición</h6>
                        <span>{{$corte->dt_composicion}}</span>
                        <h6 class="mt-4"># Pedido</h6>
                        <span>{{$corte->dt_numpedido}}</span>
                        <h6 class="mt-4">En Proceso</h6>
                        <span>{{$corte->dt_proceso}}</span>
                        <h6 class="mt-4">Entregado</h6>
                        <span>{{$corte->dt_entrega}}</span>
                      </div>
                      <div class="col-6 text-center">
                        <h6>Corte</h6>
                        <span>{{$corte->dt_corte}}</span>
                        <h6>Color</h6>
                        <span>{{$corte->dt_color}}</span>
                        <h6 class="mt-4">Descripción</h6>
                        <span>{{$corte->dt_descripcion}}</span>
                        <h6 class="mt-4">Baño</h6>
                        <span>{{$corte->dt_bano}}</span>
                        <h6 class="mt-4">Bultos</h6>
                        <span class="badge rounded-pill bg-warning text-dark">{{$corte->dt_numbulto}}</span>
                        <h6 class="mt-4">Hilos</h6>
                        <span class="badge rounded-pill bg-warning text-dark">{{$corte->dt_codhilos}}</span>
                        <h6 class="mt-4">Ingreso Almacen</h6>
                        <span>{{$corte->dt_ingreso}}</span>
                        <h6 class="mt-4">Terminado</h6>
                        <span>{{$corte->dt_terminado}}</span>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                      Cerrar
                    </button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection