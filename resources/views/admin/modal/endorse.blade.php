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
                        <input type="text" name="nama" placeholder="Nama" class="form-control" value="{{ $item->nama }}">
                    </div>
                    <label>Umur: </label>
                    <div class="form-group">
                        <input type="text" name="umur" placeholder="Umur" class="form-control" value="{{ $item->umur }}">
                    </div>
                    <label>Alamat: </label>
                    <div class="form-group">
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="{{ $item->alamat }}">
                    </div>

                    <label>Nama Instagram: </label>
                    <div class="form-group">
                        <input type="text" name="instagram" placeholder="Nama Instagram" class="form-control" value="{{ $item->instagram }}">
                    </div>

                    <label>Jumlah Follower : </label>
                    <div class="form-group">
                        <input type="text" name="number" placeholder="Jumlah Follower" class="form-control" value="{{ $item->number }}">
                    </div>
                    <label>Tinggi Badan: </label>
                    <div class="form-group">
                        <input type="text" name="tinggi" placeholder="Tinggi Badan" class="form-control" value="{{ $item->tinggi }}">
                    </div>
                    <label>Berat Badan: </label>
                    <div class="form-group">
                        <input type="text" name="berat" placeholder="Berat Badan" class="form-control" value="{{ $item->berat }}">
                    </div>


                    <label>Foto: </label>
                    <div class="form-group">
                        <input type="file" name="foto" placeholder="foto" class="form-control" value="{{ $item->foto }}">
                    </div>


                    <label>Minat & Bakat: </label>
                    <div class="form-group">
                        <textarea type="text" name="minat" placeholder="Minat & Bakat" class="form-control" rows="3">{{ $item->minat }}</textarea>
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
