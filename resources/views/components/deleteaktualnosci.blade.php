<div class="modal" id="delete{{$aktualnosc->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content" style="border-radius: 0;">
            <div class="modal-body modaldelete">
                Usunąć aktualność?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn paddingsmall cancelbtn" style="position: absolute; left: 15px; color: #555555 !important;" data-dismiss="modal">Anuluj</button>
                <a href="{{url("deleteaktualnosc/$aktualnosc->id" )}}"><button type="button" class="btn btn-danger paddingsmall">Usuń</button></a>
            </div>
        </div>
    </div>
</div>