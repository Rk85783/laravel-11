@include('common.header')
<div>
    <h1>Home Page</h1>
</div>
{{-- @include('common.inner1', ['page' => 'This is home page']) --}}
@includeIf('common.inner', ['page' => 'This is home page'])
