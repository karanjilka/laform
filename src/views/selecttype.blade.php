
{!! $options['prefix'] !!}
@if($options['template']=='bootstrap-horizontal')
    @if($options['wrapper'] !== false)
        <?php $options['wrapper_attr']['class']=($errors->has($simple_name))?$options['wrapper_attr']['class'].' has-error':$options['wrapper_attr']['class']; ?>
        <div {!!Html::attributes($options['wrapper_attr'])!!} >
    @endif

    <?php $options['label_attr']['class']=$options['label_attr']['class'].' col-lg-2'; ?>
    @if(!empty($options['label']))
        {!! Form::label($name, $options['label'],$options['label_attr']) !!}
    @endif

    <div class="col-lg-3">
        {!! $options['field_prefix'] !!}
        {!! Form::select($name,$options['options'],$options['value'],$options['attr']) !!}
        {!! $options['field_suffix'] !!}
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
        <?php $options['wrapper_attr']['class']=($errors->has($name))?$options['wrapper_attr']['class'].' has-error':$options['wrapper_attr']['class']; ?>
        <div {!!Html::attributes($options['wrapper_attr'])!!} >
    @endif

    @if(!empty($options['label']))
        {!! Form::label($name, $options['label'],$options['label_attr']) !!}
    @endif

    {!! $options['field_prefix'] !!}
    {!! Form::select($name,$options['options'],$options['value'],$options['attr']) !!}
    {!! $options['field_suffix'] !!}

    @if(!empty($options['help_block']['text']))
        <div {!!Html::attributes($options['help_block']['attr'])!!}>
            {!! $options['help_block']['text'] !!}
        </div>
    @endif

    @if($options['show_errors'] !== false && isset($errors))
        @foreach($errors->get($name) as $err)
            <div {!! Html::attributes($options['error_attr']) !!}><?= $err ?></div>
        @endforeach
    @endif

    @if($options['wrapper'] !== false)
    </div>
    @endif
@endif
{!! $options['suffix'] !!}
