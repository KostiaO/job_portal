@props([
    'width' => 90,
    'employer'
])

<img src="{{ asset('/storage/' . $employer->logo) }}" alt="job_card" class="rounded-xl" width="{{ $width }}" />
