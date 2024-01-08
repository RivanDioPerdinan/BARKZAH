@extends('pelanggan.layout.index')

@section('content')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <h3 class="mt-5 mb-5" style="color: white">Cart Shopping</h3>
    @if (!$data)
    @else
        @foreach ($data as $x)
            <div class="card mb-3">
                <div class="card-body d-flex gap-4">
                    <img src="{{ asset('storage/product/' . $x->product->foto) }}" width="300" height="200" alt="">
                    <form action="{{ route('checkout.product', ['id' => $x->id]) }}" method="POST" id="form_{{ $x->product->id }}">
                        @csrf
                        <div class="desc w-100">
                            <p style="font-size:24px; font-weight:700;">{{ $x->product->nama_produk }}</p>
                            <input type="hidden" name="idBarang" value="{{ $x->product->id }}">
                            <input type="number" class="form-control border-0 fs-1" name="harga" id="harga"
                                value="{{ $x->product->harga }}">
                            <div class="row mb-2">
                                <label for="qty" class="col-sm-2 col-form-label fs-5 d-flex">Quantity</label>
                                <div class="col-sm-5 d-flex">
                                    <input type="number" name="qty" class="form-control w-25 text-center qty"
                                        id="qty" name="qty" value="{{ $x->qty }}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="price" class="col-sm-2 col-form-label fs-5">Total</label>
                                <input type="text" class="col-sm-2 form-control w-25 border-0 fs-4 total" name="total"
                                    readonly id="total">
                            </div>
                            <div class="row w-50 gap-1">
                                <button type="submit" class="btn btn-success col-sm-5">
                                    <i class="fa fa-shopping-cart"></i>
                                    Checkout
                                </button>
                                <button class="btn btn-danger col-sm-5 deleteBtn" data-id="{{ $x->product->id }}">
                                    <i class="fa fa-trash-alt"></i>
                                    Delete
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    @endif

    <script>
        $(document).ready(function() {
            $('.deleteBtn').on('click', function(e) {
                e.preventDefault();
                var id = $(this).data('id');

                if (confirm('Apakah Anda yakin? Item akan dihapus dari keranjang belanja.')) {
                    // Hapus card dari DOM setelah penghapusan berhasil
                    $.ajax({
                        type: 'POST',
                        url: '{{ route("deleteItem") }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: id
                        },
                        success: function(response) {
                            if (response.success) {
                                $('#form_' + id).closest('.card').remove();
                                alert('Item berhasil dihapus.');
                            } else {
                                alert('Item tidak dapat dihapus.');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            alert('Terjadi kesalahan saat menghapus item.');
                        }
                    });
                }
            });
        });
    </script>
    

@endsection
