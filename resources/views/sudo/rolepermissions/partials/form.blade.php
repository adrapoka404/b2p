@foreach ($permisos as $permiso)
<div class="col-span-6 sm:col-span-4 mt-3">
    {!! Form::checkbox('permisos[]', $permiso->id, null, ["class" => ""]) !!}
    {{$permiso->name}}
</div>
@endforeach