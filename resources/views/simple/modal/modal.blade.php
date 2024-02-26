@foreach ($data as $item)
    <div id="modal-{{ $item->id }}" class="modal">
        <div class="modal-content">
            <h4>Hapus Item</h4>
            <p>Apakah Anda yakin ingin Menghapus item ini?</p>
        </div>
        <div class="modal-footer" style="padding: 0px 15px 40px 0px;">
            <form action="{{ route('simple.destroy', $item->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <button class="modal-action modal-close waves-effect waves-green btn red m-r-10 m-b-10">Hapus</button>
            </form>
        </div>
    </div>
@endforeach