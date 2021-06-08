@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-2">
                <div class="card">
                    <div class="card-header">{{ __('Crear nueva materia:') }}</div>

                    <div class="card-body">
                        <form action="#" class="row" @submit.prevent="submit()">
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Materia" required
                                       v-model="form.nombre">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="Docente" required
                                       v-model="form.docente">
                            </div>
                            <div class="col-3">
                                <select class="form-control" required v-model="form.tipo_materia">
                                    <option value="">-- Tipo Materia --</option>
                                    @foreach(\App\Materia::TIPO_MATERIA as $materia)
                                        <option value="{{$materia}}">{{$materia}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-1">
                                <button type="submit" class="btn btn-outline-success">
                                    +
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <div class="card">
                    <div class="card-header">
                        {{ __('Lista de materias') }}
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <tbody>
                            <tr v-for="row in table">
                                <td>@{{ row.id }}</td>
                                <td><input type="text" required class="form-control form-control-sm"
                                           v-model="row.nombre"></td>
                                <td><input type="text" required class="form-control form-control-sm"
                                           v-model="row.docente"></td>
                                <td>
                                    <select class="form-control form-control-sm" required v-model="row.tipo_materia">
                                        <option value="">-- Tipo Materia --</option>
                                        @foreach(\App\Materia::TIPO_MATERIA as $materia)
                                            <option value="{{$materia}}">{{$materia}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-info" @click="updateRow(row)">&duarr;
                                        Actualizar
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" @click="deleteRow(row.id)">&times;
                                        Borrar
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
