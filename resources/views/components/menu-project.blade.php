<div class="w-1/8 fixed">
    <div class="@if ($menu == 'testprojects.create' || $menu == 'steepone.edit') bg-proyecto-on @else bg-proyecto-off @endif bg-cover w-20 h-20 -m-10 text-center items-start text-xs pt-5 text-white cursor-pointer"></div>
    <div class="@if ($menu == 'steeptwo.create') bg-empresa-on @else bg-empresa-off @endif bg-cover w-20 h-20 -ml-10 mt-16 text-center text-xs pt-5 text-black cursor-pointer text-clip"></div>
    <div class=" @if ($menu == 'steepthree.create') bg-legal-on @else bg-legal-off @endif bg-cover w-20 h-20 -ml-10 my-10 text-center text-xs pt-5 text-black cursor-pointer text-clip"></div>
    <div class=" @if ($menu == 'steepfour.create') bg-representante-on @else bg-representante-off @endif bg-cover w-20 h-20 -ml-10 my-10 text-center text-xs pt-5 text-black cursor-pointer text-clip"></div>
    <div class=" @if ($menu == 'steepfive.create') bg-contrato-on @else bg-contrato-off @endif bg-cover w-20 h-20 -ml-10 my-10 text-center text-xs pt-5 text-black cursor-pointer text-clip"></div>
</div>