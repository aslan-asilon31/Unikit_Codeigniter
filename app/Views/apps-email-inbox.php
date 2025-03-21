<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Unikit")) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body id="body" class="dark-sidebar">
<!-- leftbar-tab-menu -->
<?= $this->include('partials/left-sidebar') ?>
<!-- end leftbar-tab-menu-->

<!-- Top Bar Start -->
<?= $this->include('partials/topbar') ?>
<!-- Top Bar End -->

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Unikit</a></li>
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item active">Inbox</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Inbox</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <!-- Left sidebar -->
                    <div class="email-leftbar">
                        <button type="button" class="btn btn-primary  w-100 " data-bs-toggle="modal"
                                data-animation="bounce" data-bs-target="#compose-modal">
                            <i class="fas fa-feather-alt me-2"></i>Compose
                        </button>

                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="mail-list">
                                    <a href="#" class="active pt-0"><i class="las la-inbox font-15 me-1"></i>Inbox <span
                                                class="ms-1">(5)</span></a>
                                    <a href="#"><i class="las la-star font-15 me-1"></i>Starred</a>
                                    <a href="#"><i class="las la-tag font-15 me-1"></i>Important</a>
                                    <a href="#"><i class="las la-file-alt font-15 me-1"></i>Draft</a>
                                    <a href="#"><i class="las la-paper-plane font-15 me-1"></i>Sent Mail</a>
                                    <a href="#"><i class="las la-trash-alt font-15 me-1"></i>Trash</a>
                                </div>

                                <p class="text-dark my-4 font-weight-bold">Labels</p>
                                <div class="mail-list">
                                    <a href="#"><span
                                                class="mdi mdi-arrow-right-drop-circle text-info float-end"></span><i
                                                class="las la-life-ring font-15 me-1"></i>Theme Support</a>
                                    <a href="#"><span
                                                class="mdi mdi-arrow-right-drop-circle text-warning float-end"></span><i
                                                class="las la-briefcase font-15 me-1"></i>Freelance</a>
                                    <a href="#"><span
                                                class="mdi mdi-arrow-right-drop-circle text-purple float-end"></span><i
                                                class="lab la-google font-15 me-1"></i>Social</a>
                                    <a href="#"><span
                                                class="mdi mdi-arrow-right-drop-circle text-pink float-end"></span><i
                                                class="las la-users font-15 me-1"></i>Friends</a>
                                    <a href="#"><span
                                                class="mdi mdi-arrow-right-drop-circle text-success float-end"></span><i
                                                class="las la-home font-15 me-1"></i>Family</a>
                                </div>

                                <p class="text-dark my-4 font-weight-bold">Chat</p>
                                <div class="">
                                    <a href="#" class="media">
                                        <img class="d-flex me-3 rounded-circle" src="/images/users/user-1.jpg"
                                             alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">Scott Median</p>
                                            <p class="text-muted">Hello</p>
                                        </div>
                                    </a>

                                    <a href="#" class="media">
                                        <img class="d-flex me-3 rounded-circle" src="/images/users/user-2.jpg"
                                             alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">Julian Rosa</p>
                                            <p class="text-muted">What about our next..</p>
                                        </div>
                                    </a>

                                    <a href="#" class="media">
                                        <img class="d-flex me-3 rounded-circle" src="/images/users/user-3.jpg"
                                             alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">David Medina</p>
                                            <p class="text-muted">Yeah everything is fine</p>
                                        </div>
                                    </a>

                                    <a href="#" class="media">
                                        <img class="d-flex me-3 rounded-circle" src="/images/users/user-4.jpg"
                                             alt="Generic placeholder image" height="36">
                                        <div class="media-body chat-user-box">
                                            <p class="user-title m-0">Jay Baker</p>
                                            <p class="text-muted">Wow that's great</p>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- End Left sidebar -->


                    <!-- Right Sidebar -->
                    <div class="email-rightbar">
                        <div class="float-end d-flex justify-content-between">
                            <div class="btn-group ms-1">
                                <button type="button" class="btn  btn-de-secondary  dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-question-circle"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Updates</a>
                                    <a class="dropdown-item" href="#">Social</a>
                                    <a class="dropdown-item" href="#">Team Manage</a>
                                </div>
                            </div>
                            <div class="btn-group ms-1">
                                <button type="button" class="btn  btn-de-secondary  dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-cog"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Display density</a>
                                    <a class="dropdown-item" href="#">Themes</a>
                                    <a class="dropdown-item" href="#">Help</a>
                                </div>
                            </div>
                        </div><!-- end div -->
                        <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn  btn-de-secondary "><i class="fas fa-inbox"></i>
                                </button>
                                <button type="button" class="btn  btn-de-secondary "><i
                                            class="fas fa-exclamation-circle"></i></button>
                                <button type="button" class="btn  btn-de-secondary "><i class="fas fa-trash"></i>
                                </button>
                            </div>
                            <div class="btn-group ms-1">
                                <button type="button" class="btn  btn-de-secondary  dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-folder"></i><i class="mdi mdi-chevron-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Updates</a>
                                    <a class="dropdown-item" href="#">Social</a>
                                    <a class="dropdown-item" href="#">Team Manage</a>
                                </div>
                            </div>
                            <div class="btn-group ms-1">
                                <button type="button" class="btn  btn-de-secondary  dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-tag"></i><i class="mdi mdi-chevron-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Updates</a>
                                    <a class="dropdown-item" href="#">Social</a>
                                    <a class="dropdown-item" href="#">Team Manage</a>
                                </div>
                            </div>

                            <div class="btn-group ms-1">
                                <button type="button" class="btn  btn-de-secondary  dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    More<i class="mdi mdi-chevron-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Mark as Unread</a>
                                    <a class="dropdown-item" href="#">Mark as Important</a>
                                    <a class="dropdown-item" href="#">Add to Tasks</a>
                                    <a class="dropdown-item" href="#">Add Star</a>
                                    <a class="dropdown-item" href="#">Mute</a>
                                </div>
                            </div>
                        </div><!-- end toolbar -->


                        <div class="card my-3">
                            <ul class="message-list">
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk19">
                                            <label for="chk19" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Peter, me (3)</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Hello &nbsp;–&nbsp; <span class="teaser">Trip home from 🎉 Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                        </a>
                                        <div class="date">Mar. 6</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk20">
                                            <label for="chk20" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">me, Susanna (7)</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject"><span
                                                    class="badge-soft-warning badge me-2">Freelance</span>Since you
                                            asked... and i'm
                                            inconceivably bored at the train station &nbsp;–&nbsp;
                                            <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                        </a>
                                        <div class="date">Mar. 6</div>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk6">
                                            <label for="chk6" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Web Support Dennis</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Re: New mail settings &nbsp;–&nbsp;
                                            <span class="teaser">Will you answer him asap?</span>
                                        </a>
                                        <div class="date">Mar 7</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk7">
                                            <label for="chk7" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">me, Peter (2)</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>

                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject"><span
                                                    class="badge-soft-info badge me-2">Support</span>Off on Thursday
                                            &nbsp;–&nbsp;
                                            <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4 &gt; 4 mar 2014 at 5:55 pm</span>
                                        </a>
                                        <div class="date">Mar 4</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk8">
                                            <label for="chk8" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Medium</p><span class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject"><span
                                                    class="badge-soft-purple badge me-2">Social</span>This Week's Top
                                            Stories &nbsp;–&nbsp;
                                            <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                        </a>
                                        <div class="date">Feb 28</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk9">
                                            <label for="chk9" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Death to Stock</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">🎁 Montly High-Res Photos &nbsp;–&nbsp;
                                            <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                        </a>
                                        <div class="date">Feb 28</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" checked id="chk3">
                                            <label for="chk3" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Randy, me (5)</p><span
                                                    class="star-toggle fas fa-star text-warning"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject"><span
                                                    class="badge-soft-success badge me-2">Family</span>Last pic over my
                                            village &nbsp;–&nbsp;
                                            <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                        </a>
                                        <div class="date">5:01 am</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk4">
                                            <label for="chk4" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Andrew Zimmer</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Mochila Beta: Subscription Confirmed
                                            &nbsp;–&nbsp; <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                        </a>
                                        <div class="date">Mar 8</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk5">
                                            <label for="chk5" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Infinity HR</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Sveriges Hetaste sommarjobb &nbsp;–&nbsp; 👌
                                            <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                        </a>
                                        <div class="date">Mar 8</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk10">
                                            <label for="chk10" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Revibe</p><span class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject"><span
                                                    class="badge-soft-pink badge me-2">Friends</span>Weekend on Revibe
                                            &nbsp;–&nbsp;
                                            <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                        </a>
                                        <div class="date">Feb 27</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk11">
                                            <label for="chk11" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Erik, me (5)</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Regarding our meeting &nbsp;–&nbsp;
                                            <span class="teaser">That's great, see you on Thursday!</span>
                                        </a>
                                        <div class="date">Feb 24</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk12">
                                            <label for="chk12" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">KanbanFlow</p><span class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject"><span
                                                    class="badge-soft-purple badge me-2">Social</span>Task assigned:
                                            Clone ARP's website
                                            &nbsp;–&nbsp; <span class="teaser">You have been assigned 💥 a task by Alex@Work on the board Web.</span>
                                        </a>
                                        <div class="date">Feb 24</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk13">
                                            <label for="chk13" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Tobias Berggren</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Let's go fishing! &nbsp;–&nbsp;
                                            <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                        </a>
                                        <div class="date">Feb 23</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk14">
                                            <label for="chk14" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Charukaw, me (7)</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Hey man &nbsp;–&nbsp; <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                        </a>
                                        <div class="date">Feb 23</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" checked id="chk15">
                                            <label for="chk15" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">me, Peter (5)</p><span
                                                    class="star-toggle fas fa-star text-warning"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject"><span
                                                    class="badge-soft-info badge me-2">Support</span>Home again! &nbsp;–&nbsp;
                                            <span class="teaser">That's just perfect! See you tomorrow.</span>
                                        </a>
                                        <div class="date">Feb 21</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk16">
                                            <label for="chk16" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Stack Exchange</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">1 new items in your Stackexchange inbox
                                            &nbsp;–&nbsp; <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                        </a>
                                        <div class="date">Feb 21</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk17">
                                            <label for="chk17" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">Google Drive Team</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">You can now use your storage in Google
                                            Drive &nbsp;–&nbsp; <span class="teaser">Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.</span>
                                        </a>
                                        <div class="date">Feb 20</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk18">
                                            <label for="chk18" class="toggle"></label>
                                        </div>
                                        <a href="">
                                            <p class="title">me, Susanna (11)</p><span
                                                    class="star-toggle far fa-star"></span>
                                        </a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Train/Bus &nbsp;–&nbsp; <span class="teaser">Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.🏏</span>
                                        </a>
                                        <div class="date">Feb 19</div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- panel -->

                        <div class="row mb-3">
                            <div class="col-7 align-self-center">
                                Showing 1 - 20 of 1,524
                            </div><!-- end Col -->
                            <div class="col-5">
                                <div class="btn-group float-end">
                                    <button type="button" class="btn  btn-de-secondary waves-effect mb-0"><i
                                                class="fa fa-chevron-left"></i></button>
                                    <button type="button" class="btn  btn-de-secondary waves-effect mb-0"><i
                                                class="fa fa-chevron-right"></i></button>
                                </div>
                            </div><!-- end Col -->
                        </div> <!--end row-->
                    </div> <!-- end email-rightbar -->
                </div><!-- end Col -->
            </div><!-- End row -->

        </div><!-- container -->

        <!--Start Rightbar-->
        <?= $this->include('partials/right-sidebar') ?>
        <!--end Rightbar-->

        <!--Start Footer-->
        <?= $this->include('partials/footer') ?>
        <!--end footer-->
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

<div class="modal fade bd-example-modal-lg" id="compose-modal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="myLargeModalLabel">Compose Mail</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <form method="post">
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" placeholder="To">
                    </div><!--end form-group-->
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Cc">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Bcc">
                            </div>
                        </div>
                    </div><!--end form-group-->
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div><!--end form-group-->
                    <textarea id="basic-conf">Hello, World!</textarea>
                </form>
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button class="btn btn-de-primary "><span>Send</span> <i class="far fa-paper-plane ms-2"></i></button>
                <button type="button" class="btn btn-de-danger " data-bs-dismiss="modal"><span>Delete</span><i
                            class="far fa-trash-alt ms-2"></i></button>
            </div><!--end modal-footer-->
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->


<!-- javascript  -->
<script src="/libs/tinymce/tinymce.min.js"></script>
<script src="/pages/form-editor.init.js"></script>

<!-- App js -->
<script src="/js/app.js"></script>

</body>

</html>