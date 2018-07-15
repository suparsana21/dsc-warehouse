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
                    <form action="{{route('product.store')}}" class="form-control" method="POST">
                        @csrf
                        
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Nama Produk</label>
                            <input class="c-input" id="" name="name" type="name" placeholder="Nama Produk">
                        </div>
                        
                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">ID Kategori</label>
                            <select name="category_id" id="">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Harga Produk</label>
                            <input type="number" name="price" placeholder="Harga Produk">
                        </div>

                        <div class="c-field u-mb-small">
                            <label class="c-field__label" for="">Deskripsi Produk</label>
                            <textarea name="description" id="" cols="30" rows="10"></textarea>
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