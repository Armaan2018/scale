<section>
                <section class="hbox stretch">
                    <!-- .aside -->
                    <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                        <section class="vbox">
                            <section class="w-f scrollable">
                                <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                    <div class="clearfix wrapper dk nav-user hidden-xs">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <span class="thumb avatar pull-left m-r"> <img src="images/a0.png" class="dker" alt="..." /> <i class="on md b-black"></i> </span>
                                                <span class="hidden-nav-xs clear">
                                                    <span class="block m-t-xs"> <strong class="font-bold text-lt"><?php echo $_SESSION['uname'] ?></strong> <b class="caret"></b> </span> <span class="text-muted text-xs block">Art Director</span>
                                                </span>
                                            </a>
                                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                                <li><span class="arrow top hidden-nav-xs"></span> <a href="#">Settings</a></li>
                                                <li><a href="profile.php">Profile</a></li>
                                                <li>
                                                    <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                                                </li>
                                                <li><a href="docs.html">Help</a></li>
                                                <li class="divider"></li>
                                                <li><a href="?logout=success">Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- nav -->


<?php include_once 'templates/leftmenu.php' ?>




                                    <!-- / nav -->
                                </div>
                            </section>
                            <footer class="footer hidden-xs no-padder text-center-nav-xs">
                                <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a>
                                <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a>
                            </footer>
                        </section>
                    </aside>
                    <!-- /.aside -->
