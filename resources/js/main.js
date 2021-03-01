var base_url= window.location.origin+'/';
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var csrf_token= $("#csrf_token").val();
$(document).ready(function(){
    $('.date').datepicker({
        format: 'yyyy-mm-dd'
    });
    var html='';
    html = '<div class="form-group"><label for="email">OBC Category:<span class="star">*</span></label><select id="disabledSelect" class="form-control"><option>Disabled select</option></select></div>'
    $("input[name='casterad']").change(function () {
        $(this).val() === 'OBC' ? $('#appendobcsub').append(html).show() : $('#appendobcsub').empty().hide();
    });
    $("input[name='casterad']:checked").val()==='OBC' ? $('#appendobcsub').append(html).show() : $('#appendobcsub').empty().hide();
})
$('#district').on('change', function () {
    $ajax.({
        url:base_url+{{ route('ajaxRequest.post') }},
        data:,
        dataType:,
        type:'POST',
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
})

