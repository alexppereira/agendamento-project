@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Paciente</div>
                <form action="{{ url('pacientes/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @method('PUT')

                        @csrf

                        <div class="form-group">
                            <label for="saudacao">Saudação</label>
                            <select id="saudacao" name="saudacao" class="form-control">
                                <option value="">Selecione...</option>
                                <option value="Sr." {{ old('saudacao', $data->saudacao) == 'Sr.' ? ' selected' : ''}}>
                                    Sr.</option>
                                <option value="Sra." {{ old('saudacao', $data->saudacao) == 'Sra.' ? ' selected' : ''}}>
                                    Sra.</option>
                                <option value="Srta."
                                    {{ old('saudacao', $data->saudacao) == 'Srta.' ? ' selected' : ''}}>Srta.</option>
                            </select>
                            <div class="invalid-feedback">{{ $errors->first('saudacao') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" required class="form-control{{$errors->has('nome') ? ' is-invalid':''}}"
                                value="{{ old('nome', $data->nome) }}" id="nome" name="nome">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" required
                                class="form-control{{$errors->has('telefone') ? ' is-invalid':''}}"
                                value="{{ old('telefone', $data->telefone) }}" id="telefone" name="telefone">
                            <div class="invalid-feedback">{{ $errors->first('telefone') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}}"
                                value="{{ old('email', $data->email) }}" id="email" name="email"
                                placeholder="email@provedor.com.br">
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="data_nascimento">D. Nascimento</label>
                            <input type="text"
                                class="form-control{{$errors->has('data_nascimento') ? ' is-invalid':''}}"
                                id="data_nascimento" value="{{ old('data_nascimento', $data->data_nascimento) }}"
                                name="data_nascimento" placeholder="00/00/0000">
                            <div class="invalid-feedback">{{ $errors->first('data_nascimento') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="altura">Altura</label>
                            <input type="number" type="number" step="0.01"
                                class="form-control{{$errors->has('altura') ? ' is-invalid':''}}" id="altura"
                                value="{{ old('altura', $data->altura) }}" name="altura" placeholder="0.00">
                            <div class="invalid-feedback">{{ $errors->first('altura') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="peso">Peso</label>
                            <input type="number" step="0.01"
                                class="form-control{{$errors->has('peso') ? ' is-invalid':''}}" id="peso"
                                value="{{ old('peso', $data->peso)}}" name="peso" placeholder="0.00">
                            <div class="invalid-feedback">{{ $errors->first('peso') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="avatar">Avatar</label>
                            <input type="file" class="form-control-file{{$errors->has('avatar') ? ' is-invalid':''}}"
                                id="avatar" name="avatar" accept=".jpg, .jpeg, .png .gif">
                            <div class="invalid-feedback" style="display:inherit">{{ $errors->first('avatar') }}</div>

                        </div>
                        <div class="form-group">
                            <label for="nota">Nota</label>
                            <textarea class="form-control" id="nota" name="nota"
                                rows="5">{{ old('nota', $data->nota) }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection