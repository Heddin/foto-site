<?php
/**
 * Created by Alexander Pshenisnuk aka Heddin.
 * @mail: temm.twilightwizard@gmsail.com
 * @github: https://github.com/Heddin
 *
 * Created with: PhpStorm
 *
 * Date: 18.11.2017 * Time: 17:52
 */?>
<aside>
    <ul id="slide-out" class="side-nav">
        <li><a href="#" class="subheader">{{__('site.menu')}}</a></li>
        <br class="divider">
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
</aside>
