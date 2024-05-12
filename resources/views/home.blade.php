@extends('layouts.app')

@section('content')
    <div class="container">
        <vue-jalali-calendar
            year="1394" {{-- year --}}
        month="4" {{-- month --}}
            {{--        onSelect=""--}} {{-- your event o select --}}
            :texts='{"2015-07-10":"1","2015-07-09":"2","2015-08-10":"2"}' {{-- custom text each days --}}
        ></vue-jalali-calendar>

        <form action="">
            <div class="card mt-3">
                <div class="card-header">
                    Currency input sample
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            currency input sampe:
                        </div>
                        <div class="col-md-6">
                            <currency-input xid="test" xname="test" xtitle="Currency input sample" xvalue="10000"></currency-input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    Remix icon picker
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            Remix icon picker
                        </div>
                        <div class="col-md-6">
                            <remix-icon-picker xname="icon" xvalue="ri-twitter-x-line"></remix-icon-picker>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
