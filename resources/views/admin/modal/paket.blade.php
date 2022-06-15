<div class="modal fade text-left" id="Update{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Edit Data </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('paket.update',[$item->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label>Nama Endorse: </label>
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Nama Endorse" class="form-control" value="{{ $item-> }}">
                    </div>
                    <label>Nama Paket : </label>
                    <div class="form-group">
                        <input type="text" name="nama" placeholder="Nama Paket" class="form-control" value="{{ $item->nama }}">
                    </div>
                    <label>Keterangan: </label>
                    <div class="form-group">
                        <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" value="{{ $item->keterangan }}">
                    </div>

                    <label>Harga : </label>
                    <div class="form-group">
                        <input type="text" name="harga" placeholder="Nama Instagram" class="form-control" value="{{ $item->harga }}">
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
            <form action="{{ route('endorse.destroy',[$item->id]) }}" method="POST">
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
