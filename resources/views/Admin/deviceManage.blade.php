@extends("Admin.index")

@section("second_nav")
    <div class="col-sm-12 opa">
        <div class="panel panel-default">
            <div class="panel-body shadow_div">
                <h2>设备管理主界面</h2>
            </div>
        </div>
    </div>
@append



@section("main")
    <div class="col-sm-12 opa" ng-controller="admin_device">
        <div class="panel panel-default">
            <div class="panel-body shadow_div">
                <div id="pageView"  ng-view>


                </div>
            </div>
        </div>
    </div>
@stop


@section("bottom")
    @include("lib.ng_lib")
    <link rel="stylesheet" href="/style/viewAnimate.css">
    <script src="/scripts/controllers/admin/Device/sDevice.js"></script>
    <script src="/scripts/services/SelectPageService.js"></script>
@stop

