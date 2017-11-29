<?php
/**
 * Created by Alexander Pshenisnuk aka Heddin.
 * @mail: temm.twilightwizard@gmsail.com
 * @github: https://github.com/Heddin
 *
 * Created with: PhpStorm
 *
 * Date: 18.11.2017 * Time: 15:36
 */
?>
    <header class="header">
        <nav class="nav grey darken-4">
            <div class="container">
                <a href="{{route('index')}}" class="brand-logo">
                    <i class="large material-icons" style="margin-top: 3px;">camera</i>
                    PhotobyKato
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">{{__('site.categories')}}</a></li>
                    <li><a href="#">{{__('site.blog')}}</a></li>
                    <li><a href="#">{{__('site.contacts')}}</a></li>
                    <li><a href="#">{{__('site.faq')}}</a></li>

                        @if(Auth::user())
                           <li>
                            <form action="{{route('logout')}}" method="POST">
                                {{csrf_field()}}
                                <input type="submit" value="Logout" class="btn grey lighten-1 black-text">
                            </form>
                           </li>
                        @endif
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only left">
                    <i class="material-icons">menu</i>
                </a>
            </div>
        </nav>
    </header>


