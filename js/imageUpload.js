$("#upload_form").on( "submit", function(event) {//on form submit
    if(!window.File && window.FileReader && window.FileList && window.Blob){ //if browser doesn't supports File API
        alert("Your browser does not support new File API! Please upgrade.");
    }
})