@foreach ($roles as $rol)
<div class="col-span-6 sm:col-span-4 mt-3">
    {!! Form::checkbox('roles[]', $rol->id, null, ["class" => ""]) !!}
    {{$rol->name}}
</div>
@endforeach