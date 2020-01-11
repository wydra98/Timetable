
<head>
    <style>
    .nav-item{
        margin-right: 20px;
        padding-left: 5px;}
    </style>
 
</head>
<body>
    <header style="font-weight: bold;
    font-family: 'Quicksand', sans-serif;">
        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <a href ="?page=main" ><img src="../Public/img/Repeat Grid 3.png" width="130" height="50" style="margin-top: -22px"></a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
				<span class="navbar-toggler-icon" ></span>
            </button>

            <div class="collapse navbar-collapse navbar-right" id="menu">
               <ul class="navbar-nav ml-auto" >
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">TYDZIEŃ</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?page=weekOne" method="POST">Tydzień pierwszy</a>
                            <a class="dropdown-item" href="?page=weekTwo">Tydzień drugi</a>
                        </div>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#code">KOD PLANU</a>
                        <div class="modal fade" id="code" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:green; color:white;font-weight:normal;">
                                        Kod planu
                                    </div>
                                    <div class="modal-body">
                                        Twój kod planu to : <?php echo $_SESSION['code'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"  data-href="?page=delete" data-toggle="modal" data-target="#confirm-delete">USUŃ PLAN</a>
                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#8E0000; color:white;font-weight:normal;">
                                        Czy na pewno chcesz usunąć plan?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
                                        <a class="btn btn-danger btn-ok">Usuń</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

   <script src="..\..\JQuery\jquery-3.4.1.js"></script>
   <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
   </script>
</body>
