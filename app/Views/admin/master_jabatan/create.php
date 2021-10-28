<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('/jabatan/save'); ?>" id="myFormId">
                <div class="modal-body">
                    <div>
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="nama_jabatan">Nama Jabatan</label>
                            <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal" onclick="resetForm('myFormId'); return false;">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function resetForm(myFormId) {
        var myForm = document.getElementById(myFormId);

        for (var i = 0; i < myForm.elements.length; i++) {
            if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type) {
                myForm.elements[i].checked = false;
                myForm.elements[i].value = '';
                myForm.elements[i].selectedIndex = 0;
            }
        }
    }
</script>