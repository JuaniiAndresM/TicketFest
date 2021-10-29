<?php
session_start();
if(!isset($_SESSION['Usuario'])){
    header('Location: /TicketFest/Form/Login.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/TicketFest/media/img/Favicon.png" type="image/x-icon">

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://kit.fontawesome.com/1e193e3a23.js' crossorigin='anonymous'></script>
    <script src="/TicketFest/Javascript/loader.js"></script>
    <script src="/TicketFest/Javascript/Form/Usuario.js"></script>
    <script src="/TicketFest/Javascript/Tickets/TicketList.js"></script>
    <script src="/TicketFest/Javascript/Tickets/Tickets.js"></script>
    <script src="/TicketFest/Javascript/Tickets/functionTickets.js"></script>
    <script src="/TicketFest/Javascript/web.js"></script>

    <link rel="stylesheet" href="/TicketFest/styles/styles.css">
    
    <title>TicketFest | Crear Ticket</title>
</head>
<body>

    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div class="app-background">
        <div class="background"></div>
        <div class="circle"></div>
        <div class="circle2"></div>
        <div class="circle"></div>
        <div class="circle2"></div>
    </div>

    <div class="content-wrapper">
        <div class="content-header usuario-wrapper">
            <a href="/TicketFest/Menu/Principal.html"><i class="fas fa-angle-left"></i></a>
            <div class="header">
                <div class="profile">
                    <div class="profile-img">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <div class="profile-name">
                        <h2 id="nombre_ticket">Nuevo Ticket</h2>
                        <p id="numTickets"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-tickets">
            <div class="steps">
                <div class="step1"></div>
                <div class="step2"></div>
                <div class="step3"></div>
                <div class="line"></div>
                <div class="complete"></div>                
            </div>

            <div class="create-ticket">
                <div class="step1-create">
                    <div class="input">
                        <i class="fas fa-ticket-alt"></i>
                        <input type="text" name="titulo_ticket" placeholder="Titulo del Ticket" id="titulo" required>
                    </div>
                    <div class="input">
                        <i class="far fa-calendar-alt"></i>
                        <input type="date" name="fecha_ticket" placeholder="Fecha del Ticket" id="fecha" required>
                    </div>
                    <button onclick="step1_continue()"><i class="fas fa-arrow-right"></i> Siguiente</button>
                </div>
                <div class="step2-create">
                    <div class="input">
                        <i class="fas fa-tag"></i>
                        <input type="text" name="nombre_participante" placeholder="Nombre" id="nombre_participante" required>
                    </div>
                    <div class="input-half">
                        <div class="input">
                            <i class="fas fa-user-friends"></i>
                            <input type="number" name="cantidad_participantes" placeholder="Cantidad" id="cantidad_participantes" required>
                        </div>
                        <div class="input">
                            <i class="fas fa-money-bill-wave"></i>
                            <input type="number" name="valor_participante" placeholder="Valor" id="valor_participante" required>
                        </div>
                    </div>

                    <button onclick="step2_add()"><i class="fas fa-user-plus"></i> Añadir</button>
                    <div class="input-half">
                        <button onclick="step2_list()"><i class="fas fa-users"></i> Lista</button>
                        <button onclick="step2_continue()"><i class="fas fa-arrow-right"></i> Siguiente</button>
                    </div>
                </div>

                <div class="step3-create">
                    <div class="ticket-info">
                        <h2>Nuevo Ticket</h2>
                        <p class="desc">Verifique la siguiente información.</p>

                        <div class="info">
                            <p><b><i class="fas fa-tag"></i> Titulo: </b> Titulo del Ticket</p>
                            <p><b><i class="far fa-calendar-alt"></i> Fecha: </b> 31/12/2021</p>
                            <p><b><i class="fas fa-user-friends"></i> Participantes: </b></p>
                        </div>
                        <div class="participantes-list">
                            <div class="participante">
                                <div class="participante-img">
                                    <i class="fas fa-user-friends"></i>
                                </div>
                                <div class="participante-body">
                                    <h2>Nombre del Integrante</h2>
                                    <div class="info">
                                        <p><i class="fas fa-user"></i> 3</p>
                                        <p><i class="fas fa-money-bill-wave"></i> $450</p>
                                    </div>
                                </div>
                            </div>

                            <div class="participante">
                                <div class="participante-img">
                                    <i class="fas fa-user-friends"></i>
                                </div>
                                <div class="participante-body">
                                    <h2>Nombre del Integrante</h2>
                                    <div class="info">
                                        <p><i class="fas fa-user"></i> 3</p>
                                        <p><i class="fas fa-money-bill-wave"></i> $450</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <button onclick="create_ticket()"><i class="fas fa-plus"></i> Crear Ticket</button>
                </div>

                <div class="integrantes-list">
                    <div class="no-participantes">
                        <p><i class="fas fa-user-friends"></i> No hay personas agregadas.</p>
                    </div>
                    <div class="cantidad-participantes">
                        <p><i class="fas fa-user-friends"></i> 2 Participantes</p>
                    </div>
                    <div class="participantes">

                        <div class="participante">
                            <div class="participante-img">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="participante-body">
                                <h2>Nombre del Integrante</h2>
                                <div class="info">
                                    <p><i class="fas fa-user"></i> 3</p>
                                    <p><i class="fas fa-money-bill-wave"></i> $450</p>
                                </div>
                            </div>
                            <div class="delete">
                                <button><i class="fas fa-times"></i></button>
                            </div>
                        </div>

                        <div class="participante">
                            <div class="participante-img">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="participante-body">
                                <h2>Nombre del Integrante</h2>
                                <div class="info">
                                    <p><i class="fas fa-user"></i> 3</p>
                                    <p><i class="fas fa-money-bill-wave"></i> $450</p>
                                </div>
                            </div>
                            <div class="delete">
                                    <button><i class="fas fa-times"></i></button>
                            </div>
                        </div>

                    </div>
                    <button onclick="step2_list_hide()"><i class="fas fa-arrow-left"></i> Atras</button>
                </div>
                
            </div>
        </div>

        <div id="bottom-menu"></div>
    </div>
    
</body>
</html>