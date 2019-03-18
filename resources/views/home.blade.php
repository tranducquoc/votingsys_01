@extends('layouts.poll.master')
@section('title')
    Poll Sun-Asterisk
@endsection
@section('content')
<section class="item-category-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-80 header-text text-center">
                <div class="body-form">
                    {!! Form::open(['id' => 'msform']) !!}
                        <ul id="progressbar">
                            <li class="active" id="progress1">
                                <div></div>
                            </li>
                            <li id="progress2">
                                <div></div>
                            </li>
                            <li id="progress3">
                                <div></div>
                            </li>
                            <li id="progress4">
                                <div></div>
                            </li>
                        </ul>
                        <fieldset>
                            <h2 class="fs-title">Thông tin</h2>
                            <div class="input">
                                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                
                                {!! 
                                    Form::text(
                                        'name', '', 
                                        [
                                            'class' => 'form-control input-inf', 
                                            'placeholder' => 'Nhập tên bạn...',
                                            'aria-describedby' => 'basic-addon1'
                                        ]
                                    ) 
                                !!}
                            </div>
                            <div class="input">
                                <span class="input-group-text"><i class="fa fa-envelope"
                                        aria-hidden="true"></i></span>
                                {!! 
                                    Form::text(
                                        'email', '', 
                                        [
                                            'class' => 'form-control input-inf', 
                                            'placeholder' => 'Nhập địa chỉ email của bạn...',
                                            'aria-describedby' => 'basic-addon1'
                                        ]
                                    ) 
                                !!}
                            </div>
                            <div class="input">
                                <span class="input-group-text"><i class="fa fa-text-width"
                                        aria-hidden="true"></i></span>
                                {!! 
                                    Form::text(
                                        'content', '', 
                                        [
                                            'class' => 'form-control input-inf', 
                                            'placeholder' => 'Nhập tiêu đề poll...',
                                            'aria-describedby' => 'basic-addon1'
                                        ]
                                    ) 
                                !!}
                            </div>
                            <div class="input">
                                {!! Form::select('option', ['1' => 'Một đáp án','2' => 'Nhiều đáp án'], '1', ['class'=>'form-control']) !!}
                            </div>
                            {!! Form::textarea('description', '', ['class' => 'form-control input-textarea', 'rows' => '4', 'placeholder' => 'Nhập mô tả cho poll này...']) !!}
                            <div class="input">
                                <span class="input-group-text"><i class="fa fa-clock-o"
                                        aria-hidden="true"></i></span>
                                <div class='col-sm-6 datetime'>
                                    {!! Form::text('endtime', '', ['class' => 'form-control datetime-input', 'id' => 'datetimepicker4', 'placeholder' => 'Chọn thời gian đống bầu chọn của poll...']) !!}
                                </div>
                            </div>
                            <div class="input">
                                <span class="input-group-text"><i class="fa fa-map-marker"
                                        aria-hidden="true"></i></span>
                                {!! Form::text('place', '', ['class' => 'form-control input-inf', 'placeholder'=> 'Nhập vị trí...', 'aria-describedby'=> 'basic-addon1', 'id'=> 'pac-input']) !!}
                            </div>
                            {{ Html::script(asset('/templates/votingsys/js/myScript.js')) }}
                            {!! Form::button('Next', ['name' => 'next', 'class' => 'next action-button']) !!}
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Tùy chọn</h2>
                            <div class="switch-button">
                                <div class="checkbox">
                                        {!! Form::checkbox('', '', '', ['data-toggle'=>'toggle', 'data-onstyle'=>'info']) !!}
                                        Cho phép người tham gia thêm tùy chọn mới
                                </div>
                                <div class="checkbox">
                                        {!! Form::checkbox('', '', '', ['data-toggle'=>'toggle', 'data-onstyle'=>'info']) !!}
                                        Cho phép chỉnh sửa tùy chọn
                                </div>
                            </div>
                            <div class="setting">
                                <div class='input-group date' id='datetimepicker1'>
                                    {!! Form::text('option', '', ['class' => 'form-control']) !!}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', ['class' => 'btn btn-danger btn-remove-option']) !!}
                                </div>
                                <div class="add-button">
                                    <div class="fa fa-plus rotate option-button"></div>
                                </div>
                                <div class="hidden-button">
                                    <div class="fa fa-file-image-o option-button"></div>
                                    <div class="fa fa-pencil option-button"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            {{ Html::script(asset('/templates/votingsys/js/buttonSpin.js')) }}
                            {!! Form::button('Previous', ['name' => 'previous', 'class' => 'previous action-button']) !!}
                            {!! Form::button('Next', ['name' => 'next', 'class' => 'next action-button']) !!}
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Cài đặt</h2>
                            <div class="switch-button">
                                <div class="checkbox" id="flip-checkbox1">
                                        {!! Form::checkbox('', '', '', ['data-toggle'=>'toggle', 'data-onstyle'=>'info']) !!}
                                        Cho phép người tham gia thêm tùy chọn mới
                                </div>
                                <div class="panel-checkbox" id="panel-checkbox1">
                                    <div class="form-check">
                                        {!! Form::radio('exampleRadios1', '', '', ['class'=> 'form-check-input', 'id'=>'exampleRadios1', 'checked']) !!}
                                        {!! Form::label('exampleRadios1', 'Yêu cầu phải đăng nhập tài khoản wsm', ['class'=>'form-check-label']) !!}
                                    </div>
                                    <div class="form-check">
                                        {!! Form::radio('exampleRadios1', '', '', ['class'=> 'form-check-input', 'id'=>'exampleRadios1', 'checked']) !!}
                                       {!! Form::label('exampleRadios1', 'Nhập tên', ['class'=>'form-check-label']) !!}
                                    </div>
                                    <div class="form-check">
                                        {!! Form::radio('exampleRadios1', '', '', ['class'=> 'form-check-input', 'id'=>'exampleRadios1', 'checked']) !!}
                                        {!! Form::label('exampleRadios1', 'Nhập email', ['class'=>'form-check-label']) !!}
                                    </div>
                                    <div class="form-check">
                                        {!! Form::radio('exampleRadios1', '', '', ['class'=> 'form-check-input', 'id'=>'exampleRadios1', 'checked']) !!}
                                        {!! Form::label('exampleRadios1', 'Nhập tên và email', ['class'=>'form-check-label']) !!}
                                    </div>
                                </div>

                                <div class="clear"></div>

                                <div class="checkbox" id="flip-checkbox2">
                                        {!! Form::checkbox('', '', '', ['data-toggle'=>'toggle', 'data-onstyle'=>'info']) !!}
                                        Cho phép chỉnh sửa tùy chọn
                                </div>
                                <div class="clear"></div>
                                <div class="panel-checkbox" id="panel-checkbox2">
                                    <div class="form-check">
                                        {!! Form::radio('exampleRadios3', '', '', ['class'=>'form-check-input', 'id'=>'exampleRadios2', 'checked']) !!}
                                        {!! Form::label('exampleRadios1', 'Ân tất cả thông tin bầu chọn', ['class' => 'form-check-label', 'exampleRadios1']) !!}
                                    </div>
                                    <div class="form-check">
                                        {!! Form::radio('exampleRadios3', '', '', ['class'=>'form-check-input', 'id'=>'exampleRadios2', 'checked']) !!}
                                        {!! Form::label('exampleRadios1', 'Chỉ hiển thị số lượng người bầu chọn', ['class' => 'form-check-label', 'exampleRadios1']) !!}
                                      </label>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="checkbox">
                                        {!! Form::checkbox('', '', '', ['data-toggle'=>'toggle', 'data-onstyle'=>'info']) !!}
                                        Vô hiệu hóa bầu chọn
                                </div>
                                <div class="clear"></div>
                                <div class="checkbox" id="flip-checkbox3">
                                        {!! Form::checkbox('', '', '', ['data-toggle'=>'toggle', 'data-onstyle'=>'info']) !!}
                                        Đặt số lượng bầu chọn tối đa
                                </div>
                                <div class="panel-checkbox" id="panel-checkbox3">
                                    <div class="input link-edit">
                                        <span class="input-group-text"><i class="fa fa-list-ol" aria-hidden="true"></i></span>
                                        {!! Form::number('number', '', ['class' => 'form-control input-inf', 'aria-describedby'=>'basic-addon1']) !!}
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="checkbox" id="flip-checkbox4">
                                        {!! Form::checkbox('', '', '', ['data-toggle'=>'toggle', 'data-onstyle'=>'info']) !!}
                                        Đặt mật khẩu
                                </div>
                                <div class="panel-checkbox" id="panel-checkbox4">
                                    <div class="input link-edit link-edit2">
                                        <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                                        {!! Form::password('', ['class' => 'form-control input-inf', 'id'=> 'password-field', 'aria-describedby'=> 'basic-addon1']) !!}
                                        <span class="input-group-text key-span toggle-password fa fa-eye" toggle="#password-field"></span>
                                    </div>
                                </div>
                            </div>

                        <div class="clear"></div>
                            {!! Form::button('Previous', ['name' => 'previous', 'class' => 'previous action-button']) !!}
                            {!! Form::button('Next', ['name' => 'next', 'class' => 'next action-button']) !!}
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Người tham gia</h2>
                            <strong>Nếu bạn muốn gởi thư mời tham gia bầu chọn đến email cụ thể, hãy nhập vào ô dưới
                                đây </strong>
                            {!! Form::text('tags', '', ['class' => 'form-control', 'placeholder'=>'Nhập Email người tham gia...', 'autofocus']) !!}
                            {!! Form::button('Previous', ['name' => 'previous', 'class' => 'previous action-button']) !!}
                            {!! Form::submit('Finish', ['name' => 'next', 'class' => 'next action-button']) !!}
                        </fieldset>
                    {!! Form::close() !!}
                    {{ Html::script(asset('/templates/votingsys/js/taginput.js')) }}
                </div>
            </div>
        </div>
    </div>
