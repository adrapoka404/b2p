
<div class="col-span-6 sm:col-span-4 mt-3">
    {!! Form::text('name', null, ["class" => "border-2 focus:bg-white rounded-full mt-1 block w-1/2 mx-auto", "placeholder" => __('Nombre'), "autofocus"]) !!}
</div>
<div class="col-span-6 sm:col-span-4 mt-3">
    {!! Form::text('email', null, ["class" => "border-2 focus:bg-white rounded-full mt-1 block w-1/2 mx-auto", "placeholder" => __('Email') ]) !!}
</div>
<div class="col-span-6 sm:col-span-4 mt-3">
    {!! Form::text('password', null, ["class" => "border-2 focus:bg-white rounded-full mt-1 block w-1/2 mx-auto", "placeholder" => __('Pass')]) !!}
</div>

<div class="col-span-6 sm:col-span-4 mt-3">
    <select name="role_id" class="border-2 focus:bg-white rounded-full  mt-1 block w-1/2 mx-auto">
        <option>Selecciona Role</option>
        @foreach ($roles as $rol)
            @if (isset($rolActual) && $rol->id == $rolActual)
                <option value="{{$rol->id}}" selected>{{$rol->name}}</option>
            @else
            <option value="{{$rol->id}}">{{$rol->name}}</option>
            @endif
        @endforeach
    </select>
    
</div>
