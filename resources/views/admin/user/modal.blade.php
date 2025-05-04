
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white" id="exampleModalLabel">Hapus {{$title}}?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-white">&times;</span>
          </button>
        </div>
        
        <div class="modal-body text-left">
            <div class="row">
                <div class="col-6">
                    Nama
                </div>
                <div class="col-6">
                    : {{ $item->nama }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Email
                </div>
                <div class="col-6">
                    : {{ $item->email }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Jabatan
                </div>
                <div class="col-6">
                    : {{ $item->Jabatan }}
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
                <i class="fas fa-times"></i> Tutup
            </button>
            <form action="{{ route('userDestroy', $item->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i>Hancurkan
                </button>
            </form>
        </div>
      </div>
    </div>
  </div>