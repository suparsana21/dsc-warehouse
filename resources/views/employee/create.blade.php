@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-6">
            <h5 class="u-mb-medium">Form Pegawai</h5>
                <div class="c-card u-p-medium u-mb-medium">
                    @if ($errors->any())
                        <div class="c-alert c-alert--danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('employee.store')}}" class="form-control" method="POST">
                        @csrf
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Nomor Pegawai</label>
                            <input class="c-input" id="" name="no_pegawai" type="text" placeholder="Nomor Pegawai">
                        </div>
                        
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Nama</label>
                            <input class="c-input" id="" name="name" type="name" placeholder="Nama Pegawai">
                        </div>
                        
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Jenis Kelamin</label>
                            <input class="c-input" id="" name="jenis_kelamin" type="text" placeholder="Jenis Kelamin Pegawai">
                        </div>

                        <div class="c-field u-mb-small">
                            <button class="c-btn c-btn--success" type="submit">Save</button>
                            <a href="{{route('employee.index')}}" class="c-btn c-btn--warning">Cancel</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection