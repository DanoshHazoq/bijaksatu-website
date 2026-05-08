@extends('layout')

@section('content')

<section class="course-hero">
    <h1>Our Course</h1>
    <p>
        BIJAKSATU SDN BHD offers structured financial paraplanning training
        aligned with industry requirements and practical workplace skills.
    </p>
</section>

<section class="course-main-card">
    <span class="course-code">K661-004-3:2025</span>

    <h2>Financial Paraplanning Support Services</h2>

    <p><strong>Level:</strong> 3</p>

    <p>
        This programme focuses on financial planning support, client documentation,
        data management, risk profiling, cash flow statement preparation,
        net worth statement preparation, and financial planning awareness campaign.
    </p>

    <a href="{{ route('register') }}" class="btn course-btn">Register Now</a>
</section>

<section class="course-section">
    <h2>Competency Units</h2>

    <div class="course-grid">
        <div>
            <span>C01</span>
            <h3>Conduct Prospecting Activities</h3>
        </div>

        <div>
            <span>C02</span>
            <h3>Maintain Clients’ Financial Planning Database</h3>
        </div>

        <div>
            <span>C03</span>
            <h3>Prepare Clients’ Financial Risk Profiling</h3>
        </div>

        <div>
            <span>C04</span>
            <h3>Prepare Client’s Cash Flow Statement</h3>
        </div>

        <div>
            <span>C05</span>
            <h3>Prepare Client’s Net Worth Statement</h3>
        </div>

        <div>
            <span>C06</span>
            <h3>Propose Financial Planning Awareness Campaign</h3>
        </div>
    </div>
</section>

<section class="course-section">
    <h2>Course Focus</h2>

    <div class="focus-grid">
        <div>Client Documentation</div>
        <div>Financial Database Management</div>
        <div>Risk Profiling Support</div>
        <div>Cash Flow Preparation</div>
        <div>Net Worth Statement</div>
        <div>Financial Awareness Campaign</div>
    </div>
</section>

@endsection