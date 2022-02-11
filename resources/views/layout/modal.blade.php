<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('input')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="inputName">Nama Pegawai</label>
                <input type="text" name="nama" class="form-control" id="inputName" placeholder="Masukan Nama Pegawai"/ required>
            </div>
            <div class="form-group">
                <label for="inputEmail">Jabatan</label>
                 <select name='posisi' class="form-control" required>
                  <option value=''>-- pilih Jabatan --</option>
                  <option value='manager'>Manager</option>
                  <option value='supervisor'>Supervisor</option>
                  <option value='staff'>Staff</option>
                 </select>
            </div>
            <div class="form-group">
                <label for="inputName">Gaji Pokok</label>
                <input type="text" name="gaji" class="form-control" id="angka" placeholder="Masukan Gaji Pokok"/>
            </div>
            <div class="form-group">
                <label for="inputName">Potongan 10%</label>
                <input type="text" name="potongan" class="form-control" id="potongan" placeholder="Masukan Potongan"/>
            </div>
            <div class="form-group">
                <label for="inputName">PPH 21</label>
                <input type="text" name="pph21" class="form-control" id="pph" placeholder="Masukan pph21"/>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<!--end of modal-->