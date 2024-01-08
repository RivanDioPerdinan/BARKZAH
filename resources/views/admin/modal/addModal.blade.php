<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('addData')}}" enctype="multipart/form-data" method="POST">
             @csrf
             <div class="modal-body">
                <div class="mb-3 row">
                  <label for="SKU" class="col-sm-5 col-form-label">SKU</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control-plaintext" id="SKU" name="sku" value="{{$sku}}" readonly>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="nama_produk" class="col-sm-5 col-form-label">Product Name</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="tipe" class="col-sm-5 col-form-label">Product Type</label>
                  <div class="col-sm-7">
                    <select type="text" class="form-control" id="tipe" name="tipe">
                      <option value="">Select Type</option>
                      <option value="motor">Motor</option>
                      <option value="sparepart">Sparepart</option>
                      <option value="perlengkapankeselamatan">Perlengkapan Keselamatan</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="kategori" class="col-sm-5 col-form-label">Product Category</label>
                  <div class="col-sm-7">
                    <select type="text" class="form-control" id="kategori" name="kategori">
                      <option value="">Select Category</option>
                      <option value="trail">Trail</option>
                      <option value="matic">Matic</option>
                      <option value="sport">Sport</option>
                      <option value="classic">Classic</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="harga" class="col-sm-5 col-form-label">Product Price</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control" id="harga" name="harga">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label for="quantity" class="col-sm-5 col-form-label">Product Quantity</label>
                    <div class="col-sm-7">
                      <input type="number" class="form-control" id="quantity" name="quantity">
                    </div>
                </div>
                <div class="mb-3 row">
                  <label for="foto" class="col-sm-5 col-form-label">Foto Product</label>
                  <div class="col-sm-7">
                      <input type="hidden" name="foto">
                      <img class="mb-2 preview"
                          style="width: 100px;">
                      <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="inputFoto"
                          name="foto" onchange="previewImg()">
                  </div>
                </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
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