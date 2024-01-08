@extends('pelanggan.layout.index')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>Payment List</h5>
            </div>
            <div class="card-body">
                <table class="table table-responsive table-striped">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Id Transaksi</th>
                            <th>Nama Penerima</th>
                            {{-- <th>Total Transaksi</th> --}}
                            <th>Status</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
                        @foreach ($data as $x => $item)
                            <tr>
                                <td>{{ ++$x }}</td>
                                <td>{{ $item->code_transaksi }}</td>
                                <td>{{ $item->nama_pembeli }}</td>
                                {{-- <td>{{ $item->total_harga }}</td> --}}
                                <td>
                                    @if ($item->status === 'Unpaid')
                                        <span class="badge text-bg-danger">Unpaid</span>
                                    @else
                                        <span class="badge text-bg-success">Paid</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('keranjang.bayar', ['id' => $item->id]) }}"
                                        class="btn btn-success btn-bayar" data-id="{{ $item->id }}">Bayar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pastikan Anda sudah memuat jQuery sebelumnya -->
<script>
    $(document).ready(function() {
        $('body').on('click', '.btn-bayar', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                type: 'POST',
                url: '{{ route("ubahStatus") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                success: function(response) {
                    if (response.success) {
                        window.location.href = '/checkOut/' + id; // Arahkan ke halaman checkOut setelah pembayaran berhasil
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    // Tampilkan pesan atau notifikasi jika terjadi kesalahan
                }
            });
        });
    });
</script>

@endsection
