$(document).ready(function () {
    const parentContainer = $('#parent');

    parentContainer.on('click','.btn-add-benefit', function(){
        parentContainer.find('#benefit').append(`<div class="form-row">
                                                <div class="form-group col-md-5">
                                                    <label>Title<span class="note">*</span> <img class="img-flag" src="/images/flag/en.jpg"></label>
                                                    <input name="title_en[]"  type="text" class="form-control mb-3">
                                                   <label>Text <img class="img-flag" src="/images/flag/en.jpg"></label>
                                                    <textarea name="text_en[]" cols="30" class="form-control" id="text_en"rows="4"></textarea>
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label>Title <img class="img-flag" src="/images/flag/kh.jpg"></label>
                                                    <input name="title_kh[]" type="text" class="form-control mb-3">
            
                                                    <label>Text <img class="img-flag" src="/images/flag/kh.jpg"></label>
                                                    <textarea name="text_kh" cols="30" class="form-control" id="text_kh" rows="4"></textarea>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group text-center mb-1">
                                                        <h6>Icon Image </h6>
                                                        <p class="note mb-1">(500px * 500px)</p>
                                                        <img class="img-fluid" src="/images/benefit.png" alt="Image">
                                                       <input type="file" name="icon_img" accept="image/x-png,image/jpg" class="file-hidden preview-image " value="submit" id="icon_img">
                                                    </div>
                                                    <div class="text-center">
                                                        <label for="icon_img" class="btn btn-info text-white btn-sm mt-2"><i class="fa fa-window-maximize"></i> Browse</label>
                                                    </div>
                                                   <div class="btn-add text-center">
                                                       <div class="input-group-append">
                                                           <span class="btn btn-danger btn-add-benefit">Remove</span>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>`)
    });

    parentContainer.on('click', '.btn-remove', function () {
        $(this).closest('tr').remove();

    });
});