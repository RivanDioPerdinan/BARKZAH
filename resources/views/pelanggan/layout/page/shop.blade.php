@extends('pelanggan.layout.index')

@section('content')
    <div class="d-flex flex-row gap-2 mt-4">
        {{-- <div class="" style="width: 30%;">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Category
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Trail
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column gap-4">
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="category" class="category" value="motor">
                                            <span>Motor</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="category" class="category" value="sparepart">
                                            <span>Sparepart</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="category" class="category" value="perlengkapankeselamatan">
                                            <span>Perlengkapan Keselamatan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Matic
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-0">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="category" class="category"
                                                    value="motor">
                                                <span>Motor</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="category" class="category" value="sparepart">
                                                <span>Sparepart</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="category" class="category"
                                                    value="perlengkapankeselamatan">
                                                <span>Perlengkapan Keselamatan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Sport
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body p-0">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="category" class="category"
                                                    value="motor">
                                                <span>Motor</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="category" class="category"
                                                    value="sparepart">
                                                <span>Sparepart</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="category" class="category"
                                                    value="perlengkapankeselamatan">
                                                <span>Perlengkapan Keselamatan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Classic
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body p-0">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="category" class="category"
                                                    value="motor">
                                                <span>Motor</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="category" class="category"
                                                    value="sparepart">
                                                <span>Sparepart</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="category" class="category"
                                                    value="perlengkapankeselamatan">
                                                <span>Perlengkapan Keselamatan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="d-flex flex-wrap gap-4 mb-5" id="filterResult">
            @if ($data->isEmpty())
                <h1>Belum ada product ...!</h1>
            @else
                @foreach ($data as $p)
                    <div class="card" style="width:200px;">
                        <div class="card-header m-auto">
                            <img src="{{ asset('storage/product/' . $p->foto) }}" alt="motor"
                                style="width: 100%;height:130px; object-fit: cover; padding:0;">
                        </div>
                        <div class="card-body">
                            <p class="m-0 text-justify" style="font-size: 14px;"> {{ $p->nama_produk }} </p>
                            <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
                        </div>
                        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                            <p class="m-0" style="font-size: 14px; font-weight:600;"><span>IDR
                                </span>{{ number_format($p->harga) }}</p>
                                <form action="{{route('addTocart')}}" method="POST">
                                  @csrf
                                  <input type="hidden" name="idProduct" value="{{$p->id}}">
                                  <button type="submit" class="btn btn-outline-primary" style="font-size:24px">
                                      <i class="fa-solid fa-cart-plus"></i>
                                  </button>
                                </form>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    <div class="pagination d-flex flex-row justify-content-between" style="color: white">
        <div class="showData">
            Data ditampilkan {{ $data->count() }} dari {{ $data->total() }}
        </div>
        <div>
            {{ $data->links() }}
        </div>
    </div>
    @endif

    <script>
        $(document).ready(function() {
            $('.kategori').change(function(e) {
                e.preventDefault();
                var value = $(this).val();
                var split = value.split(' ');
                var kategori = split[0];
                var tipe = split[1];
                // alert(type);
                $.ajax({
                    type: "GET",
                    url: "{{ route('shop') }}",
                    data: {
                        kategori: kategori,
                        tipe: tipe,
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
@endsection