</section>
<section class="review-area section-gap relative" id="feature">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 pb-40 header-text text-center">
                <h1 class="pb-10 text-white">Tính năng</h1>
            </div>
        </div>
        <div class="row">
            <div class="active-review-carusel">
                <div class="single-review item">
                    <img src="/templates/votingsys/img/Fpoll-vote.jpg" alt="">
                    <div class="title justify-content-start d-flex">
                        <p>
                            Tạo bình chọn nhanh chóng và dễ dàng
                        </p>
                    </div>
                </div>
                <div class="single-review item">
                    <img src="/templates/votingsys/img/Fpoll-chart.png" alt="">
                    <div class="title justify-content-start d-flex">
                        <p>
                            Minh họa kết quả qua các biểu đồ
                        </p>
                    </div>
                </div>
                <div class="single-review item">
                    <img src="/templates/votingsys/img/Fpoll-security.jpg" alt="">
                    <div class="title justify-content-start d-flex">
                        <p>
                            Đảm bảo tính bảo mật thông qua mật khẩu bình chọn
                        </p>
                    </div>
                </div>
                <div class="single-review item">
                    <img src="/templates/votingsys/img/Fpoll-export.png" alt="">
                    <div class="title justify-content-start d-flex">
                        <p>
                            Truy xuất kết quả dưới dạng PDF, EXCEL
                        </p>
                    </div>
                </div>
                <div class="single-review item">
                    <img src="/templates/votingsys/img/Fpoll-responsive.jpg" alt="">
                    <div class="title justify-content-start d-flex">
                        <p>
                            Truy cập mọi lúc mọi nơi và hỗ trợ trên nhiều loại thiết bị
                        </p>
                    </div>
                </div>
                <div class="single-review item">
                    <img src="/templates/votingsys/img/Fpoll-like-share.jpg" alt="">
                    <div class="title justify-content-start d-flex">
                        <p>
                            Chia sẻ bình chọn thông qua Facebook
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
