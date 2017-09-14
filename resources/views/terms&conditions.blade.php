@extends('layouts.master')

@section('title','terms&condtions')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-info">
                <div class="panel-heading"><h3>Kktootz Terms & Conditions
                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a></h3></div>
                    <div class="panel-body">
                        </strong>
                            <p>1. Hakikisha mara mbili jina la usajili pindi ufanyapo malipo.</p>
                            <p>2. Tunza kumbukumbu namba baada ya kufanya malipo.</p>
                            <p>3. Makosa ya size na rangi hayatafanyiwa kazi hivyo hakikisha size na rangi ya bidhaa uitakayo.</p>
                            <p>4. Bidhaa isiyolipiwa haitatumwa hivyo.</p>
                            <p>5. Bidhaa yenye mapungufu ni lazima irudishe ndani ya siku tano punde baada ya kupokelewa nje ya siku tano haitakubaliwa kurudi.</p>
                        </strong>
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection