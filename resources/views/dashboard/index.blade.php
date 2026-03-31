@extends('layouts.app')

@section('title', 'Home — Project Garden')

@section('content')

<section class="hero-dark">
    <div class="container" style="position: relative; z-index: 1;">

        <p class="hero-eyebrow">Student portfolio</p>

        <h1 class="hero-display">
            Building<br>
            <span>things.</span>
        </h1>

        <p class="hero-description">
            A digital garden of projects built while learning
            Laravel, Bootstrap, and modern web development at university.
        </p>

        <div class="d-flex gap-3 flex-wrap">
            <a href="/projects" class="hero-btn-primary">View projects →</a>
            <a href="https://github.com/YOUR_USERNAME" target="_blank" class="hero-btn-secondary">GitHub ↗</a>
        </div>

        <div class="hero-stats">
            <div>
                <div class="hero-stat-num">5+</div>
                <div class="hero-stat-label">Projects</div>
            </div>
            <div class="hero-stat-divider"></div>
            <div>
                <div class="hero-stat-num">2</div>
                <div class="hero-stat-label">Semesters</div>
            </div>
            <div class="hero-stat-divider"></div>
            <div>
                <div class="hero-stat-num">∞</div>
                <div class="hero-stat-label">To learn</div>
            </div>
        </div>

    </div>
</section>

{{-- Placeholder — Phase 7 builds this out --}}
<section style="background: var(--color-bg); padding: 5rem 0;">
    <div class="container">
        <p class="text-center text-muted" style="font-size: 0.9rem;">
            Featured projects coming soon ↓
        </p>
    </div>
</section>

@endsection