<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fotter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">


      
</head>
<body>
    @include('layouts.navigation')
    <!-- (Hero Section) -->
    
    <div class="hero-section" style="background-color: #2ebf91; background-size: cover; background-repeat: no-repeat; background-position: center;" >
        <div class="container hero-content" >
        <h1 class="display-3 fw-bold mb-4">Together we make a difference</h1>
        <p class="lead mb-5">We work hard and with dedication to help those in need and spread goodness in our community</p>
        </div>
    </div>

    <!-- قسم من نحن -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="mission-section">
                    <h2 class="text-center mb-5 fw-bold">About Us</h2> 
                                       <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="mission-card text-center h-100">
                                <div class="mission-icon">
                                    <i class="fas fa-hand-holding-heart"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Our Mission</h4>
                                <p>We seek to provide assistance to those in need and bring about positive change in the lives of disadvantaged individuals and communities through sustainable charitable programs.</p>
                                </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="mission-card text-center h-100">
                                <div class="mission-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Our Vision</h4>
                                <p>We aspire to build an inclusive society free from poverty and deprivation, where all individuals have the opportunity to live with dignity and achieve their full potential.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="mission-card text-center h-100">
                                <div class="mission-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Our Goals</h4>
<p>We aim to strengthen social cohesion, support vulnerable groups, and empower communities through various development and relief initiatives.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- قسم القيم -->
    <div class="container values-section">
        <h2 class="section-title">Our Core Values</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="value-card text-center h-100">
                    <div class="value-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Transparency</h4>
                    <p>We believe in the importance of transparency in all our work and donation management to build trust with our partners and the community.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="value-card text-center h-100">
                    <div class="value-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Collaboration</h4>
                    <p>We work together as one team to achieve our shared goals and serve our community effectively.</p>
                </div>

            </div>
            <div class="col-md-3 mb-4">
                <div class="value-card text-center h-100">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Respect</h4>                    <p>We respect the dignity of every individual, value diversity and differences, and treat everyone with fairness and respect.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="value-card text-center h-100">
                    <div class="value-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Sustainability</h4>
<p>We strive to achieve a positive and sustainable impact that lasts over the long term in the communities we serve.</p>
</div>
            </div>
        </div>
    </div>

    <!-- قسم الإحصائيات -->
    <div class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 mb-4">
                    <div class="counter-box">
                        <div class="counter-number">5000</div>
                        Beneficiary                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="counter-box">
                        <div class="counter-number">200</div>
                        <div class="counter-label">Volunteer</div>                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="counter-box">
                        <div class="counter-number">100</div>
                        <div class="counter-label">Completed project</div>                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="counter-box">
                        <div class="counter-number">15</div>
                        <div class="counter-label">Year of experience</div>                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- قسم فريق العمل -->
<div class="container team-section">
    <h2 class="section-title">Our distinguished team</h2>
        <div class="row">
        @foreach($users as $user)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="team-card">
                <div class="team-img-container">
                    <img src="{{ asset('img/' . $user->profile_image) }}" class="team-img" alt="صورة {{ $user->name }}">
                    <div class="team-overlay">
                        <div>
                            <p class="mb-0">{{ $user->bio ?? 'Team Member' }}</p>                        </div>
                    </div>
                    <div class="role-badge">{{ $user->role_name ?? 'Member' }}</div>                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="text-muted">{{ $user->position }}</p>
                    @if($user->email)
                    <p class="mb-0"><i class="fas fa-envelope me-2"></i>{{ $user->email }}</p>
                    @endif
                    @if($user->phone)
                    <p><i class="fas fa-phone me-2"></i>{{ $user->phone }}</p>
                    @endif
                    <div class="team-social">
                        @if($user->facebook_url)
                        <a href="{{ $user->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                        @endif
                        @if($user->twitter_url)
                        <a href="{{ $user->twitter_url }}"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if($user->linkedin_url)
                        <a href="{{ $user->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if($user->instagram_url)
                        <a href="{{ $user->instagram_url }}"><i class="fab fa-instagram"></i></a>
                        @endif
                    </div>
                </div>
                @if($user->join_date)
                <div class="card-footer text-muted">
                    Join us: {{ date('Y-m-d', strtotime($user->join_date)) }}                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Footer -->
@include('layouts.footer')
<!-- أنماط CSS إضافية للفوتر -->
</body>
</html>