@extends('layout')

@section('content')

<section class="library-header">
    <h1>Digital Library</h1>
    <p>Free learning materials and reference books for BIJAKSATU trainees.</p>
</section>

<section class="book-grid">

    <div class="book-card">
        <span>Open Textbook</span>
        <h3>Financial Accounting</h3>
        <p>
            Open textbook resource suitable for accounting and financial reporting reference.
        </p>
        <a href="https://open.umn.edu/opentextbooks/textbooks/31" target="_blank" class="book-btn">
            View Book
        </a>
    </div>

    <div class="book-card">
        <span>PDF Book</span>
        <h3>Money and Youth</h3>
        <p>
            A useful financial literacy guide for young people covering money management basics.
        </p>
        <a href="https://moneyandyouth.com/wp-content/uploads/2018/11/Money-Youth-2018-EN.pdf" target="_blank" class="book-btn">
            Read PDF
        </a>
    </div>

    <div class="book-card">
        <span>Finance Book</span>
        <h3>Deep Finance</h3>
        <p>
            Finance-related reading material for understanding deeper financial management topics.
        </p>
        <a href="https://controllerscouncil.org/wp-content/uploads/2022/01/Deep-Finance-Book-Full-121.pdf" target="_blank" class="book-btn">
            Read PDF
        </a>
    </div>

    <div class="book-card">
        <span>Book Collection</span>
        <h3>Free Finance Book</h3>
        <p>
            A collection of free finance-related books and learning resources.
        </p>
        <a href="https://www.freefinancebook.com/home" target="_blank" class="book-btn">
            Visit Website
        </a>
    </div>

</section>

@endsection