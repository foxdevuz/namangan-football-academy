@props(['student'])
{{-- {{ dd($student) }} --}}
<div class="col-lg-6">
    <div class="d-flex h-100">
        <div class="flex-shrink-0 box">
            <img
                class="img-fluid" src="{{ asset("/storage/images/" . $student->image) }}"
                alt=""
                style="width: 150px; height: 160px; object-fit: cover;"
            />
        </div>
        <div
            class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
            <h5 class="text-uppercase">{{ @trans('extras.teams_title') }}</h5>
            <span>{{ @trans('extras.name_student') }}: {{ $student->name }}</span>
            <span>{{ @trans('extras.position') }}: {{ $student->position}}</span>
            <span>{{ @trans('extras.birthday') }}: {{ $student->birthday }}</span>
        </div>
    </div>
</div>
