
<div class="field is-grouped">
    <p class="control is-expanded has-icons-left ">
        กรุณาระบุสถานะของท่าน
        <label class="radio">
            {{ Form::radio('sender_case', '1' , true) }}  <a >ผู้ถูกกระทำ</a>
        </label>
        <label class="radio">
            {{ Form::radio('sender_case', '2' , false) }} <a >ผู้แจ้งแทน</a>
        </label>
    </p>
</div>

<hr>
<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">ชื่อผู้แจ้ง</label>
    </div>
    <div class="field-body">
        <div class="field is-grouped">
            <p class="control is-expanded has-icons-left ">
                {!! Form::text('sender',null,['class'=>'input','placeholder'=>'ชื่อเรียก' , 'disabled' => 'disabled']) !!}
                <span class="icon is-small is-left"> <i class="fa fa-user"></i> </span> </p>
        </div>
        <div class="field-label is-normal">
            <label class="label">เบอร์มือถือผู้แจ้ง</label>
        </div>
        <div class="field">
            <p class="control is-expanded has-icons-left">
                {!! Form::text('agent_tel',null,['class'=>'input','placeholder'=>'เบอร์มือถือ 10 หลัก','disabled' => 'disabled','maxlength' => 10 ]) !!}
                <span class="icon  is-left"> <i class="fa fa-mobile-alt"></i> </span>
            </p>
        </div>
    </div>
</div>

