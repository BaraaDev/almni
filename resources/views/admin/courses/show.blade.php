@extends('layouts.admin.app')

@section('title') {{__('course.all courses') . $title}} @endsection

@section('head')
    <link href="{{asset('admin/vendor/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet">
@endsection
@section('content')

    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-xxl-7">
                <div class="card">
                    <div class="card-body">
                        <div class="course-content d-flex justify-content-between flex-wrap">
                            <div>
                                <h3>{{$model->title}}</h3>
                                <ul class="d-flex align-items-center raiting my-0 flex-wrap">
                                    <li><span class="font-w500">5.0</span><i class="fas fa-star text-orange ms-2"></i>
                                    </li>
                                    <li>Review (1k)</li>
                                    <li>10k Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="video-img style-1">
                            <div class="view-demo">
                                <img src="{{$model->photo}}" alt="">
                                <div class="play-button text-center">
                                    <a href="https://www.youtube.com/watch?v=e6MhFghdQps" class="popup-youtube">
                                        <svg width="96" height="96" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6154 0C7.41046 0 0 7.41043 0 16.6154V55.3846C0 64.5896 7.41046 72 16.6154 72H55.3846C64.5895 72 72 64.5896 72 55.3846V16.6154C72 7.41043 64.5895 0 55.3846 0H16.6154ZM26.259 19.3846C26.5876 19.3728 26.9098 19.4783 27.1677 19.6821L46.5523 34.9129C47.2551 35.4672 47.2551 36.5328 46.5523 37.0871C40.0921 42.1633 33.6278 47.2366 27.1677 52.3125C26.2575 53.034 24.9168 52.3814 24.9231 51.22V20.7692C24.9226 20.0233 25.5135 19.4141 26.259 19.3846Z" fill="white"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="course-details-tab style-2 mt-4">
                            <nav>
                                <div class="nav nav-tabs tab-auto" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="true">About</button>
                                    <button class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">Reviews</button>
                                    <button class="nav-link " id="nav-discussion-tab" data-bs-toggle="tab" data-bs-target="#nav-discussion" type="button" role="tab" aria-controls="nav-discussion" aria-selected="false">Discussion</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <div class="about-content">
                                        <h4>About This Course</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                    <div class="user-pic2">
                                        <div class="d-flex align-items-center">
                                            <img src="images/courses/pic2.jpg" alt="">
                                            <div class="ms-3">
                                                <h4>Karen Hope</h4>
                                                <ul class="d-flex align-items-center raiting my-0 flex-wrap">
                                                    <li><span class="font-w500">5.0</span><i class="fas fa-star star-orange ms-2"></i>
                                                        <i class="fas fa-star star-orange"></i>
                                                        <i class="fas fa-star star-orange"></i>
                                                        <i class="fas fa-star star-orange"></i>
                                                        <i class="fas fa-star star-orange"></i>
                                                    </li>
                                                    <li>1 Month Ago</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    </div>
                                    <div class="user-pic2">
                                        <div class="d-flex align-items-center">
                                            <img src="images/courses/pic3.jpg" alt="">
                                            <div class="ms-3">
                                                <h4>Karen Hope</h4>
                                                <ul class="d-flex align-items-center raiting my-0 flex-wrap">
                                                    <li><span class="font-w500">5.0</span><i class="fas fa-star star-orange ms-2"></i>
                                                        <i class="fas fa-star star-orange"></i>
                                                        <i class="fas fa-star star-orange"></i>
                                                        <i class="fas fa-star star-orange"></i>
                                                        <i class="fas fa-star star-orange"></i>
                                                    </li>
                                                    <li>1 Month Ago</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="nav-discussion" role="tabpanel" aria-labelledby="nav-discussion-tab">
                                    <div class="about-content">
                                        <h4>About This Course</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <h4>Course’s Objectives</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-5">
                <div class="custome-accordion">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item card">
                            <h2 class="accordion-header border-0" id="headingOne">
                                <button class="accordion-button d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                    <span class="acc-heading">Video Courses</span>
                                    <span class="ms-auto">(1/110)</span>

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body card-body pt-0">
                                    <div class="acc-courses active">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M4 13C3.817 13 3.635 12.95 3.474 12.851C3.32918 12.7611 3.20965 12.6358 3.12671 12.4869C3.04378 12.338 3.00016 12.1704 3 12V4C3 3.653 3.18 3.331 3.474 3.149C3.61914 3.05976 3.7846 3.00891 3.95481 3.00121C4.12502 2.99351 4.29439 3.02923 4.447 3.105L12.447 7.105C12.6131 7.1882 12.7528 7.31599 12.8504 7.47405C12.948 7.63212 12.9997 7.81423 12.9997 8C12.9997 8.18578 12.948 8.36789 12.8504 8.52595C12.7528 8.68402 12.6131 8.8118 12.447 8.895L4.447 12.895C4.307 12.965 4.152 13 4 13Z" fill="var(--primary)"/>
														</svg>
													</span>
                                                <h4 class="m-0">Introduction</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
													</svg>
													</span>
                                                <h4 class="m-0">Getting Started</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
													</svg>
													</span>
                                                <h4 class="m-0">Tools</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
													</svg>
													</span>
                                                <h4 class="m-0">Install Tools</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
													</svg>
													</span>
                                                <h4 class="m-0">Plugins</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item card">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                    <span class="acc-heading">Audio</span>
                                    <span class="ms-auto">((1/25)</span>

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body card-body pt-0">
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
														<span class="acc-icon">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
														</svg>
														</span>
                                                <h4 class="m-0">Tools</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
														<span class="acc-icon">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
														</svg>
														</span>
                                                <h4 class="m-0">Install Tools</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
														<span class="acc-icon">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
														</svg>
														</span>
                                                <h4 class="m-0">Plugins</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item card">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="acc-heading">Module</span>
                                    <span class="ms-auto">((1/25)</span>


                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body card-body pt-0">
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
													</svg>
													</span>
                                                <h4 class="m-0">Tools</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
													</svg>
													</span>
                                                <h4 class="m-0">Install Tools</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
													</svg>
													</span>
                                                <h4 class="m-0">Plugins</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item card">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="acc-heading">Quiz</span>
                                    <span class="ms-auto">((1/25)</span>
                                </button>

                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body card-body pt-0">
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
													</svg>
													</span>
                                                <h4 class="m-0">Tools</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
													</svg>
													</span>
                                                <h4 class="m-0">Install Tools</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
													<span class="acc-icon">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.3337 6V4.66666C11.3337 2.79999 9.86699 1.33333 8.00033 1.33333C6.13366 1.33333 4.66699 2.79999 4.66699 4.66666V6C3.53366 6 2.66699 6.86666 2.66699 8V12.6667C2.66699 13.8 3.53366 14.6667 4.66699 14.6667H11.3337C12.467 14.6667 13.3337 13.8 13.3337 12.6667V8C13.3337 6.86666 12.467 6 11.3337 6ZM6.00033 4.66666C6.00033 3.53333 6.86699 2.66666 8.00033 2.66666C9.13366 2.66666 10.0003 3.53333 10.0003 4.66666V6H6.00033V4.66666ZM8.66699 11.3333C8.66699 11.7333 8.40033 12 8.00033 12C7.60033 12 7.33366 11.7333 7.33366 11.3333V9.33333C7.33366 8.93333 7.60033 8.66666 8.00033 8.66666C8.40033 8.66666 8.66699 8.93333 8.66699 9.33333V11.3333Z" fill="#374557"/>
													</svg>
													</span>
                                                <h4 class="m-0">Plugins</h4>
                                            </div>
                                            <span>1:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Apex Chart -->
    <script src="{{asset('admin/vendor/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
@endsection
