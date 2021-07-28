@extends('mainStructure')

@section('content')
    <div class="container">
        <div class="row" style="display: grid; place-items: center;">
            <div class="col-md-8" style="display: grid; place-items: center;" id="home-main-box">
                <h1>My Restrurent App</h1>
            </div>
        </div>
    </div>
@stop

<style>
    #home-main-box {
        padding: 50px;
        margin: 50px;
        box-shadow: -5px -5px 30px 5px red, 5px 5px 30px 5px blue;
    }

</style>
