@extends('layout')

@section('content')

<section class="elibrary-hero">
    <h1>BIJAKSATU E-Library</h1>
    <p>
        A digital learning library for financial literacy, accounting,
        investment knowledge, and financial planning support services.
    </p>

    <a href="/library" class="btn">Explore Library</a>
</section>

<section class="library-intro">
    <h2>Learning Resources</h2>

    <div class="cards">
        <div>
            <h3>Financial Literacy</h3>
            <p>Learn basic money management, budgeting, saving and spending habits.</p>
        </div>

        <div>
            <h3>Finance & Accounting</h3>
            <p>Understand business finance, financial reporting and management concepts.</p>
        </div>

        <div>
            <h3>Investment Knowledge</h3>
            <p>Access basic investment and personal finance learning materials.</p>
        </div>

        <div>
            <h3>Student Reference</h3>
            <p>Suitable for trainees preparing for financial paraplanning support learning.</p>
        </div>
    </div>
</section>

@endsection