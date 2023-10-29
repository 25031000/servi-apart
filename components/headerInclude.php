<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="overflow: hidden;">
<header class="py-4 px-3 px-md-5  w-100 d-flex align-items-center justify-content-between">
        <div >
            <img id="menu-btn" width="24" height="24" role="button" src="icons/Menu.png" alt="">
        </div>
        <div class="d-flex ">
            <img width="42" height="42" class="rounded-5 ml-3 ml-5" src="images/ghost.png" alt="">
            <button class="px-4 py-2 rounded-2 bg-none text-black perfil-btn ms-3 border-none">Perfil</button>
        
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    
    <script>
        $('#menu-btn').click(() => {

        $('#menu-modal').attr('transition-style', 'in:wipe:down')
        $('#menu-modal').css({
            display: 'block'
        })
        $('body').css({
            overflowY: "hidden" 
        })
        })

        //close icon on modal
        $('#close').click(() => {

        $('#menu-modal').attr('transition-style', 'out:wipe:down')
        setTimeout(() => {
           $('body').css({
            overflowY: "scroll"
        }) 
        }, 1200);
        

        })
    </script>
</body>
</html>