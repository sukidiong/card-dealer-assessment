$(document).ready(function() {
    $('#cardDealer').validate({
        rules: {
            numberofppl: {
                required: true,
                min: 1,
                number:true
            },
        },
        messages: {
            numberofppl: {
                required: "Input value does not exist or value is invalid",
                min: "Input value does not exist or value is invalid",
                number: "Input value does not exist or value is invalid"
            },
        }
    });

    $('#cardDealer').submit(function(e){
        e.preventDefault();
        $('#cardResult').html('');
        if($('#cardDealer').valid()){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "/card/deal",
                method: 'post',
                data: {
                    numberofppl: $('#numberofppl').val(),
                },
                success: function(response){
                    if (response && response.success == true) {
                        $.each(response.result, function (i,arr){
                            c = arr.join(",")
                            $('#cardResult').append('<p class="row">'+c+'</p>');
                        });
                        $('#cardResult').parent().show();
                    }else{
                        $('#cardResult').parent().hide();
                    }
                },
                error: function(obj,text,error){
                    alert("Irregularity occured");
                    window.location.reload();
                }
            });
        }else{
            $('#cardResult').parent().hide();
        }
    });
});