@extends('frontend.layouts.master')

@section('meta_title', $seo_setting['home_page']['seo_title'])
@section('meta_description', $seo_setting['home_page']['seo_description'])
@section('meta_keywords', '')

@section('contents')
    @if ($sectionSetting?->hero_section)
        <!-- banner-area -->
        @include('frontend.home-one.sections.banner-area')
        <!-- banner-area-end -->
    @endif

    @if ($sectionSetting?->top_category_section)
        <!-- categories-area -->
        @include('frontend.home-one.sections.category-area')
        <!-- categories-area-end -->
    @endif

    @if ($sectionSetting?->brands_section)
        <!-- brand-area -->
        @include('frontend.home-one.sections.brand-area')
        <!-- brand-area-end -->
    @endif

    @if ($sectionSetting?->about_section)
        <!-- about-area -->
        @include('frontend.home-one.sections.about-area')
        <!-- about-area-end -->
    @endif

    @if ($sectionSetting?->featured_course_section)
        <!-- course-area -->
        @include('frontend.home-one.sections.course-area')
        <!-- course-area-end -->
    @endif

    @if ($sectionSetting?->news_letter_section)
        <!-- newsletter-area -->
        @include('frontend.home-one.sections.newsletter-area')
        <!-- newsletter-area-end -->
    @endif

    @if ($sectionSetting?->featured_instructor_section)
        <!-- instructor-area -->
        @include('frontend.home-one.sections.instructor-area')
        <!-- instructor-area-end -->
    @endif
    @if ($sectionSetting?->counter_section)
        <!-- fact-area -->
        @include('frontend.home-one.sections.fact-area')
        <!-- fact-area-end -->
    @endif

    @if ($sectionSetting?->faq_section)
        <!-- faq-area -->
        @include('frontend.home-one.sections.faq-area')
        <!-- faq-area-end -->
    @endif

    @if ($sectionSetting?->our_features_section)
        <!-- features-area -->
        @include('frontend.home-one.sections.features-area')
        <!-- features-area-end -->
    @endif

    @if ($sectionSetting?->banner_section)
        <!-- instructor-area-two -->
        @include('frontend.home-one.sections.instructor-area-two')
        <!-- instructor-area-two-end -->
    @endif

    @if ($sectionSetting?->latest_blog_section)
        <!-- blog-area -->
        @include('frontend.home-one.sections.blog-area')
        <!-- blog-area-end -->
    @endif
@endsection