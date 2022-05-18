<div class="modal fade text-left" id="Update{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Edit Data </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('endorse.update',[$item->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label>Nama: </label>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                    </div>

                    <label>Nama Perusahaan: </label>
                    <div class="form-group">
                        <input type="text" name="company" class="form-control" value="{{ $item->company }}">
                    </div>

                    <label>Alamat Perusahaan: </label>
                    <div class="form-group">
                        <input type="text" name="address_company" class="form-control" value="{{ $item->address_company }}">
                    </div>

                    <label>Umur: </label>
                    <div class="form-group">
                        <input type="number" name="age" class="form-control" value="{{ $item->age }}">
                    </div>

                    <label>Alamat: </label>
                    <div class="form-group">
                        <input type="text" name="address"  class="form-control" value="{{ $item->address }}">
                    </div>

                    <label>Foto: </label>
                    <div class="form-group">
                        <input type="file" name="foto" class="form-control" value="{{ $item->foto }}">
                    </div>

                    <label>Harga: </label>
                    <div class="form-group">
                        <input type="number" name="price" class="form-control" value="{{ number_format($item->price) }}">
                    </div>

                    <label>Deskripsi: </label>
                    <div class="form-group">
                        <textarea type="text" name="description" class="form-control" rows="3">{{ $item->description }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="Delete{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('transaction.destroy',[$item->id]) }}" method="POST">
                @csrf
                @method('delete')
                <div class="modal-body">
                    Apakah data ingin dihapus
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
