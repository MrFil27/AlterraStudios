<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        header("Location: ../../../../index.php");
        exit;
    }

    $username = $_SESSION['username'] ?? null;
    $user_id = $_SESSION['user_id'] ?? null;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Didattix | Home</title>
    <link rel="shortcut icon" href="../../../../private/image/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../../../../private/css/style.css">
</head>
<body>
    <header>
        <div class="logo" title="DiDattix">
            <img src="../../../../private/images/logo.png" alt="logo">
            <h2>Di<span class="danger">Dattix</span></h2>
        </div>
        <div class="navbar">
            <a href="student.php?user=<?= urlencode($user_id) ?>" class="active">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="student.php?user=<?= urlencode($user_id) ?>" onclick="timeTableAll()">
                <span class="material-icons-sharp">today</span>
                <h3>Orario</h3>
            </a> 
            <a href="student.php?user=<?= urlencode($user_id) ?>">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Esami</h3>
            </a>
            <a href="../password.php?user=<?= urlencode($user_id) ?>">
                <span class="material-icons-sharp">password</span>
                <h3>Cambia password</h3>
            </a>
            <a href="../../../../private/php/sessions/logout.php">
                <span class="material-icons-sharp" onclick="">logout</span>
                <h3>Esci</h3>
            </a>
        </div>
        <div id="profile-btn">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
    </header>
    <div class="container">
        <aside>
            <div class="profile">
                <div class="top">
                    <div class="profile-photo">
                        <img src="../../../../private/images/user-icon.png" alt="user">
                    </div>
                    <div class="info">
                        <p>Ciao, <b><?= htmlspecialchars($_SESSION['username'] ?? 'Utente') ?></b></p>
                        <small class="text-muted">12102030</small>
                    </div>
                </div>
                <div class="about">
                    <h5>Corsi</h5>
                    <p>BTech. Computer Science & Engineering</p>
                    <h5>DOB</h5>
                    <p>29-Feb-2020</p>
                    <h5>Contatti</h5>
                    <p>1234567890</p>
                    <h5>Email</h5>
                    <p>unknown@gmail.com</p>
                    <h5>Indirizzo</h5>
                    <p></p>
                </div>
            </div>
        </aside>

        <main>
            <h1>Valutazioni</h1>
            <div class="subjects">
                <div class="eg">
                    <span class="material-icons-sharp">book</span>
                    <h3>1A</h3>
                </div>
                <div class="mth">
                    <span class="material-icons-sharp">book</span>
                    <h3>2A</h3>
                </div>
                <div class="cs">
                    <span class="material-icons-sharp">book</span>
                    <h3>3A</h3>
                </div>
                <div class="cg">
                    <span class="material-icons-sharp">book</span>
                    <h3>1B</h3>
                </div>
                <div class="net">
                    <span class="material-icons-sharp">book</span>
                    <h3>2B</h3>
                </div>
                <div class="cs">
                    <span class="material-icons-sharp">book</span>
                    <h3>3B</h3>
                </div>
                <div class="cg">
                    <span class="material-icons-sharp">book</span>
                    <h3>1C</h3>
                </div>
                <div class="net">
                    <span class="material-icons-sharp">book</span>
                    <h3>2C</h3>
                </div>
                <div class="mth">
                    <span class="material-icons-sharp">book</span>
                    <h3>3C</h3>
                </div>
                <div class="eg">
                    <span class="material-icons-sharp">book</span>
                    <h3>1D</h3>
                </div>
                <div class="cs">
                    <span class="material-icons-sharp">book</span>
                    <h3>2D</h3>
                </div>
                <div class="cg">
                    <span class="material-icons-sharp">book</span>
                    <h3>3D</h3>
                </div>
            </div>

            <br><br>
            <h1>Annotazioni</h1>
            <div class="subjects">
                <div class="eg">
                    <span class="material-icons-sharp">book</span>
                    <h3>1A</h3>
                </div>
                <div class="mth">
                    <span class="material-icons-sharp">book</span>
                    <h3>2A</h3>
                </div>
                <div class="cs">
                    <span class="material-icons-sharp">book</span>
                    <h3>3A</h3>
                </div>
                <div class="cg">
                    <span class="material-icons-sharp">book</span>
                    <h3>1B</h3>
                </div>
            </div>
            
            <br><br>
            <h1>Compiti</h1>
            <div class="subjects">
                <div class="eg">
                    <span class="material-icons-sharp">book</span>
                    <h3>1A</h3>
                </div>
                <div class="mth">
                    <span class="material-icons-sharp">book</span>
                    <h3>2A</h3>
                </div>
                <div class="cs">
                    <span class="material-icons-sharp">book</span>
                    <h3>3A</h3>
                </div>
                <div class="cg">
                    <span class="material-icons-sharp">book</span>
                    <h3>1B</h3>
                </div>
            </div>

            <div class="timetable" id="timetable">
                <div>
                    <span id="prevDay">&lt;</span>
                    <h2>Orario giornaliero</h2>
                    <span id="nextDay">&gt;</span>
                </div>
                <span class="closeBtn" onclick="timeTableAll()">X</span>
                <table>
                    <thead>
                        <tr>
                            <th>Ore</th>
                            <th>Aula</th>
                            <th>Materia</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </main>

        <div class="right">
            <div class="announcements">
                <h2>Circolari recenti</h2>
                <div class="updates">
                    <div class="message">
                        <p><b>Scolastico</b><br>Tirocinio formativo estivo presso l'azienda micra.</p>
                        <small class="text-muted">2 minuti fa</small>
                    </div>
                    <div class="message">
                        <p><b>Attività extracurriculari</b><br>Opportunità di tirocinio globale da parte di un'organizzazione studentesca.</p>
                        <small class="text-muted">10 minuti fa</small>
                    </div>
                    <div class="message">
                        <p><b>Esami</b><br>Istruzioni per i test del fine trimestre.</p>
                        <small class="text-muted">Ieri</small>
                    </div>
                </div>
            </div>

            <div class="leaves">
                <h2>Insegnanti in congedo</h2>
                <div class="teacher">
                    <div class="profile-photo"><img src="../../../../private/images/user-icon.png" alt="pf"></div>
                    <div class="info">
                        <h3>Edoardo Moretti</h3>
                        <small class="text-muted">Intera giornata</small>
                    </div>
                </div>
                <div class="teacher">
                    <div class="profile-photo"><img src="../../../../private/images/user-icon.png" alt="pf"></div>
                    <div class="info">
                        <h3>Fioroni Alessio</h3>
                        <small class="text-muted">Mezza giornata</small>
                    </div>
                </div>
                <div class="teacher">
                    <div class="profile-photo"><img src="../../../../private/images/user-icon.png" alt="pf"></div>
                    <div class="info">
                        <h3>Damiano Perri</h3>
                        <small class="text-muted">Intera giornata</small>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="../../../../private/js/app.js"></script>
    <script src="../../../../private/js/app.js"></script>
</body>
</html>