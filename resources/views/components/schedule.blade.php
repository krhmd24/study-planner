<section class="schedule">

    @php

        $days = [
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        ];

    @endphp

    @foreach($days as $day)

        <div class="day-column">

            <div class="day-header">

                <h3>{{ $day }}</h3>

            </div>

            <div class="course-list">

                @include('components.course-card')

                @include('components.course-card')

            </div>

        </div>

    @endforeach

</section>