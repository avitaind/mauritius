@extends('layouts.app')

@section('title')
    @lang('title.contact_us')
@stop

@section('content')

<main>

    <section class="aboutus-panel top-nav-padding ls-0">
        <div class="aboutus-contact py-5 px-2">
            <div class="container">
                <h1 class="section-title mt-0 mb-5 my-md-5 font-weight-light">@lang('site.contactus_contactus') </h1>

                @if( App::isLocale('en'))

                    <div class="row">

                        <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">

                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">Repair Service and Technical Support – Thailand</h3>

                                <div class="support_tel">+66 2138 9866 #2</div>

                                <div class="py-2">
                                    <b>Email</b><br>
                                    <a href="mailto:thsupport@avita.com">thsupport@avita.com</a>
                                </div>

                                <b>@lang('site.contactus_operating')</b><br>
                                Mon-Fri 08:30 – 18:00
                            </div>
                        </div>

                    </div>
                @else

                    <div class="row">

                        <div class="col-12 col-md-6 mb-5 mb-md-0 ls-0">

                            <div class="contact_us_card mb-4 mb-md-5">
                                <h3 class="contact_us_title">บริการซ่อมและการสนับสนุนด้านเทคนิค</h3>

                                <div class="support_tel">+66 2138 9866 #2</div>

                                <div class="py-2">
                                    <b>อีเมล</b><br>
                                    <a href="mailto:thsupport@avita.com">thsupport@avita.com</a>
                                </div>

                                <b>@lang('site.contactus_operating')</b><br>
                                Mon-Fri 08:30 – 18:00
                            </div>
                        </div>

                    </div>

                @endif

            </div>
        </div>
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>





</main>

@endsection
