<div id="modal" class="modal" tabindex="-1" role="dialog">
    <form action="" method="post" id="form_modal_delete">
        @csrf
        @method('DELETE')
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <p><i class="fa fa-exclamation-triangle red"></i>Bạn có chắc muốn xóa không?</p>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="id" id="del_modal_id" />
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                <button type="submit" class="btn btn-primary" >Đồng ý</button>
              </div>
            </div>
          </div>
    </form>
</div>