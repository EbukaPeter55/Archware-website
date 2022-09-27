@extends('layouts.app')

@section('description',
    'Archware - Africa\'s Leading Software Development Company
    Software development company helping businesses and individuals take advantage of the benefits of the global technology
    landscape.')
@section('title', 'Archware - Excellent Tech-based Solutions For Your Business')
@section('article:section', 'Home')
@section('url', 'www.archwareltd.com')
@section('image'){{ asset('customImages/Logo.svg') }}@stop

@section('content')
    <main>
        <section class="container-fluid hero-section" style="">
            {{-- <img src="customImages/heroImage.png" alt="heroImage"> --}}
            <div class="hero-section-copy container-xxl col-lg-7" style="">
                <h1 class="ik_stir">Empowering young Africans <br> with skills for the future </h1>
                <p>Master a specific skill to run your business better, solve a business problem, begin a career, advance
                    your skill set or simply stay current – the choice is yours.</p>
            </div>
            <div class="ik-ser">
                <input type="search" placeholder="Search for courses" class="ik-search ">

            </div>

        </section>
        <div class="ik-first-p mt-5 " style="margin-left: 80px">
            <p>Top Categories</p>
        </div>
        <br>
        <br>
        <div class="container-fluid ik-con">
            <div class="py-5">
                <div>
                    <p class="ik-second-p">Account & Finance Master Class</p>
                </div>
                <div>
                    <p class="ik-third-p">Account & Finance courses engage learners in applying the principles of corporate
                        finance and accounting to business decision-making. <br> Gain beginner to advanced knowledge of
                        account and finance management that is required in today’s work environment.</p>
                </div>
                <button type="button" class="buy-button">
                    Explore Account & Finance
                </button>
                <div class="d-flex flex-row flex-wrap justify-content-evenly">
                    <div class=" shop-card">
                        <img class="img-fluid" src="{{ asset('customImages/unsplash.png') }}" alt="Shop image" />
                        <div class="shop-card-heading">
                            <div>
                                <h4>Introduction to Finance and Accounting Specialization</h4>
                                <p class="ik-jj">Joy Fajendagba, Gbolahan Adekoya</p>
                                <p data="date-updated">Updated July 2022</p>
                            </div>
                            <li class="star-rating d-flex align-items-center"><span>4.4</span> <img
                                    src="{{ asset('customImages/ratings.png') }}" alt=""><span>(576)</span></li>
                            <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                                <div class="price-child d-flex flex-row">
                                    <p>N4,999</p>
                                    <p>N9,000</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=" shop-card">
                        <img class="img-fluid" src="{{ asset('customImages/unsplash.png') }}" alt="Shop image" />
                        <div class="shop-card-heading">
                            <div>
                                <h4>Introduction to Finance and Accounting Specialization</h4>
                                <p class="ik-jj">Joy Fajendagba, Gbolahan Adekoya</p>
                                <p data="date-updated">Updated July 2022</p>
                            </div>
                            <li class="star-rating d-flex align-items-center"><span>4.4</span> <img
                                    src="{{ asset('customImages/ratings.png') }}" alt=""><span>(576)</span></li>
                            <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                                <div class="price-child d-flex flex-row">
                                    <p>N4,999</p>
                                    <p>N9,000</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=" shop-card">
                        <img class="img-fluid" src="{{ asset('customImages/unsplash.png') }}" alt="Shop image" />
                        <div class="shop-card-heading">
                            <div>
                                <h4>Introduction to Finance and Accounting Specialization</h4>
                                <p class="ik-jj">Joy Fajendagba, Gbolahan Adekoya</p>
                                <p data="date-updated">Updated July 2022</p>
                            </div>
                            <li class="star-rating d-flex align-items-center"><span>4.4</span> <img
                                    src="{{ asset('customImages/ratings.png') }}" alt=""><span>(576)</span></li>
                            <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                                <div class="price-child d-flex flex-row">
                                    <p>N4,999</p>
                                    <p>N9,000</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=" shop-card">
                        <img class="img-fluid" src="{{ asset('customImages/unsplash.png') }}" alt="Shop image" />
                        <div class="shop-card-heading">
                            <div>
                                <h4>Introduction to Finance and Accounting Specialization</h4>
                                <p class="ik-jj">Joy Fajendagba, Gbolahan Adekoya</p>
                                <p data="date-updated">Updated July 2022</p>
                            </div>
                            <li class="star-rating d-flex align-items-center"><span>4.4</span> <img
                                    src="{{ asset('customImages/ratings.png') }}" alt=""><span>(576)</span></li>
                            <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                                <div class="price-child d-flex flex-row">
                                    <p>N4,999</p>
                                    <p>N9,000</p>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                </div>
                </div>
                    <div class="container d-flex flex-row justify-content-evenly px-4">
                        <div class="">
                            <div class=" flex-row  card mt-5"
                                style="background: #FAFAFA;box-shadow: 0px 18.1217px 20.3869px rgba(0, 0, 0, 0.05);border-radius: 11.7948px;">
                                <div class="">
                                    <img class="ik-easy" src="{{ asset('customImages/icon3.png') }}" alt=""
                                        style="">
                                </div>
                                <div class="row-lg-7 mt-4 mx-4">
                                    <p class="pt-4 ik-train-sec" ">   Easy Payment</p>
                                                    <p style="font-weight: 500;font-size: 17.6493px;line-height: 25px;letter-spacing: 0.01em;color: rgba(0, 0, 0, 0.6);">
                                                        Online billing invoice & contracts</p>
                                        
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class=" flex-row  card mt-5" style="background: #FAFAFA;box-shadow: 0px 18.1217px 20.3869px rgba(0, 0, 0, 0.05);border-radius: 11.7948px;">
                                                <div class="">
                                                    <img class="ik-easy" src="{{ asset('customImages/icon2.png') }}" alt="" style="">
                                                </div>
                                                <div class="row-lg-7 mt-4 mx-4">
                                                    <p class="pt-4 ik-train-sec" >  Scheduling</p>
                                                    <p style="font-weight: 500;font-size: 17.6493px;line-height: 25px;letter-spacing: 0.01em;color: rgba(0, 0, 0, 0.6);">
                                                        Easy scheduling & attendance tracking</p>
                                        
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class=" flex-row  card mt-5" style="background: #FAFAFA;box-shadow: 0px 18.1217px 20.3869px rgba(0, 0, 0, 0.05);border-radius: 11.7948px;">
                                                <div class="">
                                                    <img class="ik-easy" src="{{ asset('customImages/icon1.png') }}" alt="" style="">
                                                </div>
                                                <div class="row-lg-7 mt-4 mx-4">
                                                    <p class="pt-4 ik-train-sec"> Projects and exams</p>
                                                    <p style="font-weight: 500;font-size: 17.6493px;line-height: 25px;letter-spacing: 0.01em;color: rgba(0, 0, 0, 0.6);">
                                                        Several projects and exams are required</p>
                                        
                                                    
                                                </div>
                                               
                                            </div>
                                            
                                        </div>
                                    </div>
                                       
                                    
                                    <div class="ik-first-p mt-5 " style="margin-left: 80px">
                                        <p>Trending Courses</p>
                                    </div>
                                    <div class="d-flex flex-row flex-wrap justify-content-evenly" style="margin-left: ">
                                        <div class=" shop-card">
                                            <img class="img-fluid" src="{{ asset('customImages/unsplash.png') }}" alt="Shop image"/>
                                            <div class="shop-card-heading">
                                                <div>
                                                    <h4>Introduction to Finance and Accounting Specialization</h4>
                                                    <p class="ik-jj">Joy Fajendagba, Gbolahan Adekoya</p>
                                                    <p data="date-updated">Updated July 2022</p>
                                                </div>
                                                <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{ asset('customImages/ratings.png') }}" alt=""><span>(576)</span></li>
                                                <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                                                    <div class="price-child d-flex flex-row">
                                                        <p>N4,999</p>
                                                        <p>N9,000</p>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                        
                                        <div class=" shop-card">
                                            <img class="img-fluid" src="{{ asset('customImages/unsplash.png') }}" alt="Shop image"/>
                                            <div class="shop-card-heading">
                                                <div>
                                                    <h4>Introduction to Finance and Accounting Specialization</h4>
                                                    <p class="ik-jj">Joy Fajendagba, Gbolahan Adekoya</p>
                                                    <p data="date-updated">Updated July 2022</p>
                                                </div>
                                                <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{ asset('customImages/ratings.png') }}" alt=""><span>(576)</span></li>
                                                <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                                                    <div class="price-child d-flex flex-row">
                                                        <p>N4,999</p>
                                                        <p>N9,000</p>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                        
                                        <div class=" shop-card">
                                            <img class="img-fluid" src="{{ asset('customImages/unsplash.png') }}" alt="Shop image"/>
                                            <div class="shop-card-heading">
                                                <div>
                                                    <h4>Introduction to Finance and Accounting Specialization</h4>
                                                    <p class="ik-jj">Joy Fajendagba, Gbolahan Adekoya</p>
                                                    <p data="date-updated">Updated July 2022</p>
                                                </div>
                                                <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{ asset('customImages/ratings.png') }}" alt=""><span>(576)</span></li>
                                                <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                                                    <div class="price-child d-flex flex-row">
                                                        <p>N4,999</p>
                                                        <p>N9,000</p>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                        
                                        <div class=" shop-card">
                                            <img class="img-fluid" src="{{ asset('customImages/unsplash.png') }}" alt="Shop image"/>
                                            <div class="shop-card-heading">
                                                <div>
                                                    <h4>Introduction to Finance and Accounting Specialization</h4>
                                                    <p class="ik-jj">Joy Fajendagba, Gbolahan Adekoya</p>
                                                    <p data="date-updated">Updated July 2022</p>
                                                </div>
                                                <li class="star-rating d-flex align-items-center"><span>4.4</span> <img src="{{ asset('customImages/ratings.png') }}" alt=""><span>(576)</span></li>
                                                <div class="price d-flex flex-row flex-wrap align-items-baseline justify-content-between">
                                                    <div class="price-child d-flex flex-row">
                                                        <p>N4,999</p>
                                                        <p>N9,000</p>
                                                    </div>
                                                </div>
                                                
                                                   
                                                </div>
                                                
                                            </div>
                                    </div>
                                            <div class="ik-first-p mt-5 " style="margin-left: 80px">
                                                <p>All Courses</p>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="d-flex flex-row flex-wrap">
                                            <div style="margin-left: 4%">
                                            <div class=" ik-t-shop-card">
                                                <img class="img-fluid" src="{{ asset('customImages/Rectangle 10.png') }}" alt="Shop image"/>
                                            </div>
                                                <div class="shop-card-heading">
                                                    <div>
                                                        <h4>Software Development</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-left: 4%">
                                                <div class=" ik-t-shop-card">
                                                    <img class="img-fluid" src="{{ asset('customImages/Rectangle 11.png') }}" alt="Shop image"/>
                                                </div>
                                                    <div class="shop-card-heading">
                                                        <div>
                 <h4>Data Analytics</h4>
                                                        </div>
             </div>
                                                </div>
                                                <div style="margin-left: 4%">
                                                    <div class=" ik-t-shop-card">
                                                        <img class="img-fluid" src="{{ asset('customImages/Rectangle 12.png') }}" alt="Shop image"/>
                                                    </div>
                                                        <div class="shop-card-heading">
                                                            <div>
                                                                <h4>Account & Finance</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row flex-wrap">
                                                    <div style="margin-left: 4%">
                                                    <div class=" ik-t-shop-card">
                                                        <img class="img-fluid" src="{{ asset('customImages/Rectangle 13.png') }}" alt="Shop image"/>
                                                    </div>
                                                        <div class="shop-card-heading">
                                                            <div>
                                                                <h4>Design</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-left: 4%">
                                                        <div class=" ik-t-shop-card">
                                                            <img class="img-fluid" src="{{ asset('customImages/Rectangle 14.png') }}" alt="Shop image"/>
                                                        </div>
                                                            <div class="shop-card-heading">
                                                                <div>
                                                                    <h4>Business Development</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="margin-left: 4%">
                                                            <div class=" ik-t-shop-card">
                                                                <img class="img-fluid" src="{{ asset('customImages/Rectangle 15.png') }}" alt="Shop image"/>
                                                            </div>
                                                                <div class="shop-card-heading">
                                                                    <div>
                                                                        <h4>Sales</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row flex-wrap">
                                                            <div style="margin-left: 4%">
                                                            <div class=" ik-t-shop-card">
                                                                <img class="img-fluid" src="{{ asset('customImages/Rectangle 60.png') }}" alt="Shop image"/>
                                                            </div>
                                                                <div class="shop-card-heading">
                                                                    <div>
                                                                        <h4>Marketing</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="margin-left: 4%">
                                                                <div class=" ik-t-shop-card">
                                                                    <img class="img-fluid" src="{{ asset('customImages/Rectangle 61.png') }}" alt="Shop image"/>
                                                                </div>
                                                                    <div class="shop-card-heading">
                                                                        <div>
                                                                            <h4>Administration Management</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="margin-left: 4%">
                                                                    <div class=" ik-t-shop-card">
                                                                        <img class="img-fluid" src="{{ asset('customImages/Rectangle 62.png') }}" alt="Shop image"/>
                                                                    </div>
                                                                        <div class="shop-card-heading">
                                                                            <div>
                                                                                <h4>Human Resource Management</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex flex-row flex-wrap">
                                                                    <div style="margin-left: 4%">
                                                                    <div class=" ik-t-shop-card">
                                                                        <img class="img-fluid" src="{{ asset('customImages/Rectangle 63.png') }}" alt="Shop image"/>
                                                                    </div>
                                                                        <div class="shop-card-heading">
                                                                            <div>
                                                                                <h4>Customer Service</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div style="margin-left: 4%">
                                                                        <div class=" ik-t-shop-card">
                                                                            <img class="img-fluid" src="{{ asset('customImages/Rectangle 64.png') }}" alt="Shop image"/>
                                                                        </div>
                                                                            <div class="shop-card-heading">
                                                                                <div>
                                                                                    <h4>Leadership</h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        </div>
                                                                        
                                    

                                    
                                                        
                                                    
                                            </div>
                           
                                          


                        </main>

@endsection
