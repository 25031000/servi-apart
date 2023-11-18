/* $('#input_img').change(function(){
    const file = $(this)[0].files[0];

    const fileName= file.name; 

    const formData = new FormData()

    formData.append('file', file)
    formData.append('filename', fileName)

    $.ajax({
        url: "../Controllers/modificarFotoRes.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response){
            console.log(response);
        },
        error: function (err) {
            console.log(err);
        }
    })

    console.log(file);
}) */