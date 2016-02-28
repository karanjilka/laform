{!! $options['prefix'] !!}
@if($options['template']=='bootstrap-horizontal')
    @if($options['wrapper'] !== false)
        <?php $options['wrapper_attr']['class']=($errors->has($options['error_message_name']))?$options['wrapper_attr']['class'].' has-error':$options['wrapper_attr']['class']; ?>
        <div {!!Html::attributes($options['wrapper_attr'])!!} >
    @endif

    <?php $options['label_attr']['class']=$options['label_attr']['class'].' col-lg-2'; ?>
    @if(!empty($options['label']))
        {!! Form::label($name, $options['label'],$options['label_attr']) !!}
    @endif

    <div class="col-lg-4">
        @if(!empty($options['option']))
        @foreach($options['option'] as $key => $val)
        <div class="checkbox">
            <label>
            {!! $options['field_prefix'] !!}
            @if(!empty($options['value']) && in_array($key,$options['value']))
            {!! Form::checkbox($name,$key,true,$options['attr']) !!}
            @else
            {!! Form::checkbox($name,$key,null,$options['attr']) !!}
            @endif
            {!! $options['field_suffix'] !!}
            {!! $val !!}
            </label>
        </div>
        @endforeach
        @endif
        @if(!empty($options['help_block']['text']))
            <div {!!Html::attributes($options['help_block']['attr'])!!}>
                {!! $options['help_block']['text'] !!}
            </div>
        @endif
        @if($options['show_errors'] !== false && isset($errors))
            @foreach($errors->get($simple_name) as $err)
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

    @if(!empty($options['label']))
        {!! Form::label($name, $options['label'],$options['label_attr']) !!}
    @endif

    @if(!empty($options['option']))
    @foreach($options['option'] as $key => $val)
    <div class="checkbox">
        <label>
        {!! $options['field_prefix'] !!}
        @if(!empty($options['value']) && in_array($key,$options['value']))
        {!! Form::checkbox($name,$key,true,$options['attr']) !!}
        @else
        {!! Form::checkbox($name,$key,null,$options['attr']) !!}
        @endif
        {!! $options['field_suffix'] !!}
        {!! $val !!}
        </label>
    </div>
    @endforeach
    @endif

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
