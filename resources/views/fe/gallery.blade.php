@extends('layouts.fe.base')
@section('title', 'Gallery')

@section('content')

    <section class="section-header-single">
        <img src="{{ asset('fe') }}/img/bg-gallery.jpg">
        <div class="overlay">
            <div class="header-title">
                <h3>Capture The Moment</h3>
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
        </section>
    </section>

    <ul class="breadcrumb">
        <li><a href="{{ route('fe.index') }}">Home</a></li>
        <li>Gallery</li>
    </ul>

    <!-- Photo Grid -->
    <section class="section section-gallery">
        <div class="container-fluid">
            <div class="single-head">
                <div class="col">
                    <img src="{{ asset('fe') }}/img/icon/013-photo.png">
                    <h3>Beautifull Gallery Of Mimika</h3>
                    <p>Tangkap momen - momen indah dengan nuansa instagramable di Mimika, Berikut adalah potret yang ditangkap
                        oleh wisatawan</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <a href="{{ asset('fe') }}/img/Gallery/22427484_369553130149066_8205756025140150272_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/22427484_369553130149066_8205756025140150272_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/22709112_126847261368839_3816787601726111744_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/22709112_126847261368839_3816787601726111744_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/28430212_200924710667049_7004971581080338432_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/28430212_200924710667049_7004971581080338432_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/28430212_200924710667049_7004971581080338432_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/29087715_1693103334069013_7217753722737131520_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="{{ asset('fe') }}/img/Gallery/24175228_913344825485214_1747928750328119296_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/24175228_913344825485214_1747928750328119296_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/23823687_523669887982025_4768024408549752832_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/23823687_523669887982025_4768024408549752832_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/29415561_163922580940067_2417069708558729216_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/29415561_163922580940067_2417069708558729216_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/27573391_1831430933557419_8533318736831053824_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/27573391_1831430933557419_8533318736831053824_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/28434752_386907991781375_9167553190177013760_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/28434752_386907991781375_9167553190177013760_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="{{ asset('fe') }}/img/Gallery/25015541_140076426774487_5369120968708980736_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/25015541_140076426774487_5369120968708980736_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/25037337_1825448214419842_48033548438863872_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/25037337_1825448214419842_48033548438863872_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/28753844_228354697736345_7723101941311471616_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/28753844_228354697736345_7723101941311471616_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/26870845_1740142096076715_486825953067008000_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/26870845_1740142096076715_486825953067008000_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="{{ asset('fe') }}/img/Gallery/27880266_1798970387070331_5621832064107020288_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/27880266_1798970387070331_5621832064107020288_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/29089828_175705203229064_354079736697192448_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/29089828_175705203229064_354079736697192448_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/27573391_1831430933557419_8533318736831053824_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/27573391_1831430933557419_8533318736831053824_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ asset('fe') }}/img/Gallery/29415561_163922580940067_2417069708558729216_n.jpg" class="swipebox"
                    title="Image by Instagram Explore Mimika">
                    <div class="wrapper">
                        <div class="zoom-effect">
                            <div class="image">
                                <img src="{{ asset('fe') }}/img/Gallery/29415561_163922580940067_2417069708558729216_n.jpg">
                                <div class="overlay">
                                    <span class="ion-search"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- <ul class="pagination">
        <a href="#" class="pagination-arrow arrow-left">
            <span class="ion-ios-arrow-back"></span>
        </a>
        <a class="pagin-number active">1</a>
        <a href="#" class="pagin-number">2</a>
        <a href="#" class="pagin-number">3</li>
            <a href="#" class="pagin-number">4</a>
            <a href="#" class="pagin-number">5</a>
            <a href="#" class="pagin-arrow arrow-right">
                <span class="ion-ios-arrow-forward"></span>
            </a>
    </ul> --}}

@endsection
