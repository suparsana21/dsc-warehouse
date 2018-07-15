@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
                <a class="c-btn c-btn--info pull-right" href="{{route('product-category.create')}}">Tambah Baru</a> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
                <table class="c-table">
                        <thead class="c-table__head">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head">ID</th>
                                <th class="c-table__cell c-table__cell--head">Nama</th>
                                <th class="c-table__cell c-table__cell--head" width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                                <tr class="c-table__row">
                                    <td class="c-table__cell">{{$data->id}}</td>
                                    <td class="c-table__cell">{{$data->name}}</td>
                                <td class="c-table__cell"><a href="{{route("product-category.edit",['id' => $data->id])}}" class="c-btn c-btn--warning c-btn--small">Edit</a> <a class="c-btn c-btn--danger c-btn--small delete-btn" data-id="{{$data->id}}"  >Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(".delete-btn").click(function(){
            let id = $(this).attr('data-id');
            if(confirm("Apa anda yakin akan menghapus? ")) {
                $.ajax({
                    url : "{{url('/')}}/product-category/"+id,
                    method : "POST",
                    data : {
                        _token : "{{csrf_token()}}",
                        _method : "DELETE",
                    }
                })
                .then(function(data){
                    location.reload();
                });
            }
        })
    </script>
@endpush