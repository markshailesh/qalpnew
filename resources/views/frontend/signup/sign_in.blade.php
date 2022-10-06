<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>QALP EDUCARE | Best Home Tutor in Varanasi</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Header Start-->
    @include('frontend/include/header')
    <!--Header End-->

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">My Account</h1>
                <ul>
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                    <li>My Account</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- My Account Section Start -->
        <div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/key.png">
                    </div>
                    <div class="col-md-6 mt-20">
                        <div class="noticed">
                            <div class="main-part">
                                <div class="method-account">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <strong>Success!</strong> {{ $message }}
                                        </div>
                                    @endif
                                    <form method="post" action="{{ route('sign_in') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group floating-label mb-25">
                                                <input type="number" name="phone_number" id="phone"
                                                    placeholder="Enter Your Mobile No." required="">
                                                <label for="text-placeholder">Phone *</label>
                                                {{-- <span id="phone_error"></span> --}}
                                            </div>
                                            <div class="form-group floating-label mb-25">
                                                <input type="password" id="password" name="password"
                                                    placeholder="Password" required>
                                                <label for="text-placeholder">Password *</label>
                                            </div>
                                            <div class="form-group floating-label mb-25 text-center">
                                                <button type="submit" name="submit"
                                                    class="readon submit-btn">login</button>
                                            </div>
                                            <div class="last-password">
                                                <p>Not registered? <a data-toggle="modal"
                                                        data-target="#exampleModal">Create an account</a></p>
                                                <p>Forgot your password ? <a href="{{ URL::asset('forgot_password') }}">
                                                        Click Here</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account Section End -->

    </div>
    <!-- Main content End -->

    <!--- Start footer -->
    @include('frontend/include/footer')
    <!--- End Footer -->
