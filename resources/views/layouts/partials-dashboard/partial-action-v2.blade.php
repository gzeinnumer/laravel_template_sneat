<td>
    @if ($model->id_his == 0)
        <button type="button" class="btn btn-sm rounded-pill btn-secondary" onclick="showdialogfind({{ $model->id }})"><i class="bx bxs-info-circle"></i></button>
    @else
        <button type="button" class="btn btn-sm rounded-pill btn-success" onclick="showdialogrestore({{ $model->id }})"><i class='bx bx-recycle'></i></button>
    @endif
</td>
