@extends('layouts.app')

@section('title', 'Add category')

@section('css')

@endsection

<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Gest-Proj</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"></div>
                <div class="menu-title">Projects</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('projects.add') }}">
                        Add projects
                    </a>
                </li>
                <li>
                    <a href="{{ route('projects.get') }}">
                        Get projects
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Pages</li>
        <!-- Additional sections for transactions, budget, reports can be added here -->
    </ul>

    <!--end navigation-->
</div>

@section('content')


@endsection

@section('js')
@endsection
