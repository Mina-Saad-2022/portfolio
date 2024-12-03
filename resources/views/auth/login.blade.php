 @extends('auth.layout.app')



 @section('content')
     <section class="forms-section">
         <h1 class="section-title">Animated Forms</h1>
         <div class="forms">

             {{-- ?  ||------------------------------------------------------------------------------- --}}
             {{-- ?  ||                                     form Login ||
             {{-- ?  ||------------------------------------------------------------------------------- --}}

             <div class="form-wrapper is-active">
                 <button type="button" class="switcher switcher-login">
                     Login
                     <span class="underline"></span>
                 </button>
                 <form class="form form-login" method="POST" action="{{ route('login') }}">
                     @csrf
                     <fieldset>
                         <legend>Please, enter your email and password for login.</legend>
                         <div class="input-block">
                             <label for="email">{{ __('Email Address') }}</label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                 name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                             @error('email')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                         <div class="input-block">
                             <label for="password">{{ __('Password') }}</label>
                             <input id="password" type="password"
                                 class="form-control @error('password') is-invalid @enderror" name="password"
                                 autocomplete="current-password">

                             @error('password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>

                         <div class="row mb-3">
                             <div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                         {{ old('remember') ? 'checked' : '' }}>

                                     <label class="form-check-label" for="remember">
                                         {{ __('Remember Me') }}
                                     </label>
                                 </div>
                             </div>
                         </div>

                         <div class="row mb-0">
                             <div>
                                 @if (Route::has('password.request'))
                                     <a class="btn btn-link" href="{{ route('password.request') }}">
                                         {{ __('Forgot Your Password?') }}
                                     </a>
                                 @endif
                             </div>
                         </div>

                     </fieldset>
                     <button type="submit" class="btn-login">Login</button>
                 </form>
             </div>

             {{-- ?  ||------------------------------------------------------------------------------- --}}
             {{-- ?  ||                                  form Register                                 ||
            {{-- ?  ||------------------------------------------------------------------------------- --}}
             <div class="form-wrapper">
                 <button type="button" class="switcher switcher-signup">
                     Sign Up
                     <span class="underline"></span>
                 </button>


                 <form method="POST" class="form form-signup" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                     <fieldset>
                         <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                         <div class="input-block">
                             <label for="name">{{ __('Name') }}</label>
                             <input   id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                 name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                             @error('name')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                         <div class="input-block">
                             <label for="email">{{ __('Email Address') }}</label>

                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                 name="email" value="{{ old('email') }}" required autocomplete="email">

                             @error('email')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror

                         </div>
                         <div class="input-block">
                             <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>

                         <div class="input-block">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>


                         <div class="input-block d-flex">
                             <input type="file" name="file" id="imageInput" class="inputfile" />
                             <label for="imageInput">Choose a file</label>
                             <div id="imagePreview"></div>
                         </div>
                     </fieldset>
                     <button type="submit" class="btn-signup">Continue</button>
                 </form>
             </div>
         </div>
     </section>
 @endsection
