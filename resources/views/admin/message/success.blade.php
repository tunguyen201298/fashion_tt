<div class="row">
    <div class="col-xs-12">
        <div id="flash_message">
            @if(Session::has('message'))
            <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissable">
                <button data-dismiss="alert" class="close" type="button">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                {{Session::get('message')}}
            </div>
            @endif
        </div>
    </div>
</div>