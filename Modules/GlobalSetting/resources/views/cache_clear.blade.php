@extends('admin.master_layout')
@section('title')
    <title>{{ __('Clear cache') }}</title>
@endsection
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="{{ route('admin.settings') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>{{ __('Clear cache') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                    </div>
                    <div class="breadcrumb-item active"><a href="{{ route('admin.settings') }}">{{ __('Settings') }}</a>
                    </div>
                    <div class="breadcrumb-item">{{ __('Clear cache') }}</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-warning alert-has-icon">
                                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                    <div class="alert-body">
                                        <div class="alert-title">{{ __('Warning') }}</div>
                                        {{ __('If you want to clearing all caches on your website may briefly affect its performance as cached data is regenerated.') }}
                                    </div>
                                </div>

                                <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#cacheClearModal">{{ __('Clear cache') }}</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="cacheClearModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Cache Clear Confirmation') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ __('Are You sure want to clear cache ?') }}</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <form action="{{ route('admin.cache-clear-confirm') }}" method="POST">
                        @csrf
                        <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Yes, Clear') }}</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
