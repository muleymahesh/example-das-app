@extends('layout')

  

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div >
                        <img src="https://dasgroupco.com/wp-content/uploads/2024/09/das-logo-3.png" width="130px">
                    </div>
                    <div>Analytics Dashboard
                        <div class="page-title-subheading">This is an example dashboard created using
                            build-in elements and components.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">New Orders</div>
                                <div class="widget-subheading">No. of orders</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>1896</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Orders</div>
                                <div class="widget-subheading"></div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>568</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Low Stock Items
                                </div>
                                <div class="widget-subheading">below threshold</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>4</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
</div>

@endsection