<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('updateData', $data->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="SKU" class="col-sm-5 col-form-label">SKU</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control-plaintext" id="SKU" name="sku"
                                value="{{ $data->sku }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nameProduct" class="col-sm-5 col-form-label">Product Name</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="nameProduct" name="nama"
                                value="{{ $data->nama_produk }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type" class="col-sm-5 col-form-label">Type Product</label>
                        <div class="col-sm-7">
                            <select type="text" class="form-control" id="type" name="type">
                                <option value=""> Pilih Type </option>
                                <option value="motor" {{ $data->tipe === 'motor' ? 'selected' : '' }}>Motor</option>
                                <option value="sparepart" {{ $data->tipe === 'sparepart' ? 'selected' : '' }}>Sparepart</option>
                                <option value="perlengkapankeselamatan" {{ $data->tipe === 'perlengkapankeselamatan' ? 'selected' : '' }}>Perlengkapan Keselamatan
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-5 col-form-label">Category Product</label>
                        <div class="col-sm-7">
                            <select type="text" class="form-control" id="kategori" name="kategori">
                                <option value=""> Select Category </option>
                                <option value="Trail" {{ $data->kategori === 'trail' ? 'selected' : '' }}>Trail</option>
                                <option value="Matic" {{ $data->kategori === 'matic' ? 'selected' : '' }}>Matic
                                </option>
                                <option value="Sport" {{ $data->kategori === 'sport' ? 'selected' : '' }}>Sport
                                </option>
                                <option value="Classic" {{ $data->kategori === 'classic' ? 'selected' : '' }}>
                                    Classic</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-5 col-form-label">Price Product</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="harga" name="harga"
                                value="{{ $data->harga }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="quantity" class="col-sm-5 col-form-label">Quantity Product</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                value="{{ $data->quantity }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="foto" class="col-sm-5 col-form-label">Photo Product</label>
                        <div class="col-sm-7">
                            <input type="hidden" name="foto" value="{{$data->foto}}">
                            <img src="{{ asset('storage/product/' . $data->foto) }}" class="mb-2 preview"
                                style="width: 100px;">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="inputFoto"
                                name="foto" onchange="previewImg()">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImg() {
        const fotoIn = document.querySelector('#inputFoto');
        const preview = document.querySelector('.preview');

        preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(fotoIn.files[0]);

        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
        }
    }
</script>
