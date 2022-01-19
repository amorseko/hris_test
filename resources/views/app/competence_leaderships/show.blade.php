<x-admin-layout>
    @section('title')@lang('crud.competence_leaderships.name')
    {{ $title }}
    @endsection
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>@lang('crud.competence_leaderships.index_title')</h3>
        @endslot
        <li class="breadcrumb-item">@lang('crud.competence_leaderships.name')</li>
        <li class="breadcrumb-item active">@lang('crud.competence_leaderships.show_title')</li>
    @endcomponent
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a
                    href="{{ route('competence-leaderships.index') }}"
                    class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.competence_leaderships.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.competence_leaderships.inputs.name')</h5>
                    <span>{{ $competenceLeadership->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('competence-leaderships.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\CompetenceLeadership::class)
                <a
                    href="{{ route('competence-leaderships.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
</x-admin-layout>
