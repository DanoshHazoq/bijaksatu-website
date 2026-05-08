@extends('layout')

@section('content')
<h1>Student Registration</h1>

<div class="box">
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('register.store') }}" method="POST" class="form">
        @csrf

        <label>Full Name *</label>
        <input type="text" name="full_name" required>

        <label>IC Number</label>
        <input type="text" name="ic_number">

        <label>Phone Number *</label>
        <input type="text" name="phone" required>

        <label>Email</label>
        <input type="email" name="email">

        <label>Education Level</label>
        <select name="education_level">
            <option value="">-- Select Education Level --</option>
            <option value="SPM">SPM</option>
            <option value="STPM">STPM</option>
            <option value="Diploma">Diploma</option>
            <option value="Degree">Degree</option>
            <option value="Others">Others</option>
        </select>

        <label>Course *</label>
        <select name="course" required>
            <option value="">-- Select Course --</option>
            <option value="K661-004-3:2025 Financial Paraplanning Support Services Level 3">
                K661-004-3:2025 Financial Paraplanning Support Services Level 3
            </option>
        </select>

        <label>Address</label>
        <textarea name="address" rows="3"></textarea>

        <label>Message</label>
        <textarea name="message" rows="4"></textarea>

        <button type="submit" class="btn">Submit Registration</button>
    </form>
</div>
@endsection