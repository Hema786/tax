@extends('layouts.app')

@section('content')

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Get Plan</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Pricing</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<br>

<!------ Include the above in your HEAD tag ---------->

<div class="container">    
    <div class="row">
        <div id="bookagent" class="tabcontent">
            <div class="wrapper">
                @csrf
                @php
                    $i = 1
                @endphp
                @foreach($pricingData as $pricing)
                <div class="package {{$pricing->recommended}}">
                    <div class="name">{{$pricing->title}}</div>
                    <div class="price">₹{{$pricing->price}}</div>
                    <div class="trial">@if($pricing->tenure == 0) Lifetime @else {{$pricing->tenure}} @endif</div>
                    <hr>
                    <ul>
                        @if($pricing->line1 != "")
                        <li>{{$pricing->line1}}</li>
                        @endif
                        @if($pricing->line2 != "")
                        <li>{{$pricing->line2}}</li>
                        @endif
                        @if($pricing->line3 != "")
                        <li>{{$pricing->line3}}</li>
                        @endif
                        @if($pricing->line4 != "")
                        <li>{{$pricing->line4}}</li>
                        @endif
                        @if($pricing->line5 != "")
                        <li>{{$pricing->line5}}</li>
                        @endif
                        @if($pricing->line6 != "")
                        <li>{{$pricing->line6}}</li>
                        @endif
                    </ul>
                    <a class="pricing_anchor" href="purchase_plan?id={{$pricing->id}}">
                        <button class="btn btn-primary">Purchanse</button>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection