{!! $options['prefix'] !!}
@if($options['template']=='bootstrap-horizontal')
    @if($options['wrapper'] !== false)
        <?php $options['wrapper_attr']['class']=($errors->has($options['error_message_name']))?$options['wrapper_attr']['class'].' has-error':$options['wrapper_attr']['class']; ?>
        <div {!!Html::attributes($options['wrapper_attr'])!!} >
    @endif

    <div class="col-lg-3 col-lg-offset-2">
        <div class="checkbox">
            <label {!! Html::attributes($options['label_attr']) !!}>
            {!! $options['field_prefix'] !!}
            {!! Form::checkbox($name,$options['option'],$options['value'],$options['attr']) !!}
            {!! $options['field_suffix'] !!}
            {!! $options['label'] !!}
            </label>
        </div>
        @if(!empty($options['help_block']['text']))
            <div {!!Html::attributes($options['help_block']['attr'])!!}>
                {!! $options['help_block']['text'] !!}
            </div>
        @endif
        @if($options['show_errors'] !== false && isset($errors))
            @foreach($errors->get($options['error_message_name']) as $err)
                <div {!! Html::attributes($options['error_attr']) !!}><?= $err ?></div>
            @endforeach
        @endif
    </div>

    @if($options['wrapper'] !== false)
    </div>
    @endif
@else
    @if($options['wrapper'] !== false)
        <?php $options['wrapper_attr']['class']=($errors->has($options['error_message_name']))?$options['wrapper_attr']['class'].' has-error':$options['wrapper_attr']['class']; ?>
        <div {!!Html::attributes($options['wrapper_attr'])!!} >
    @endif

    <div class="checkbox">
        <label {!! Html::attributes($options['label_attr']) !!}>
        {!! $options['field_prefix'] !!}
        {!! Form::checkbox($name,$options['option'],$options['value'],$options['attr']) !!}
        {!! $options['field_suffix'] !!}
        {!! $options['label'] !!}
        </label>
    </div>

    @if(!empty($options['help_block']['text']))
        <div {!!Html::attributes($options['help_block']['attr'])!!}>
            {!! $options['help_block']['text'] !!}
        </div>
    @endif

    @if($options['show_errors'] !== false && isset($errors))
        @foreach($errors->get($options['error_message_name']) as $err)
            <div {!! Html::attributes($options['error_attr']) !!}><?= $err ?></div>
        @endforeach
    @endif

    @if($options['wrapper'] !== false)
    </div>
    @endif
@endif
{!! $options['suffix'] !!}
