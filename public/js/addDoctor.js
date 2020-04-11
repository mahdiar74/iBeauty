var jqxhr = $.ajax({
    url: '/admin/doctor/createGallery',
    method: 'POST',
    data : {
        "_token" :  $("[name=_token]").val(),
        "type": "image"
    },
    success:function(response){
        if(response){
            $("#imageGalleryId").val(response);
            $("#imgGalleryId").val(response);
        }
    }
});
jqxhr = $.ajax({
    url: '/admin/doctor/createGallery',
    method: 'POST',
    data : {
        "_token" :  $("[name=_token]").val(),
        "type": "video"
    },
    success:function(response){
        if(response){
            $("#videoGalleryId").val(response);
            $("#vidGalleryId").val(response);
        }
    }
});

var dropZone = $("#dropZone");
dropZone = dropZone.dropzone({
    uploadMultiple:false,
    success: function(response){
        console.log(response.xhr.responseText)
    }
});

var dropZoneVideo = $("#dropZoneVideo");
dropZoneVideo = dropZoneVideo.dropzone({
    success: function(response){
        console.log(response.xhr.responseText)
    }
});
Dropzone.autoDiscover = false;

$("#submit").on("click",function(){
    $("#create-doctor").submit();
});

$(document).on("ready",function(){
    $("[name='avatar']").dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove':  'Remove',
            'error':   'Ooops, something wrong happended.'
        },
        error: {
            'fileSize': 'The file size is too big ({{ value }} max).',
            'minWidth': 'The image width is too small ({{ value }}}px min).',
            'maxWidth': 'The image width is too big ({{ value }}}px max).',
            'minHeight': 'The image height is too small ({{ value }}}px min).',
            'maxHeight': 'The image height is too big ({{ value }}px max).',
            'imageFormat': 'The image format is not allowed ({{ value }} only).'
        }
    });
});
