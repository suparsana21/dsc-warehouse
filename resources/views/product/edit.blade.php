@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-6">
            <h5 class="u-mb-medium">Edit {{$product->name}}</h5>
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
                    <form action="{{route('product.update',['id' => $product->id])}}" class="form-control" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Nama Produk</label>
                            <input class="c-input" id="" name="name" type="name" placeholder="Alamat" value="{{$product->name}}">
                        </div>

                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Kategori</label>
                            <textarea name="alamat" id="" cols="30" rows="10">{{ $product->alamat }}</textarea>
                        </div>

                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Jenis Kelamin</label>
                            <input class="c-input" id="" name="jenis_kelamin" type="jenis_kelamin" placeholder="Jenis Kelamin" value="{{$product->jenis_kelamin}}">
                        </div>
                        
                        <div class="c-field u-mb-small">
                            <button class="c-btn c-btn--success" type="submit">Save</button>
                            <a href="{{route('product.index')}}" class="c-btn c-btn--warning">Cancel</a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection