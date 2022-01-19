<x-admin-layout>
    @section('title')@lang('crud.assignment_histories.name')
    {{ $title }}
    @endsection
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>@lang('crud.assignment_histories.index_title')</h3>
        @endslot
        <li class="breadcrumb-item">@lang('crud.assignment_histories.name')</li>
        <li class="breadcrumb-item active">@lang('crud.assignment_histories.edit_title')</li>
    @endcomponent
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('assignment-histories.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.assignment_histories.edit_title')
            </h4>

            <x-form
                method="PUT"
                action="{{ route('assignment-histories.update', $assignmentHistory) }}"
                class="mt-4"
            >
                @include('app.assignment_histories.form-inputs')

                <div class="mt-4">
                    <a
                        href="{{ route('assignment-histories.index') }}"
                        class="btn btn-light"
                    >
                        <i class="icon ion-md-return-left text-primary"></i>
                        @lang('crud.common.back')
                    </a>

                    <a
                        href="{{ route('assignment-histories.create') }}"
                        class="btn btn-light"
                    >
                        <i class="icon ion-md-add text-primary"></i>
                        @lang('crud.common.create')
                    </a>

                    <button type="submit" class="btn btn-primary float-right">
                        <i class="icon ion-md-save"></i>
                        @lang('crud.common.update')
                    </button>
                </div>
            </x-form>
        </div>
    </div>
</div>
</x-admin-layout>