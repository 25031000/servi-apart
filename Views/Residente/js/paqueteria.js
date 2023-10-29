
/*****************************************************************************
 * 
 * HOVER ANIMATION
 * 
 *****************************************************************************
*/

//ICON ANIMATION
$('.history-icon').mouseover(function(e){
    $('.history-text').css({
        color: "red"
    })
    $('.history-icon').attr('color', 'red');
})

$('.history-icon').mouseleave(function(e){
    $('.history-text').css({
        color: "#a8a6a6"
    })
    $('.history-icon').attr('color', '#a8a6a6');
})

//TEXT ICON ANIMATION

$('.history-text').mouseover(function(e){
    $('.history-text').css({
        color: "red"
    })
    $('.history-icon').attr('color', 'red');
})

$('.history-text').mouseleave(function(e){
    $('.history-text').css({
        color: "#a8a6a6"
    })
    $('.history-icon').attr('color', '#a8a6a6');
})


/*****************************************************************************
 * 
 * LOGICA PARA ELIMINAR EL HISTORIAL
 * 
 *****************************************************************************
*/

$('.history-icon').click(function(){
    Swal.fire({
        icon: 'question',
        title: '¿Estas seguro?',
        text: 'El registro de los paquetes relacionados a tu apartamento desapareceran',
        showDenyButton: true,
        confirmButtonText: "Limpiar",
        denyButtonText: "Cancelar"
      }).then((result)=>{
        if (result.isConfirmed) {
            const fecthOptions = {
                method: "POST",
                headers:{
                    'Content-Type': 'text/plain'
                },
                body: 'one hundred'
            }
            
            fetch('../../Controllers/eliminarHistorialPaqueteria.php', fecthOptions)
            .then(response => response.text())
            .then((data) => console.log(data))
            .catch(error => {
                // Handle any errors
                console.error(error);
            })
        }else if(result.isDenied){
            return;            

        }
      })
})

$('.history-text').click(function(){
    Swal.fire({
        icon: 'question',
        title: '¿Estas seguro?',
        text: 'El registro de los paquetes relacionados a tu apartamento desapareceran',
        showDenyButton: true,
        confirmButtonText: "Limpiar",
        denyButtonText: "Cancelar"
      }).then(async (result)=>{
        if (result.isConfirmed) {
            const fecthOptions = {
                method: "POST",
                headers:{
                    'Content-Type': 'text/plain'
                },
                body: 'true'
            }  
            
            try {
                let response = await fetch('../../Controllers/eliminarHistorialPaqueteria.php', fecthOptions);
                let responseParsed = await response.text();
                console.log(responseParsed);
            } catch (error) {
                console.log(error);
            }
        }else if(result.isDenied){
            return;           

        }
      })
})