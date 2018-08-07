@extends('galaxia-ui::layouts.dashboard')

@section('galaxia.body')
<div class="card card-default">
    <div class="card-header ">
        <div class="card-title">
            Option #one
        </div>
    </div>
    <div class="card-body">
        <h5>
            Pages default style
        </h5>
        <form class="" role="form">
            <div class="form-group form-group-default required ">
                <label>Project</label>
                <input class="form-control" required="" type="email">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-group-default required">
                        <label>First name</label>
                        <input class="form-control" required="" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-default">
                        <label>Last name</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
            </div>
            <div class="form-group form-group-default required">
                <label>Password</label>
                <input class="form-control" required="" type="password">
            </div>
            <div class="form-group form-group-default required">
                <label>Placeholder</label>
                <input class="form-control" placeholder="ex: some@example.com" required="" type="email">
            </div>
            <div class="form-group form-group-default disabled">
                <label>Disabled</label>
                <input class="form-control" value="You can put anything here" disabled="" type="email">
            </div>
            <div class="form-group form-group-default input-group">
                <div class="form-input-group">
                    <label>Project</label>
                    <input class="form-control" type="email">
                </div>
                <div class="input-group-append ">
                    <span class="input-group-text">Pages
                    </span>
                </div>
            </div>
            <div class="form-group form-group-default">
                <label>Investor <i class="fa fa-info text-complete m-l-5"></i>
                </label>
                <input class="form-control" name="investor" type="text">
            </div>
            <div class="form-group has-error form-group-default">
                <label>Error example</label>
                <input class="form-control" placeholder="ex: some@example.com" required="" type="email">
            </div>
            <label class="error bold" for="fieldname">This field is required.</label>
            @glxinput(['type' => 'password', 'icon_color' => 'text-success', 'icon' => 'bath', 'title' => 'test', 'append' => 'CHF', 'name' => 'linear'])
        </form>
    </div>
</div>
@endsection