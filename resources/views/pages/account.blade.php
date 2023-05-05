@extends('layout.structure')

@section('account-active', 'active')

@section('page-title', 'Account section')

@section('content')
    <!-- ======= User Account Section ======= -->
    <section id="user_account" class="user_account mt-space">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Logout of my account</button>
        </form>
    </section><!-- End User Accounts Section -->
@endsection
