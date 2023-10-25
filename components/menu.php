<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu.css">
    <main transition-style="in:wipe:down" id="menu-modal" class="p-0 position-absolute top-0 left-0 container-fluid">
        <div id="title" class="position-absolute d-none d-md-block">
            <h2 class=" text-end">SERVI</h2>
            <h2 >APART</h2>
        </div>
        <nav class="navbar-modal w-100 px-2 py-4 px-sm-4">
            <img id="close" role="button" width="28" height="28" class="ms-4 pe-auto " src="icons/close.png" alt="">
        </nav>
        <section class="section-modal d-flex flex-column justify-content-center w-100">
            <nav class="list ">
                <div  role="button" id="first-li" class="list-group-item  item-list d-flex justify-content-between text-white py-2 w-auto ">
                    <a href="paqueteria.php" class="chocolate">Paqueteria</a>
                     
                    <div>
                        <img class="first-arrow" style="transform: rotate(-90deg);" src="icons/arrow.png" alt="">
                    </div>
                </div>
                
                <div  id="second-li" role="button" class="list-group-item item-list  d-flex justify-content-between text-white py-2 w-auto">
                    <a href="vehiculo.php" class="chocolate">Vehiculos</a>
                     
                    <div>
                        <img class="second-arrow" style="transform: rotate(-45deg);" src="icons/arrow.png" alt="">
                    </div>
                </div>

                <div  id="second-li" role="button" class="list-group-item item-list  d-flex justify-content-between text-white py-2 w-auto">
                    <a href="salonComunal.php" class="chocolate">Salon Comunal </a>
                    
                    <div>
                        <img class="second-arrow" style="transform: rotate(-45deg);" src="icons/arrow.png" alt="">
                    </div>
                </div>

                <div  id="second-li" role="button" class="list-group-item item-list  d-flex justify-content-between text-white py-2 w-auto">
                    <a href="publicaciones.php" class="chocolate">Publicaciones</a>
                    
                    <div>
                        <img class="second-arrow" style="transform: rotate(-45deg);" src="icons/arrow.png" alt="">
                    </div>
                </div>

                <div  role="button" id="third-li" class="list-group-item  item-list d-flex justify-content-between text-white py-2 w-auto">
                    <a href="homePS.php" class="chocolate">Home </a>
                    
                    <div>
                        <img src="icons/arrow.png" class="third-arrow" alt="">
                    </div>
                </div>
            </nav>
        </section>
        <footer class="w-100 d-flex  justify-content-center justify-content-sm-start align-items-center">
            <p class="ms-sm-5 fw-light text-white d-flex align-items-center">Soporte <img class="mx-2" width="20" height="20" src="icons/arrow-left.png" alt=""> admin@gmail.com</p>
        </footer>
    </main>
