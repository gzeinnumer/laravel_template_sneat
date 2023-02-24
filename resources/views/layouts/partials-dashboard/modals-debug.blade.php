<div class="modal fade" id="modal-debug" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start py-4">
                <h5 class="modal-title" id="modals-debug-title">Scrollable modal</h5>
                <p id="modals-debug-msg"></p>
            </div>
            <div class="modal-footer">
                <a target="_blank" href="{{ route('debug') }}" type="button" class="btn btn-success">View In Json</a>
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="$('#modal-debug').modal('hide');">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function showModalDebug(title, msg) {
        document.getElementById('modals-debug-title').innerHTML = title;
        document.getElementById('modals-debug-msg').innerHTML = msg;
        $('#modal-debug').modal('show');
    }
</script>
