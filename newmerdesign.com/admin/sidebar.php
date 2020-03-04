<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o "></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars "></i></a>
                <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle"></i>ÇIKIŞ</a>

            </div>
        </nav>
 <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                   <div class="inner-text">
                        <h4><b>Hoşgeldin Keko</b></h4>
                        <br />
                        <small>
                            <?php 
                                $sifre="newdesign347";
                                echo md5($sifre);
                             ?>
                        </small>
                   </div>


                    <li>
                        <a href="adminIndex.php"><i class="fa fa-dashboard "></i>Ana Sayfa</a>
                    </li>
                    <li>
                        <a href="ayarlar.php"><i class="fa fa-dashboard "></i>Ayarlar</a>
                    </li>
                     <li>
                        <a href="fotograf.php"><i class="fa fa-dashboard "></i>Fotoğraflar</a>
                    </li>
                     <li>
                        <a href="../index.php"><i class="fa fa-dashboard "></i>Site Ana Sayfa</a>
                    </li>
                    <li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li><li>.</li>
                    
                     
                </ul>

            </div>

        </nav>
    </div>