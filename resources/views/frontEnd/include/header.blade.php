<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

    <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
    </label>

    <div class="navigation__background">&nbsp;</div>

    <nav class="navigation__nav">
        <ul class="navigation__list">
                     {{--//name--}}
           @if(Session::get('userName'))
                <li class="navigation__item">
                    <a href="{{route('/')}}" class="navigation__link"><span>{{Session::get('userName')}}</span></a>
                </li>
            @elseif(Session::get('driverName'))
                <li class="navigation__item">
                    <a href="{{route('/')}}" class="navigation__link"><span>{{Session::get('driverName')}}</span></a>
                </li>
            @else

            @endif
                    {{--            //home--}}
               <li class="navigation__item">
                <a href="{{route('/')}}" class="navigation__link"><span>Home</span></a>
              </li>

               @if(Session::get('userName'))
               @elseif(Session::get('driverName'))
               @else
                   <li class="navigation__item">
                       <a href="{{route('select-login')}}" class="navigation__link"><span>Login</span></a>
                   </li>
               @endif

                     {{--               //Registration--}}
               @if(Session::get('userName'))
               @elseif(Session::get('driverName'))
               @else
                   <li class="navigation__item">
                       <a href="{{route('user-register')}}" class="navigation__link"><span>Registration</span></a>
                   </li>
               @endif
            @if(Session::get('userName'))
                <li class="navigation__item">
                    <a href="#" class="navigation__link"><span>Routes</span></a>
                </li>
            @endif


               @if(Session::get('userName'))
            <li class="navigation__item">
                <a href="{{route('request-for-pickup')}}" class="navigation__link"><span>Pick up request</span></a>
            </li>
               @else
               @endif

               @if(Session::get('userName'))
                   <li class="navigation__item">
                       <a href="{{route('current-bus-location')}}" class="navigation__link"><span>See Bus location</span></a>
                   </li>
            @elseif(Session::get('driverName'))
                <li class="navigation__item">
                    <a href="{{route('driver-select-route')}}" class="navigation__link"><span>Start A Journey</span></a>
                </li>
            @endif

               @if(Session::get('userName'))

                   <li class="navigation__item">
                       <a href="{{route('user-logout')}}" class="navigation__link"><span>Logout</span></a>
                   </li>
            @elseif(Session::get('driverName'))
                <li class="navigation__item">
                    <a href="{{route('driver-logout')}}" class="navigation__link"><span>Logout</span></a>
                </li>
            @else
                   <li class="navigation__item">
                       <a href="#" class="navigation__link"><span>About us</span></a>
                   </li>
               @endif


        </ul>
    </nav>
</div>


