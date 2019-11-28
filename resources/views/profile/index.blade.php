@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container content">
        <div class="card shadow-sm">
            <div class="card-header">{{ trans('messages.profile.title') }}</div>
            <div class="card-body">
                <h4 class="card-title">{{ $user->name }}</h4>
                <ul>
                    <li>{{ trans('messages.profile.info.role', ['role' => $user->role->name]) }}</li>
                    <li>{{ trans('messages.profile.info.register', ['date' => $user->created_at]) }}</li>
                    <li>{{ trans('messages.profile.info.2fa', ['2fa' => trans('messages.' . ($user->hasTwoFactorAuth() ? 'yes' : 'no'))]) }}</li>
                </ul>

                @if($user->hasTwoFactorAuth())
                    <form action="{{ route('profile.2fa.disable') }}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-danger">{{ trans('messages.profile.2fa.disable') }}</button>
                    </form>
                @else
                    <a class="btn btn-success" href="{{ route('profile.2fa.index') }}">{{ trans('messages.profile.2fa.enable') }}</a>
                @endif
            </div>
        </div>

        @if(! $user->hasVerifiedEmail())
            @if (session('resent'))
                <div class="alert alert-success mt-2" role="alert">
                    {{ trans('auth.verify-sent') }}
                </div>
            @endif

            <div class="alert alert-warning mt-3">
                <p>{{ trans('messages.profile.email-not-verified') }}</p>
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm mt-3">
                    <div class="card-header">{{ trans('messages.profile.change-password') }}</div>
                    <div class="card-body">
                        <form action="{{ route('profile.password') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="passwordConfirmPassInput">{{ trans('auth.current-password') }}</label>
                                <input type="password" class="form-control @error('password_confirm_pass') is-invalid @enderror" id="passwordConfirmPassInput" name="password_confirm_pass" required>

                                @error('password_confirm_pass')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="passwordInput">{{ trans('auth.password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="passwordInput" name="password" required>

                                @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="confirmPasswordInput">{{ trans('auth.confirm-password') }}</label>
                                <input type="password" class="form-control" id="confirmPasswordInput" name="password_confirmation" required>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ trans('messages.actions.update') }}</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm mt-3">
                    <div class="card-header">{{ trans('messages.profile.change-email') }}</div>
                    <div class="card-body">
                        <form action="{{ route('profile.email') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="emailInput">{{ trans('auth.email') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="emailInput" name="email" value="{{ old('email', $user->email) }}" required>

                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="emailConfirmPassInput">{{ trans('auth.current-password') }}</label>
                                <input type="password" class="form-control @error('email_confirm_pass') is-invalid @enderror" id="emailConfirmPassInput" name="email_confirm_pass" required>

                                @error('email_confirm_pass')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">{{ trans('messages.actions.update') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
