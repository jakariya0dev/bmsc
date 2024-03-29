<?php 
  
  $con = mysqli_connect("localhost","root","","bmsc") or die("Connection failed");
  $sql = "select * from notice";
  $result = mysqli_query($con, $sql) or die("Query Failed");
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Owl Carousal -->
    <link rel="stylesheet" href="./assets/plugins/css/owlcarousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="./assets/plugins/css/owlcarousel/owl.theme.default.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <div class="container bg-white">
            <img src="./imgs/banner.jpg" alt="" class="img-fluid" />
        </div>
    </header>
    <div class="container bg-white sticky-top">
        <nav class="navbar navbar-expand-lg bg-primary-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">হোম</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">প্রতিষ্ঠান সম্পর্কে</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">বাণী</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">প্রতিষ্ঠানের বৈশিষ্ট্য</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">শিক্ষক মণ্ডলী</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">ফটো গ্যালারি</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">প্রতিষ্ঠানের অর্জন</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ডাউনলোড কর্নার
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <section id="hero">
        <div class="container bg-white">

            <!-- Slider Start -->
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/id/11/1200/300" class="d-block w-100 h-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>
                                        Some representative placeholder content for the first
                                        slide.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/id/13/1200/300" class="d-block w-100 h-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>
                                        Some representative placeholder content for the second
                                        slide.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/id/14/1200/300" class="d-block w-100 h-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>
                                        Some representative placeholder content for the third
                                        slide.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Slider End -->

            <!-- Breaking News Start-->
            <div class="bg-primary-dark text-white my-3 px-2">
                <div class="row">
                    <div class="col-auto pt-2">বিশেষ বিজ্ঞপ্তিঃ</div>
                    <div class="col w-100 pt-2">
                        <marquee behavior="" direction="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Soluta blanditiis optio non eveniet id, perferendis quam, at
                            officiis et facilis quisquam earum exercitationem accusamus eos
                            nesciunt natus nobis aut tenetur!</marquee>
                    </div>
                </div>
            </div>

            <!-- Breaking News End-->

            <div class="row">
                <!-- Main Content Start-->
                <div class="col-md-9">
                    <p class="title">আমাদের প্রতিষ্ঠান সম্পর্কে</p>
                    <div class="h-rule"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-img">
                                <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/1/200/300" alt="" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="about-content">
                                <p>
                                    এ প্রতিষ্ঠানের কার্যক্রমকে আরো যুগোপযোগী ও আধুনিক করার
                                    লক্ষ্যে বিভিন্ন প্রকল্প হাতে নেয়া হয়েছে। একটি আর্ন্তজাতিক
                                    মানসম্পন্ন ওয়েবসাইট চালুকরণ তার একটি অংশ মাত্র। যার মাধ্যমে
                                    আমাদের বিদ্যালয়ের বিভিন্ন তথ্য ও ছবি বিশ্বব্যাপী ছড়িয়ে পড়বে
                                    এবং প্রতিষ্ঠানের ছত্র-ছাত্রীরা ঘরে বসেই পরীক্ষার রুটিন,
                                    সিলেবাস, হাজিরা, ভর্তি ফরম পাবে। অভিভাবকরাও ঘরে বসেই
                                    উত্তরোত্তর তাদের সন্তানের পরীক্ষার ফল, আচরণিক পরিবর্তন,
                                    সাফল্য, আত্নপ্রকাশ ক্ষমতা সম্পর্কে জানতে পারবে। এরই
                                    ফলশ্রতিতে বর্তমান সরকারের “ভিশন-২০২১” বাস্তবায়ন প্রক্রিয়া
                                    চলমান থাকবে-এ দৃঢ় প্রত্যয় ব্যক্ত করছি।
                                </p>
                                <p>
                                    পাশাপাশি শিক্ষক-শিক্ষার্থী ও অভিভাবকদের মধ্যে সুসম্পর্ক তৈরি
                                    হবে এবং মুসলিম মডার্ন একাডেমির প্রাক্তন, বর্তমান ও অনাগত
                                    শিক্ষক-শিক্ষাথী, অভিভাবক, শুভানুধ্যায়ী, মহৎপ্রাণ ব্যক্তিগণ
                                    তাদের প্রিয় প্রতিষ্ঠানের ইতিহাস, ঐতিহ্য,
                                    শিক্ষক-শিক্ষার্থীদের তথ্য, বিভিন্ন অর্জন, বিজ্ঞপ্তি ও
                                    অন্যান্য তথ্য সমূহ দেখে উপকৃত কিংবা শিহরিত হবেন। দূর থেকে
                                    আমাদের অন্তরাত্নার রাখি বন্ধনে আবদ্ধ হবেন। এতে এ
                                    প্রতিষ্ঠানের সামগ্রিক মানোন্নয়নে একটি নতুন মাত্রিকতা যোগ হবে
                                    বলে আমার বিশ্বাস। তাই মুসলিম মডার্ন একাডেমি ও এ প্রতিষ্ঠান
                                    সংশ্লিষ্ট সকলকে শুভেছা জানিয়ে এ ওয়েবসাইটের শুভ সূচনালগ্নে
                                    শুভকামনা করছি।
                                </p>
                            </div>
                        </div>
                    </div>

                    <p class="title">সভাপতির বাণী</p>
                    <div class="h-rule"></div>

                    <div class="speech-item">
                        <div class="row">
                            <div class="col-4">
                                <div class="speech-img text-center">
                                    <img src="https://picsum.photos/id/13/200/500"
                                        class="img-thumbnail img-fluid w-100 h-100 mb-3" alt="" srcset="" />
                                    <h3 class="mb-0">মোঃ আব্দুল আলিম</h3>
                                    <p>সভাপতি</p>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="speech-content">
                                    <p>
                                        জ্ঞানই শক্তি জ্ঞানই আলো। শিক্ষাই গতি, শিক্ষাই করবে দূর
                                        জগতের যত কালো। শিক্ষাই পারে তথ্য প্রযুক্তির সঠিক প্রয়োগ ও
                                        বাস্তবায়নের মাধ্যমে মানুষের জীবন ধারাকে উন্নত থেকে উন্নততর
                                        করতে। এ শিক্ষার জন্য, শিক্ষিত জাতির জন্য ১৯৬৩ সাল থেকে
                                        ঢাকা ক্যান্টনমেন্টে জাতীয় কৃষ্টি, সভ্যতা, সংস্কৃতি ও
                                        ঐতিহ্যের ধারক হয়ে নিরলস সেবা দিয়ে যা”ছ মুসলিম মডার্ন
                                        একাডেমি। এ প্রতিষ্ঠানের কার্যক্রমকে আরো যুগোপযোগী ও আধুনিক
                                        করার লক্ষ্যে বিভিন্ন প্রকল্প হাতে নেয়া হয়েছে। একটি
                                        আর্ন্তজাতিক মানসম্পন্ন ওয়েবসাইট চালুকরণ তার একটি অংশ
                                        মাত্র। যার মাধ্যমে আমাদের বিদ্যালয়ের বিভিন্ন তথ্য ও ছবি
                                        বিশ্বব্যাপী ছড়িয়ে পড়বে এবং প্রতিষ্ঠানের ছত্র-ছাত্রীরা ঘরে
                                        বসেই পরীক্ষার রুটিন, সিলেবাস, হাজিরা, ভর্তি ফরম পাবে।
                                        অভিভাবকরাও ঘরে বসেই উত্তরোত্তর তাদের সন্তানের পরীক্ষার ফল,
                                        আচরণিক পরিবর্তন, সাফল্য, আত্নপ্রকাশ ক্ষমতা সম্পর্কে জানতে
                                        পারবে। এরই ফলশ্রতিতে বর্তমান সরকারের “ভিশন-২০২১” বাস্তবায়ন
                                        প্রক্রিয়া চলমান থাকবে-এ দৃঢ় প্রত্যয় ব্যক্ত করছি।
                                    </p>
                                    <p>
                                        জ্ঞানই শক্তি জ্ঞানই আলো। শিক্ষাই গতি, শিক্ষাই করবে দূর
                                        জগতের যত কালো। শিক্ষাই পারে তথ্য প্রযুক্তির সঠিক প্রয়োগ ও
                                        বাস্তবায়নের মাধ্যমে মানুষের জীবন ধারাকে উন্নত থেকে উন্নততর
                                        করতে। এ শিক্ষার জন্য, শিক্ষিত জাতির জন্য ১৯৬৩ সাল থেকে
                                        ঢাকা ক্যান্টনমেন্টে জাতীয় কৃষ্টি, সভ্যতা, সংস্কৃতি ও
                                        ঐতিহ্যের ধারক হয়ে নিরলস সেবা দিয়ে যা”ছ মুসলিম মডার্ন
                                        একাডেমি। এ প্রতিষ্ঠানের কার্যক্রমকে আরো যুগোপযোগী ও আধুনিক
                                        করার লক্ষ্যে বিভিন্ন প্রকল্প হাতে নেয়া হয়েছে। একটি
                                        আর্ন্তজাতিক মানসম্পন্ন ওয়েবসাইট চালুকরণ তার একটি অংশ
                                        মাত্র। যার মাধ্যমে আমাদের বিদ্যালয়ের বিভিন্ন তথ্য ও ছবি
                                        বিশ্বব্যাপী ছড়িয়ে পড়বে এবং প্রতিষ্ঠানের ছত্র-ছাত্রীরা ঘরে
                                        বসেই পরীক্ষার রুটিন, সিলেবাস, হাজিরা, ভর্তি ফরম পাবে।
                                        অভিভাবকরাও ঘরে বসেই উত্তরোত্তর তাদের সন্তানের পরীক্ষার ফল,
                                        আচরণিক পরিবর্তন, সাফল্য, আত্নপ্রকাশ ক্ষমতা সম্পর্কে জানতে
                                        পারবে। এরই ফলশ্রতিতে বর্তমান সরকারের “ভিশন-২০২১” বাস্তবায়ন
                                        প্রক্রিয়া চলমান থাকবে-এ দৃঢ় প্রত্যয় ব্যক্ত করছি।
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="title">অধ্যক্ষ্যের বাণী</p>
                    <div class="h-rule"></div>

                    <div class="speech-item">
                        <div class="row">
                            <div class="col-4">
                                <div class="speech-img text-center">
                                    <img src="https://picsum.photos/id/13/200/500"
                                        class="img-thumbnail img-fluid w-100 h-100 mb-3" alt="" srcset="" />
                                    <h3 class="mb-0">মোঃ আব্দুল আলিম</h3>
                                    <p>সভাপতি</p>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="speech-content">
                                    <p>
                                        জ্ঞানই শক্তি জ্ঞানই আলো। শিক্ষাই গতি, শিক্ষাই করবে দূর
                                        জগতের যত কালো। শিক্ষাই পারে তথ্য প্রযুক্তির সঠিক প্রয়োগ ও
                                        বাস্তবায়নের মাধ্যমে মানুষের জীবন ধারাকে উন্নত থেকে উন্নততর
                                        করতে। এ শিক্ষার জন্য, শিক্ষিত জাতির জন্য ১৯৬৩ সাল থেকে
                                        ঢাকা ক্যান্টনমেন্টে জাতীয় কৃষ্টি, সভ্যতা, সংস্কৃতি ও
                                        ঐতিহ্যের ধারক হয়ে নিরলস সেবা দিয়ে যা”ছ মুসলিম মডার্ন
                                        একাডেমি। এ প্রতিষ্ঠানের কার্যক্রমকে আরো যুগোপযোগী ও আধুনিক
                                        করার লক্ষ্যে বিভিন্ন প্রকল্প হাতে নেয়া হয়েছে। একটি
                                        আর্ন্তজাতিক মানসম্পন্ন ওয়েবসাইট চালুকরণ তার একটি অংশ
                                        মাত্র। যার মাধ্যমে আমাদের বিদ্যালয়ের বিভিন্ন তথ্য ও ছবি
                                        বিশ্বব্যাপী ছড়িয়ে পড়বে এবং প্রতিষ্ঠানের ছত্র-ছাত্রীরা ঘরে
                                        বসেই পরীক্ষার রুটিন, সিলেবাস, হাজিরা, ভর্তি ফরম পাবে।
                                        অভিভাবকরাও ঘরে বসেই উত্তরোত্তর তাদের সন্তানের পরীক্ষার ফল,
                                        আচরণিক পরিবর্তন, সাফল্য, আত্নপ্রকাশ ক্ষমতা সম্পর্কে জানতে
                                        পারবে। এরই ফলশ্রতিতে বর্তমান সরকারের “ভিশন-২০২১” বাস্তবায়ন
                                        প্রক্রিয়া চলমান থাকবে-এ দৃঢ় প্রত্যয় ব্যক্ত করছি।
                                    </p>
                                    <p>
                                        জ্ঞানই শক্তি জ্ঞানই আলো। শিক্ষাই গতি, শিক্ষাই করবে দূর
                                        জগতের যত কালো। শিক্ষাই পারে তথ্য প্রযুক্তির সঠিক প্রয়োগ ও
                                        বাস্তবায়নের মাধ্যমে মানুষের জীবন ধারাকে উন্নত থেকে উন্নততর
                                        করতে। এ শিক্ষার জন্য, শিক্ষিত জাতির জন্য ১৯৬৩ সাল থেকে
                                        ঢাকা ক্যান্টনমেন্টে জাতীয় কৃষ্টি, সভ্যতা, সংস্কৃতি ও
                                        ঐতিহ্যের ধারক হয়ে নিরলস সেবা দিয়ে যা”ছ মুসলিম মডার্ন
                                        একাডেমি। এ প্রতিষ্ঠানের কার্যক্রমকে আরো যুগোপযোগী ও আধুনিক
                                        করার লক্ষ্যে বিভিন্ন প্রকল্প হাতে নেয়া হয়েছে। একটি
                                        আর্ন্তজাতিক মানসম্পন্ন ওয়েবসাইট চালুকরণ তার একটি অংশ
                                        মাত্র। যার মাধ্যমে আমাদের বিদ্যালয়ের বিভিন্ন তথ্য ও ছবি
                                        বিশ্বব্যাপী ছড়িয়ে পড়বে এবং প্রতিষ্ঠানের ছত্র-ছাত্রীরা ঘরে
                                        বসেই পরীক্ষার রুটিন, সিলেবাস, হাজিরা, ভর্তি ফরম পাবে।
                                        অভিভাবকরাও ঘরে বসেই উত্তরোত্তর তাদের সন্তানের পরীক্ষার ফল,
                                        আচরণিক পরিবর্তন, সাফল্য, আত্নপ্রকাশ ক্ষমতা সম্পর্কে জানতে
                                        পারবে। এরই ফলশ্রতিতে বর্তমান সরকারের “ভিশন-২০২১” বাস্তবায়ন
                                        প্রক্রিয়া চলমান থাকবে-এ দৃঢ় প্রত্যয় ব্যক্ত করছি।
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="title">প্রতিষ্ঠানের বৈশিষ্ট্য</p>
                    <div class="h-rule"></div>

                    <div class="row gx-5">
                        <div class="col-md-6">
                            <div class="row mb-5">
                                <div class="col-4">
                                    <div class="feature-title-img">
                                        <img class="h-100 w-100 img-fluid" src="https://picsum.photos/id/237/300/300"
                                            alt="" />
                                    </div>
                                </div>

                                <div class="col-8 ps-5">
                                    <h4>আধুনিক বিজ্ঞানাগার</h4>
                                    <hr class="dotted-hr" />
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Voluptatem, ipsam!
                                    </p>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-4">
                                    <div class="feature-title-img">
                                        <img class="h-100 w-100 img-fluid" src="https://picsum.photos/id/237/300/300"
                                            alt="" />
                                    </div>
                                </div>

                                <div class="col-8 ps-5">
                                    <h4>ইংলিশ স্পোকেন ক্লাব</h4>
                                    <hr class="dotted-hr" />
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Voluptatem, ipsam!
                                    </p>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-4">
                                    <div class="feature-title-img">
                                        <img class="h-100 w-100 img-fluid" src="https://picsum.photos/id/237/300/300"
                                            alt="" />
                                    </div>
                                </div>

                                <div class="col-8 ps-5">
                                    <h4>আধুনিক বিজ্ঞানাগার</h4>
                                    <hr class="dotted-hr" />
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Voluptatem, ipsam!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-img-right">
                                <img class="h-100 w-100 img-fluid" src="https://picsum.photos/id/237/300/300" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Content End-->

                <!-- Sidebar Start -->
                <div class="col-md-3">
                    <div class="notice-board mb-5" data-aos="zoom-in">
                        <p class="sidebar-header">নোটিশ বোর্ড</p>

                        <?php 
                          if(mysqli_num_rows($result) > 0){
                            
                            while($row = mysqli_fetch_assoc($result)){
                          
                        ?>
                        <div class="notice-item bg-secondary-subtle d-flex justify-content-between bg-white p-2 mb-1">
                            <div>
                                <p class="mb-0"><?php echo $row['title']?></p>
                                <p class="mb-0 text-black-50"><?php echo $row['date']?></p>
                            </div>
                        </div>

                        <?php 
                            }
                          }else{ 
                            echo "No notice found";
                          }                       
                        ?>
                    </div>

                    <p class="sidebar-header" data-aos="zoom-in">শিক্ষার্থী কর্নার</p>

                    <div class="student-corner mb-5" data-aos="zoom-in">
                        <div class="row row-cols-2 g-3">
                            <div class="col">
                                <div class="bg-info text-center p-4">
                                    <i class="fa-solid fa-calendar-days display-5 mb-3"></i>
                                    <p class="m-0">ক্লাস রুটিন</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="bg-info text-center p-4">
                                    <i class="fa-solid fa-house display-5 mb-3"></i>
                                    <p class="m-0">ক্লাস রুটিন</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="bg-info text-center p-4">
                                    <i class="fa-solid fa-calendar-days display-5 mb-3"></i>
                                    <p class="m-0">ক্লাস রুটিন</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="bg-info text-center p-4">
                                    <i class="fa-solid fa-house display-5 mb-3"></i>
                                    <p class="m-0">ক্লাস রুটিন</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="bg-info text-center p-4">
                                    <i class="fa-solid fa-calendar-days display-5 mb-3"></i>
                                    <p class="m-0">ক্লাস রুটিন</p>
                                </div>
                            </div>

                            <div class="col">
                                <div class="bg-info text-center p-4">
                                    <i class="fa-solid fa-house display-5 mb-3"></i>
                                    <p class="m-0">ক্লাস রুটিন</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="sidebar-header" data-aos="zoom-in">ডাউনলোড কর্নার</p>
                    <div class="download-corner" data-aos="zoom-in">
                        <div class="item bg-success text-white mb-2 d-flex justify-content-between align-items-center">
                            <span class="me-auto">
                                <i class="fa-solid fa-bars-progress"></i>
                                &nbsp;বাংলা ইবুক
                            </span>
                            <i class="fa-solid fa-cloud-arrow-down"></i>
                        </div>

                        <div class="item bg-success text-white mb-2 d-flex justify-content-between align-items-center">
                            <span class="me-auto">
                                <i class="fa-solid fa-bars-progress"></i>
                                &nbsp;বাংলা ইবুক
                            </span>
                            <i class="fa-solid fa-cloud-arrow-down"></i>
                        </div>

                        <div class="item bg-success text-white mb-2 d-flex justify-content-between align-items-center">
                            <span class="me-auto">
                                <i class="fa-solid fa-bars-progress"></i>
                                &nbsp;বাংলা ইবুক
                            </span>
                            <i class="fa-solid fa-cloud-arrow-down"></i>
                        </div>

                        <div class="item bg-success text-white mb-2 d-flex justify-content-between align-items-center">
                            <span class="me-auto">
                                <i class="fa-solid fa-bars-progress"></i>
                                &nbsp;বাংলা ইবুক
                            </span>
                            <i class="fa-solid fa-cloud-arrow-down"></i>
                        </div>

                        <div class="item bg-success text-white mb-2 d-flex justify-content-between align-items-center">
                            <span class="me-auto">
                                <i class="fa-solid fa-bars-progress"></i>
                                &nbsp;বাংলা ইবুক
                            </span>
                            <i class="fa-solid fa-cloud-arrow-down"></i>
                        </div>

                        <div class="item bg-success text-white mb-2 d-flex justify-content-between align-items-center">
                            <span class="me-auto">
                                <i class="fa-solid fa-bars-progress"></i>
                                &nbsp;বাংলা ইবুক
                            </span>
                            <i class="fa-solid fa-cloud-arrow-down"></i>
                        </div>
                    </div>
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Photo Gallery Start -->
    <section id="gallery">
        <div class="container bg-white" data-aos="fade-up">
            <p class="title">ফটো গ্যালারি</p>
            <div class="h-rule"></div>

            <div class="photo-gallery">
                <div class="row row-cols-4 g-1">
                    <div class="col">
                        <div class="gallery-item">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/300/300" alt="" />
                        </div>
                    </div>

                    <div class="col">
                        <div class="gallery-item">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/300/300" alt="" />
                        </div>
                    </div>

                    <div class="col">
                        <div class="gallery-item">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/300/300" alt="" />
                        </div>
                    </div>

                    <div class="col">
                        <div class="gallery-item">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/300/300" alt="" />
                        </div>
                    </div>

                    <div class="col">
                        <div class="gallery-item">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/300/300" alt="" />
                        </div>
                    </div>

                    <div class="col">
                        <div class="gallery-item">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/300/300" alt="" />
                        </div>
                    </div>

                    <div class="col">
                        <div class="gallery-item">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/300/300" alt="" />
                        </div>
                    </div>

                    <div class="col">
                        <div class="gallery-item">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/300/300" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Photo Gallery End -->

    <!-- Team Section START  -->

    <section>
        <div class="container bg-white" data-aos="fade-up">
            <p class="title">শিক্ষক মণ্ডলী</p>
            <div class="h-rule"></div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="team-member">
                        <div class="pro-pic">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/250/300" />
                        </div>
                        <div class="social-icon mb-3">
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                        <div class="text-center">
                            <h4>Lorem ipsum dolor</h4>
                            <p>Lorem, ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="team-member">
                        <div class="pro-pic">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/250/300" />
                        </div>
                        <div class="social-icon mb-3">
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                        <div class="text-center">
                            <h4>Lorem ipsum dolor</h4>
                            <p>Lorem, ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="team-member">
                        <div class="pro-pic">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/250/300" />
                        </div>
                        <div class="social-icon mb-3">
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                        <div class="text-center">
                            <h4>Lorem ipsum dolor</h4>
                            <p>Lorem, ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="team-member">
                        <div class="pro-pic">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/250/300" />
                        </div>
                        <div class="social-icon mb-3">
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                        <div class="text-center">
                            <h4>Lorem ipsum dolor</h4>
                            <p>Lorem, ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="team-member">
                        <div class="pro-pic">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/250/300" />
                        </div>
                        <div class="social-icon mb-3">
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                        <div class="text-center">
                            <h4>Lorem ipsum dolor</h4>
                            <p>Lorem, ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="team-member">
                        <div class="pro-pic">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/250/300" />
                        </div>
                        <div class="social-icon mb-3">
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                        <div class="text-center">
                            <h4>Lorem ipsum dolor</h4>
                            <p>Lorem, ipsum.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="team-member">
                        <div class="pro-pic">
                            <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/237/250/300" />
                        </div>
                        <div class="social-icon mb-3">
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                        <div class="text-center">
                            <h4>Lorem ipsum dolor</h4>
                            <p>Lorem, ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section END  -->

    <!-- Achievements Start -->
    <section id="achievements">
        <div class="container bg-white" data-aos="fade-up">
            <p class="title">আমাদের অর্জন</p>
            <div class="h-rule"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="achievement-img">
                        <img class="img-fluid w-100 h-100" src="https://picsum.photos/id/1/200/300" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong>
                                    It is shown by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any
                                    of this with custom CSS or overriding our default variables.
                                    It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the
                                    transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong>
                                    It is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any
                                    of this with custom CSS or overriding our default variables.
                                    It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the
                                    transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong>
                                    It is hidden by default, until the collapse plugin adds the
                                    appropriate classes that we use to style each element. These
                                    classes control the overall appearance, as well as the
                                    showing and hiding via CSS transitions. You can modify any
                                    of this with custom CSS or overriding our default variables.
                                    It's also worth noting that just about any HTML can go
                                    within the <code>.accordion-body</code>, though the
                                    transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements End -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/plugins/js/owlcarousel/owl.carousel.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
    AOS.init();
    </script>
    <script>
    $(".owl-carousel").owlCarousel({
        nav: true,
        loop: true,
        margin: 10,
        dots: false,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });

    particlesJS.load(
        "particles-js",
        "assets/plugins/js/particles/particles.json"
    );
    </script>
</body>

</html>